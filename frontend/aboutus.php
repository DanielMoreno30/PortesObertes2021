<?php
<<<<<<< HEAD
    include "../php_controllers/configuracionIdiomas.php";
    require_once("../php_libraries/bd.php");
    session_start();
?>
=======
    require_once("../php_libraries/bd.php");
    session_start();
?>

>>>>>>> 1f1be764faa7fc79fa7fda01bfb8f98fb1c5723e
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portes Obertes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
</head>
<!---------------------------------------BODY-------------------------------------->
<body style="font-family: 'Assistant';">
<!---------------------------------------NAVBAR-------------------------------------->
<?php
    include 'login.php';
    include 'navbarfija.php';
?>
<!---------------------------------------FINAL NAVBAR-------------------------------------->
    <section id="content" class="content">
      <div class="container">
        <header class="jumbotron my-4">
          <center>
            <h1 style="color: #0089ff; font-family: 'Montserrat'; letter-spacing: 10px;" class="display-3"><?php echo $idioma['NavbarSobre'] ?></h1>
            <p class="lead" style="font-size: 15px">
            <?php echo $idioma['AboutUsMainText'] ?>
            <br>
            <br>
            </p>
            <p class="fw-bold" style="font-size: 25px"><?php echo $idioma['AboutUsIntegrants'] ?></p>
          </center>
        </header>
<!---------------------------------------CARDS-------------------------------------->
        <div class="row text-center">
              <div class="card" style="width: 22rem; height: 44rem;">
                <div class="card bg-dark h-100">
                    <img class="card-img" src="../img/AvatarSebas.png" alt="" height="300" />
                    <div class="card-body">
                      <h4 style="color: #0089ff;" class="card-title">Sebas Angelov</h4>
                      <p class="card-text">Hola</p>
                    </div>
                    <div class="card-footer">
                      <a href="https://www.linkedin.com/in/sebastiano-javier-georgiev-angelov-19b7a5214/" target="_blank" class="btn btn-warning">Linkedin</a>
                    </div>
                </div>
              </div>
              
              <div class="card" style="width: 22rem; height: 44rem;">
                <div class="card bg-dark h-100">
                    <img class="card-img" src="../img/AvatarPablo.png" alt="" height="300" />
                    <div class="card-body">
                      <h4 style="color: #0089ff;" class="card-title">Pablo Ferrer-Dalmau</h4>
                      <p class="card-text">Hola</p>
                    </div>
                    <div class="card-footer">
                      <a href="https://www.linkedin.com/in/pablo-ferrer-dalmau-arrizabalaga-2180aa204" target="_blank" class="btn btn-warning">Linkedin</a>
                    </div>
                </div>
              </div>

              <div class="card" style="width: 22rem; height: 44rem;">
                <div class="card bg-dark h-100">
                    <img class="card-img" src="../img/AvatarOscar.png" alt="" height="300" />
                    <div class="card-body">
                      <h4 style="color: #0089ff;" class="card-title">Óscar Gonzalez Zarrias</h4>
                      <p class="card-text">Hola</p>
                    </div>
                    <div class="card-footer">
                      <a href="https://www.linkedin.com/in/oscar-gonz%C3%A1lez-590474222/" target="_blank" class="btn btn-warning">Linkedin</a>
                    </div>
                </div>
              </div>

              <div class="card" style="width: 22rem; height: 44rem;">
                <div class="card bg-dark h-100">
                    <img class="card-img" src="../img/AvatarDaniel.png" alt="" height="300" />
                    <div class="card-body">
                      <h4 style="color: #0089ff;" class="card-title">Daniel Moreno Fernandez</h4>
                      <p class="card-text">Hola</p>
                    </div>
                    <div class="card-footer">
                      <a href="https://www.linkedin.com/in/daniel-moreno-b7603b1b5/" target="_blank" class="btn btn-warning">Linkedin</a>
                    </div>
                </div>
              </div>

              <div class="card" style="width: 22rem; height: 44rem;">
                <div class="card bg-dark h-100">
                    <img class="card-img" src="../img/AvatarVictor.png" alt="" height="300" />
                    <div class="card-body">
                      <h4 style="color: #0089ff;" class="card-title">Victor Soriano Calderón</h4>
                      <p class="card-text">Hola</p>
                    </div>
                    <div class="card-footer">
                      <a href="https://www.linkedin.com/in/victor-soriano-calder%C3%B3n-0a22a6229/" target="_blank" class="btn btn-warning">Linkedin</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </section>
<!-----------------END CARDS---------------->  
</body>
<!-----------------FINAL BODY----------------->
<!-----------------FOOTER----------------->  
<?php
    include 'footer.php';
?>
<!-----------------FINAL FOOTER----------------->  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="../js/navbar.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>
</html>