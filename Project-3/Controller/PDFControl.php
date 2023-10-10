<?php
function connectPDF($apiKey, $workspaceID, $secretKey){
   return new PDFGenerator($apiKey, $workspaceID, $secretKey);
}

function getDocuments($pdfObject, $options = []){
   $pdfObject->loadDocuments($options);

   return $pdfObject->getResponse();
}

function getTemplates($pdfObject){
   if(key_exists('access', $_SESSION)){
      $pdfObject->loadTemplates(['access' => $_SESSION['access']]);
   } else {
      $pdfObject->loadTemplates();
   }

   return $pdfObject->getResponse();
}

function findTemplate($pdfObject, $options){
   $pdfObject->loadTemplates($options);
   print_r($pdfObject->getResponse());

   return $pdfObject->getResponse();
}

function createPDF($pdfObject, $data){
   $fieldsObject = getTemplateFields($pdfObject, $data);
   $fields = [];

   foreach($fieldsObject->response as $fieldName => $fieldValue){
      $fields[$fieldName] = $data[$fieldName];
   }
   $pdfObject->generateDocument($data);

   return $pdfObject->getResponse();
}

function checkTemplate($pdfObject, $data){
   if(key_exists("templateName", $data)){
      $pdfObject->loadTemplates(['access' => $_SESSION['access'], 'name' => $data['templateName']]);
   }

   return key_exists(0, $pdfObject->getResponse()->response);
}

function getTemplateFields($pdfObject, $data){
   if(key_exists("templateId", $data)){
      $pdfObject->getPostFields($data['templateId']);
   }

   return $pdfObject->getResponse();
}

function completeFields($pdfObject, $data){
}