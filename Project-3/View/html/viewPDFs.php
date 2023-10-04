<?php
require_once('../../vendor/autoload.php');
require_once('../../Controller/JWT.php');

$curl = curl_init();

// Login/Manually insert keys.
$jwt = generateJWT("",
                  "",
                  "");

curl_setopt_array($curl, [
   CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/documents?start_date=2023-10-01%2000%3A00%3A00&page=1&per_page=20",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => [
     "Authorization: Bearer $jwt"
   ],
 ]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
   $json = json_decode($response);
?>
<body>
   <h1>PDF en la base de datos</h1>
   <?php 
      foreach($json as $document){
         echo "<br>";
         print_r($document);
         echo "<br>";
      }
   ?>
</body>
<?php
}
?>