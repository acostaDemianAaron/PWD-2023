<?php
include_once("../Config/configuracion.php");
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/PWD-2023/Project-4/View/Libs/Bootstrap-5.3.1/css/bootstrap.min.css">
  <script src="/PWD-2023/Project-4/View/Libs/Bootstrap-5.3.1/js/bootstrap.min.js"></script>
  <script src="/PWD-2023/Project-4/View/Libs/Bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
  <!-- Jquery -->
  <script src="/PWD-2023/Project-4/View/Libs/jQuery/jquery-3.7.1.min.js"></script>
  <script src="/PWD-2023/Project-4/View/Libs/jQuery/jquery.validate-1.19.5.min.js"></script>
  <script src="/PWD-2023/Project-4/View/Libs/jQuery/translate-jQuery.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/PWD-2023/Project-4/View/Libs/FontAwesome-6.4.2/css/all.min.css">
  <script src="/PWD-2023/Project-4/View/Libs/FontAwesome-6.4.2/js/all.min.js"></script>
  <title>TEST</title>
</head>

<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="#" class="nav-link px-2">Features</a></li>
      <li><a href="#" class="nav-link px-2">Pricing</a></li>
      <li><a href="#" class="nav-link px-2">FAQs</a></li>
      <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">Login</button>
      <button type="button" class="btn btn-primary">Sign-up</button>
    </div>
  </header>

  <div class="container">
    <table>
      <!-- TODO agregar HEADER a la table para darle orden a los valores mostrados -->
    <?php
      function getUsuario($idusuario, $objDB) {
        $objDB->Select("SELECT * FROM usuario WHERE idusuario = " . $idusuario);
        return $objDB->Register();
      }

      function getRol($idRol, $objDB){
        $objDB->Select("SELECT * FROM rol WHERE idrol = " . $idRol);
        return $objDB->Register();
      }

      $objBd = new Database();
      $query = "SELECT * FROM usuariorol";
      $res = $objBd->Execute($query);

      if($res) $array = $objBd->Register();

      while($array != null){
        $db = new Database();
        $us = getUsuario($array['idusuario'], $db);
        echo "
        <tr>
          <td> {$us['idusuario']} </td>
          <td> {$us['usnombre']} </td>
          <td> {$us['uspass']} </td>
          <td> {$us['usmail']} </td>
          <td> {$us['deshabilitado']} </td>";
        echo "";
        $rol = getRol($array['idrol'], $db);
        echo "
          <td> {$rol['idrol']} </td>
          <td> {$rol['roldescripcion']} </td>
        </tr>";
        echo "<br>";
          $array = $objBd->Register();
      }
    ?>
    </table>

    <?php

    ?>
  </div>
</div>