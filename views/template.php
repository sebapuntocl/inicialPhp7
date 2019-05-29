<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="stylesheet" href="views/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/dist/css/font-awesome.css">
    <link rel="stylesheet" href="views/dist/css/sweetalert.css">
    <link rel="stylesheet" href="views/dist/componentes/dataTables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/dist/css/styles.css">

    <!-- archivos js -->
    <script src="views/dist/js/jquery.min.js" ></script>
    <script src="views/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="views/dist/js/font-awesome.js"></script>
    <script src="views/dist/js/sweetalert.min.js"></script>
    <script src="views/dist/componentes/dataTables/jquery.dataTables.js"></script>
    <script src="views/dist/componentes/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="views/dist/js/main.js"></script>
  </head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->
<body class="">

  <?php
  if(isset($_SESSION["validar"]) == true){

    include "views/modules/navegador.php";

    $modulos = new Enlaces();
    $modulos -> enlacesController();

  }else{

    include "modules/ingreso.php";
  }
    ?>

</body>
</html>