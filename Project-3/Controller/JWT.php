<?php 
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\Algorithm\HS256;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Signature\Serializer\CompactSerializer;

function generateJWT(){
   // Complete keys
   $apiKey = "660e9c4863d6c4a18c66f56f8b783ec0df9853fc4176971f70a6fb3f0ed4c0e8";
   $workspaceID = "alan.vera@est.fi.uncoma.edu.ar";
   $secret = "301eea4ccedf0f4b6023358a801b10ea041a85e8df0a946e8911ab33656037e5";

   // The algorithm manager with the HS256 algorithm.
   $algorithmManager = new AlgorithmManager([
      new HS256(),
   ]);

   try{
      // Our key.
      $jwk = new JWK([
         'kty' => 'oct',
         'k' => base64_encode($secret)
      ]);

      // The payload we want to sign. The payload MUST be a string hence we use our JSON Converter.
      $payload = json_encode([
         'iss' => $apiKey,
         'sub' => $workspaceID,
         'exp' => time() + 5
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

   return $token;
}
?>

