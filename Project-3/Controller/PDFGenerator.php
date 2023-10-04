<?php
/**
 * Creates a new pdf from data_submited parameters.
 */
function generatePDF($data){
  if(key_exists("name", $data) && key_exists("surname", $data) && key_exists("documentName", $data)){
    // Initiate cURL.
    $curl = curl_init();

    // Login/Manually insert keys.
    $jwt = generateJWT();

    // Set date to current date.
    if(key_exists("documentDate", $data)){
      $date = $data["documentDate"];
    } else {
      $date = date("Y-m-d");
    }

    // Set cURL values
    curl_setopt_array($curl, [
      CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/documents/generate",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => '{"template":{"id":"799876","data":{"name":"' . $data["name"] . '","DueDate":"' . $date . '"}},"format":"pdf","output":"url","name":"' . $data['document'] . '"}',
      CURLOPT_HTTPHEADER => ["Authorization: Bearer $jwt", "Content-Type: application/json"]
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return array(["error" => $err]);
    } else {
      $json = json_decode($response);
      return $json;
    }
  } else {
    return array(["error" => "The values weren't set correctly."]);
  }
}

/**
 * Gets a collection of documents saved.
 * @param int
 */
function getPDFs($page = 1){
  // Initiate cURL.
  $curl = curl_init();

  // Login/Manually insert keys.
  $jwt = generateJWT();

  // Set cURL values
  curl_setopt_array($curl, [
     CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/documents?start_date=2023-10-01%2000%3A00%3A00&page={$page}&per_page=20",
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
    return array(["error" => $err]);
  } else {
     $json = json_decode($response);
     return $json;
  }
}