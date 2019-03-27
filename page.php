<?php
    
    $nombre = $_GET["name"];
    $mensaje = $_GET["message"];
    $fecha = $_REQUEST['date'];



?>


<?php 

$title = "Burger Gurmet";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  

  <title><?php echo $title ?></title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="css/master.css">
</head>
<body>

  <!-- header -->
  <header class="bg-header">
    <div class="container">
      <div class="row">
        <!-- logo -->
        <div class="col-12 col-md-4 col-lg-3">
          <a href="/">
            <img src="imagenes/logo.png" class="img-fluid" alt="">
          </a>
        </div>
        <!-- menu -->
        <div class="col-12 col-md-8 col-lg-9 align-self-center">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link"> Inicio</a>
            </li>
            <li class="nav-item">
              <a href="#about-us" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Menú</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Contacto</a>
            </li>

          </ul>
        </div>
      </div>

    </div>
  </header>

  <div>
    <p class="text-center">Su reservación ha sido enviada con éxito</p>
    <table class="table table-dark">
      <tr>
        <td>Nombre:</td>
        <td><?php echo $nombre ?></td>
      </tr>
      <tr>
        <td>Fecha:</td>
        <td><?php echo $fecha ?></td>
      </tr>
      <tr>
        <td>Mensaje:</td>
        <td><?php echo $mensaje ?></td>
      </tr>
    </table>
  </div>
</body>
</html>