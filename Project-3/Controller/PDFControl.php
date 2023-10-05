<?php
function connectPDF($apiKey, $workspaceID, $secretKey){
   return new PDFGenerator($apiKey, $workspaceID, $secretKey);
}

function getDocuments($pdfObject){
   $pdfObject->loadDocuments();

   return $pdfObject->getResponse();
}

function getTemplates($pdfObject){
   $pdfObject->loadTemplates();

   return $pdfObject->getResponse();
}

function createPDF(){
   
}