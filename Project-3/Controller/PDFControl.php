<?php
function connectPDF($apiKey, $workspaceID, $secretKey){
   return new PDFGenerator($apiKey, $workspaceID, $secretKey);
}

function getDocuments($pdfObject){
   $pdfObject->loadDocuments();

   return $pdfObject->getResponse();
}

function getTemplates($pdfObject){
   $pdfObject->loadTemplates(['access' => $_SESSION['access']]);

   return $pdfObject->getResponse();
}

function createPDF($pdfObject, $data){
   return $pdfObject->generateDocument($data);
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