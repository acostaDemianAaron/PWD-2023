<?php
require_once('../Config/config.php');
require_once('../vendor/autoload.php');
require_once('../Controller/JWT.php');

if(key_exists("name", data_submitted())){
  $curl = curl_init();

  // Login/Manually insert keys.
  $jwt = generateJWT("",
                    "",
                    "");

  $curl = curl_init();

  $name = data_submitted()['name'] . " " . data_submitted()['surname'];
  $documentName = data_submitted()['documentName'];

  // TODO Arreglar template.id not found error.
  curl_setopt_array($curl, [
    CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/documents/generate",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => '{"template":{"id":"799876","data":{"Name":' . $name . '","DueDate":"2023-10-03"}}, "format":"pdf","output":"url","name":"' . $documentName . '"}',
    CURLOPT_HTTPHEADER => [
      "Authorization: Bearer $jwt",
      "Content-Type: application/json"
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2">Respuesta del servidor</h6>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <?php
                                print_r($json);
                                // if ($json) {
                                //     if ($persona->Add($data)) {
                                //         echo '<h6 class="m-4">Se cargo la persona</h6>';
                                //     } else {
                                //         echo '<h6 class="m-4">No se pudo cargar el dato en la base de datos</h6>';
                                //     }
                                // } else {
                                //     echo '<h6 class="m-4">Ya existe una persona con ese DNI</h6>';
                                // }
                                ?>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
  }
}
?>