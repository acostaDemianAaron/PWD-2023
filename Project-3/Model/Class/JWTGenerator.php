<?php 
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\Algorithm\HS256;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Signature\Serializer\CompactSerializer;

class JWTGenerator{
   private string $token;

   public function __construct()
   {
      $this->token = "";
   }
   // Getters
   public function getToken(){
      return $this->token;
   }

   // Setters
   private function setToken($token){
      $this->token = $token;
   }

   public function generateKey($apiKey, $workspaceID, $secretKey){
      // The algorithm manager with the HS256 algorithm.
      $algorithmManager = new AlgorithmManager([
         new HS256(),
      ]);
   
      try{
         // Our key.
         $jwk = new JWK([
            'kty' => 'oct',
            'k' => $secretKey
         ]);
   
         // The payload we want to sign. The payload MUST be a string hence we use our JSON Converter.
         $payload = json_encode([
            'iss' => $apiKey,
            'sub' => $workspaceID,
            'exp' => time() + 3
         ]);
   
         // We instantiate our JWS Builder.
         $jwsBuilder = new JWSBuilder($algorithmManager);
      
         $jws = $jwsBuilder
          ->create()                                                 // We want to create a new JWS
          ->withPayload($payload)                                    // We set the payload
          ->addSignature($jwk, ['alg' => 'HS256', 'typ' => 'JWT'])   // We add a signature with a simple protected header
          ->build();
      
         $serializer = new CompactSerializer(); // The serializer
      
         $token = $serializer->serialize($jws, 0); // We serialize the signature at index 0 (we only have one signature).
      } catch(Exception $e){
         $token = $e->getMessage();
      }

      $this->setToken($token);
   }
}
?>

