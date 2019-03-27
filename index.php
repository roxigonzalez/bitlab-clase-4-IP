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



  <!-- Banner -->


  <div class="container-fluid">
    <div class="row">
      <div class="col-12 no-padding">

        <img src="imagenes/banner-burger.jpg" alt="" class="img-fluid" width="100%">

      </div> <!--cierre columna -->


    </div> <!-- cierre row !-->
  </div> <!-- cierre container !-->


  <!-- informacion del restaurante -->

  <div class="container" id="about-us">
    <div class="row">

      <!-- info - texto -->
      <div class="col-12 col-md-7 align-self-center">
        <h1 class="title-red">La mejor hamburguesa</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias veniam sint corrupti, hic consequatur beatae voluptatum nostrum facilis quod quo cum aliquid labore aspernatur maiores voluptate voluptatibus culpa nobis!</p>
      </div>

      <!-- imagen -->
      <div class="col-12 col-md-5">
        <img src="imagenes/best-burger.jpg" class="img-fluid" alt="">
      </div>

    </div> <!-- cierre de row -->
  </div> <!-- cierre de container -->
  <br>
  <article>
    <section class="container section-padding" id="contacto">
      <div class="row">
        <div class="col-md-6 box">
          <h4 class="title-red">¿Dónde encontrarnos?</h4>

          <p><strong>Dirección</strong><br> Calle 17, n° 455, Urbanización Corpac, San Isidro, Lima 27 - Perú</p>
          <br>
          <img src="imagenes/mapa.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h4  class="title-red">Servicio de Catering</h4>

          <form id="form-contact" action="page.php" method="get">



            <div class="form-group">
              <label for="name">Nombre</label>
              <input id="name" type="text" name="name" class="form-control" required>
            </div>

            <div class="form-row">
              <div class="col" id="control-date">
                <div class="form-group">
                  <label for="date" class="inline-label">Fecha </label>
                  <input id="date" type="text" name="date"  class="form-control" required>
                </div>

              </div>
              <div class="col">
                <div class="form-group">
                  <label for="hour" class="inline-label">Hora</label>
                  <input id="hour" type="text" name="hour" class="form-control">
                </div>

              </div>
            </div>
            <div class="form-group">
              <label for="persons">Cuantas personas</label>
              <input id="persons" type="number" name="persons" class="form-control">
            </div>
            <div class="form-group">
              <label for="message">Mensaje</label>
              <textarea id="message" name="message" rows="4" cols="80" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="">Menú</label>
              <select name="menu3" class="form-control">Menú
                <option value="Uno">Opción 1</option>
                <option value="Dos">Opción 2</option>
              </select>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="casilla1">
              <label class="form-check-label" for="defaultCheck1">
                Acepto disponibilidad de horario.
              </label>
            </div>
            <button class="btn btn-dark float-right">Enviar mensaje</button>
          </form>
        </div>
      </div>

    </section>
  </article>
  <footer>

    <p class="text-center" id="contact">
      Número telefónico: (51 1) 719 98 95 <br>
      Email catering@catering.com
    </p>
    <small>Creado por RG. (2019) Todos los derechos reservados.
    </small>

  </footer>
  </body>
</html>
