<?php 
require_once('../vendor/autoload.php');

use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\Algorithm\HS256;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Signature\Serializer\CompactSerializer;

function generateJWT(String $apiKey, String $workspaceID, String $secret){
   // The algorithm manager with the HS256 algorithm.
   $algorithmManager = new AlgorithmManager([
      new HS256(),
   ]);

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

   return $token;
}
?>

