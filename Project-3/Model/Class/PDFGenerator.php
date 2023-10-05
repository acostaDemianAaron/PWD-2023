<?php
class PDFGenerator extends JWTGenerator
{
   private $apiKey;
   private $workspaceID;
   private $secretKey;
   private String $template;
   private object $documents; // Array of documents found as a stdClass object.
   private object $response;

   /**
    * Start a transaction.
    */
   public function __construct($apiKey, $workspaceID, $secretKey)
   {
      $this->setApiKey($apiKey);
      $this->setWorkspaceID($workspaceID);
      $this->setSecretKey($secretKey);
   }

   // Getters
   private function getapiKey()
   {
      return $this->apiKey;
   }

   private function getWorkspaceID()
   {
      return $this->workspaceID;
   }

   private function getSecretKey()
   {
      return $this->secretKey;
   }

   // private function getTemplate(){
   //    return $this->template;
   // }

   // public function getDocuments(){
   //    return $this->template;
   // }

   public function getResponse()
   {
      return $this->response;
   }

   // Setters
   private function setApiKey($apiKey)
   {
      $this->apiKey = $apiKey;
   }

   private function setWorkspaceID($workspaceID)
   {
      $this->workspaceID = $workspaceID;
   }

   private function setSecretKey($secretKey)
   {
      $this->secretKey = base64_encode($secretKey);
   }

   // private function setTemplate($template){
   //    return $this->template = $template;
   // }

   // private function setDocuments($template){
   //    return $this->template = $template;
   // }

   private function setResponse($response)
   {
      return $this->response = $response;
   }

   // Methods
   /**
    * Can be sent parameters of options for URL
    * Example: options = ['start_date' => '2022-10-10 00:00:00', 'end_date' => '2024-5-2 12:32:11', 'page' => '3']
    * Date format: Y-m-d H:i:s
    * @param array $options
    * @return object|string
    */
   public function loadDocuments($options = [])
   {
      // Initiate cURL.
      $cURL = curl_init();

      // Login/Manually insert keys.
      $jwt = new JWTGenerator();
      $jwt->generateKey($this->getapiKey(), $this->getWorkspaceID(), $this->getSecretKey());
      $auth = $jwt->getToken();

      $url = "https://us1.pdfgeneratorapi.com/api/v4/documents?";
      if (isset($options)) {
         foreach ($options as $name => $filter) {
            $url .= $name . "=" . urldecode($filter) . "&";
         }
      }
      $url .= "per_page=10";

      curl_setopt_array(
         $cURL,
         [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
               "Authorization: Bearer $auth"
            ],
         ]
      );

      $json = curl_exec($cURL);
      $err = curl_error($cURL);

      curl_close($cURL);

      if ($err) {
         $response = $err;
      } else {
         $response = json_decode($json);
      }

      $this->setResponse($response);
   }

   /**
    * Can be sent parameters of options for URL
    * Example: options = ['name' => 'This is a name', 'tags' => 'testing', 'page' => '3']
    * @param array $options
    * @return object|string
    */
   public function loadTemplates($options = [])
   {
      // Initiate cURL.
      $cURL = curl_init();

      // Adding parameters to request URL.
      $url = "https://us1.pdfgeneratorapi.com/api/v4/templates";
      if (isset($options)) {
         $url .= "/" . $options['templateId'] . "/";
      }

      // Login/Manually insert keys.
      $jwt = new JWTGenerator();
      $jwt->generateKey($this->getapiKey(), $this->getWorkspaceID(), $this->getSecretKey());
      $auth = $jwt->getToken();

      // Set cURL values
      curl_setopt_array($cURL, [
         CURLOPT_URL => $url,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $auth"
         ],
      ]);

      $json = curl_exec($cURL);
      $err = curl_error($cURL);

      curl_close($cURL);

      if ($err) {
         $response = $err;
      } else {
         $response = json_decode($json);
      }

      $this->setResponse($response);
   }

   public function generateDocument($data)
   {
      // Initiate cURL.
      $cURL = curl_init();
      
      $postfields = $this->genPostFields($cURL, $data);
      
      // Login/Manually insert keys.
      $jwt = new JWTGenerator();
      $jwt->generateKey($this->getapiKey(), $this->getWorkspaceID(), $this->getSecretKey());
      $auth = $jwt->getToken();

      // Set cURL values
      curl_setopt_array($cURL, [
         CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/documents/generate",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => $postfields,
         CURLOPT_HTTPHEADER => ["Authorization: Bearer $auth", "Content-Type: application/json"]
      ]);

      $json = curl_exec($cURL);
      $err = curl_error($cURL);

      curl_close($cURL);

      if ($err) {
         $response = $err;
      } else {
         $response = json_decode($json);
      }

      $this->setResponse($response);
   }

   // Get all postfields of template
   public function getPostFields($templateId){
      // Initiate cURL.
      $cURL = curl_init();

      $jwt = new JWTGenerator();
      $jwt->generateKey($this->getapiKey(), $this->getWorkspaceID(), $this->getSecretKey());
      $auth = $jwt->getToken();
      
      curl_setopt_array($cURL, [
         CURLOPT_URL => "https://us1.pdfgeneratorapi.com/api/v4/templates/" . $templateId . "/data",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_HTTPHEADER => [
           "Authorization: Bearer $auth"
         ],
      ]);

      $json = curl_exec($cURL);
      $err = curl_error($cURL);

      if ($err) {
         $response = $err;
      } else {
         $response = json_decode($json);
      }


      $this->setResponse($response);
   }

   private function genPostFields($cURL, $data){
      $this->getPostFields($data['templateId']);
      $response = $this->getResponse();

      $params = "";

      foreach($response->response as $fields => $aux){
         $params .= "\"$fields\":\"{$data[$fields]}\","; 
      }
      if(str_contains($params, '"DueDate":"null"')){
         $params = substr_replace($params, $date = date("Y-m-d"), 11, 4);
      }
      $params = substr($params, 0, -1);

      $postfields = '{"template":{"id":"' . $data['templateId'] .'","data":{' . $params . '}},"format":"pdf","output":"url","name":"' . $data['documentName'] . '"}';

      return $postfields;
   }
}