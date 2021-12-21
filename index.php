<?php
    session_start();
    include "php_controllers/configuracionIdiomas.php";
    require_once("php_libraries/bd.php");
?>
<!DOCTYPE html>
<html lang="esp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <title><?php echo $idioma['titol'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" href="style/navbar.css">
  <link rel="stylesheet" href="style/carrousel.css">
  <link rel="stylesheet" href="style/login.css">
  <link rel="stylesheet" href="style/estiloInicio.css">
  <link rel="icon" href="img/politecnicsico.png" type="image/png" />
</head>
<!---------------------------------------BODY-------------------------------------->

<body style="font-family: 'Assistant';">
  <!---------------------------------------NAVBAR-------------------------------------->
  <?php
      include 'frontend/login.php';
      include 'frontend/navbar.php';
    ?>
    <!-----------------FINAL NAVBAR----------------->
    <header class="header-area overlay">
    <!-----------------CARROUSEL---------------->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="opacity: 25%;">
        <div class="carousel-item active">
          <img src="./img/bannercolegio.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/bannercolegio2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/bannercolegio3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Seguent</span>
      </button>
      <div class="position-absolute top-50 start-50 translate-middle-x">
        <p class="tituloCarousel"><?php echo $idioma['titolCar'] ?></p>
      </div>

      <!-- COLOR FLECHA 9C9C9C -->
      <div class="position-absolute top-100 start-50 translate-middle-x">
        <a href="#flechainicio"><img src="./img/arrowDown.png" width="auto" height="60" alt="ScrollDown"></a>
      </div>
    </div>
  </header>
  <!-----------------END CARROUSEL---------------->
  <!-----------------TEXTO---------------->
  <main>
    
      <!-----------------Este H5 sirve como enlace para el botón.---------------->
    <h5 style="color: #0089ff; text-align:center; visibility:hidden;" id="flechainicio" class="display-3" ></h5>
    <section id="content" class="content">
      <div class="container" >
        <div class="row">
          <!-----------------PARRAFO INICIAL ---------------->
          <div class="col-md-5">
            <p>
              <?php echo $idioma['pIndex1'] ?>
            </p>
            <p>
              <?php echo $idioma['pIndex2'] ?>
            </p>
            <p>
              <?php echo $idioma['pIndex3'] ?>
            </p>
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-5">
            <!-----------------VIDEO---------------->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" height="300" width="500" src="https://www.youtube.com/embed/re1WCaQ1xbc" allowfullscreen></iframe>
            </div>

          </div>
        </div>
      </div>
      <!-----------------SEPARACIÓN DE SECCIÓN---------------->
      <hr class="bg-primary border-3 border-top m-5 border-primary">
      <!-----------------PARRAFO FRASE---------------->
      <div class="container" id="inicioFrase">
        <h1 style="font-family: 'Montserrat'; color: #0089ff; text-align:center; letter-spacing: 10px;" class="display-3">FRASE</h1>
        <div class="row">
          <div class="col-md-5">
            <p>
              <?php echo $idioma['pFrase1'] ?>
            </p>
            <p>
              <?php echo $idioma['pFrase2'] ?>
            </p>
                  
            <p>
              <?php echo $idioma['pFrase3'] ?>
            </p>
          </div>
          <div class="col-md-2">
          </div>
          <!-----------------Imagen Frase---------------->
          <div class="col-md-5">
            <img src="./img/frase.png" width="500" height="auto" alt="fraseImg">
          </div>
        </div>
      </div>
      <!-----------------SEPARACIÓN DE SECCIÓN---------------->
      <hr class="bg-primary border-3 border-top m-5 border-primary">
      <!-----------------PARRAFO "QUE M'INTERESSA"---------------->
      <div class="container" id="inicioFrase">
        <h1 style="font-family: 'Montserrat'; color: #0089ff; text-align:center; letter-spacing: 10px;" class="display-3"><?php echo $idioma['interes'] ?></h1>
        <div class="row">
          <!-----------------NO TINC NI IDEA---------------->
          <div class="col-md-4">
            <div class="p-5">
              <h3 style="text-align:center; font-size: 18px;" class="display-8"><?php echo $idioma['idea'] ?></h3>
            </div>
            <div class= "p-5"> 
              <img src="./img/noTincNiIdea.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> </div>
            <p style="text-align: center;">
              <?php echo $idioma['pIdea'] ?>
            </p>
          </div>
          <!-----------------SE QUINA RAMA VULL---------------->
          <div class="col-md-4">
            <div class="p-5">
              <h3 style="text-align:center; font-size: 18px;" class="display-8"><?php echo $idioma['branca'] ?></h3>
            </div>

            <div class="p-5" style="text-align: center;"> <img src="./img/seQuinaRamaVull.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> </div>
            <!-----------------LLISTA DE RAMES---------------->

            <div class="container" style="text-align:center">
              <div class="row offset-md-2">
                <div class="bg-danger col-12 col-md-5  m-2 " style="color:white; font-size:12px;"><?php echo $idioma['comerç'] ?></div>

                <div class="bg-primary col-12 col-md-5 m-2" style="color:white; font-size:12px;"><?php echo $idioma['hosteleria'] ?></div>                
                <div class="bg-warning col-12 col-md-5 m-2" style="color:white; font-size:12px;"><?php echo $idioma['informàtica'] ?></div>

                <div class="bg-success col-12 col-md-5 m-2  " style="color:white; font-size:12px;" href="./frontend/cursos.php#familiaIC"><?php echo $idioma['gestió'] ?>
                </div>
              </div>
            </div>
          </div>
          <!-----------------TINC CLAR EL CURS---------------->
          <div class="col-md-4 text-center">
            <div class="p-5"><h3 class="display-8" style="text-align:center; font-size: 18px;"><?php echo $idioma['clar'] ?></h3></div>
            <div class="p-5"> 
              <img src="./img/tincClarElCurs.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> 
            </div>

            <div class="dropdown" >
            <div class="offset-3 col-6 text-center ">
              <button style="font-size: 15px;" class="btn btn-lg btn-secondary dropdown-toggle btn-success align-self-center" type="button" id="brnListaCursos" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $idioma['cursos'] ?></button>
                <!-- <button type="btn btn-secondary dropdown-toggle" id="brnListaCursos" class="btn btn-lg btn-success" style="font-size:15px">Escollir...</button> -->
                <script>
                  document.getElementById("brnListaCursos").addEventListener("click", myFunction);

                  function myFunction() {
                    if (document.getElementById("listaCursos").style.visibility === "visible"){
                      document.getElementById("listaCursos").style.visibility = "hidden";
                    }
                    else {
                      document.getElementById("listaCursos").style.visibility = "visible"
                    }
                  }
                </script>

                <div id="listaCursos" class="FixedHeightContainer" style="position: relative; left: 50%; transform: translate(-50%); visibility:hidden;">
                  <div class="Content" style="font-size: 15px;">
                    
                    <a style="color:black" href="./frontend/cursos.php#familiaCM" class="nav-item nav-link"><?php echo $idioma['GMActivitats'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaCM" class="nav-item nav-link"><?php echo $idioma['GSMarqueting'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaCM" class="nav-item nav-link"><?php echo $idioma['GSGestioV'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaCM" class="nav-item nav-link"><?php echo $idioma['GSComerç'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaHT" class="nav-item nav-link"><?php echo $idioma['GSAgencies'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaIC" class="nav-item nav-link"><?php echo $idioma['GMSistemes'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaIC" class="nav-item nav-link"><?php echo $idioma['GSWeb'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaIC" class="nav-item nav-link"><?php echo $idioma['GSMulti'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaAG" class="nav-item nav-link"><?php echo $idioma['GMGestioA'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaAG" class="nav-item nav-link"><?php echo $idioma['GSAdmin'] ?></a>
                    <a style="color:black" href="./frontend/cursos.php#familiaAG" class="nav-item nav-link"><?php echo $idioma['GSAssistencia'] ?></a>
                    



                  </div>
                </div>
            </div>
            </div>


          </div>
        </div>
      </div>

    </section>
  </main>
  <!-----------------END TEXTO---------------->
  <!-----------------FINAL BODY----------------->
</body>
<!-----------------FOOTER----------------->
<?php
    include 'frontend/footer.php';
?>
<!-----------------FINAL FOOTER----------------->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/navbar.js"></script>
<script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>

</html>

<!-- offset y d-flex -->