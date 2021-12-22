<?php
    require_once("../php_libraries/bd.php");
    session_start();
    include "../php_controllers/configuracionIdiomas.php";
?>

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
<!---------------------------------------FORMULARIO-------------------------------------->
<section id="content" class="content">
    <div class="container">
        <header class="jumbotron my-4">
            <center>
                <h1 style="color: #0089ff; font-family: 'Montserrat'; letter-spacing: 10px;" class="display-3"><?php echo $idioma['ContacteTitol'] ?></h1>
            </center>
        </header>
        <div class="container mt-5" style="width: 80%;">
        <form action="phpmailer.php" class="row g-3" method="POST">
          <div class="col-md-6">
            <label for="nombre" class="form-label"><?php echo $idioma['ContacteNom'] ?></label>
            <input type="text" class="form-control form-control-lg" name="nombre" id="nombre" required>
          </div>
          <div class="col-md-6">
            <label for="apellidos" class="form-label"><?php echo $idioma['ContacteCognoms'] ?></label>
            <input type="text" class="form-control form-control-lg" name="apellidos" id="apellidos" required>
          </div>
          <div class="col-md-8">
            <label for="email" class="form-label"><?php echo $idioma['ContacteEmail'] ?></label>
            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
          </div>
          <div class="col-md-4">
            <label for="telefono" class="form-label"><?php echo $idioma['ContacteTelefon'] ?></label>
            <input type="text" class="form-control form-control-lg" name="telefono" id="telefono" placeholder="+34    623 785 999">
          </div>
          <div class="col-md-12">
            <label for="mensaje" class="form-label"><?php echo $idioma['ContacteQuePassa'] ?></label>
            <textarea class="form-control form-control-lg" name="mensaje" id="mensaje" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalformcontacto"><?php echo $idioma['ContacteEnviarFormulari'] ?></button>  
            <button type="submit" name="cancel" id="cancel" value="cancel" class="btn btn-danger btn-lg"><?php echo $idioma['ContacteCancelar'] ?></button>
          </div>
        </form>
    </div>
    </div>
</section>
<!---------------------------------------END FORMULARIO-------------------------------------->
<!-- Modal -->
<div class="modal fade" id="modalformcontacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="position: fixed; z-index: 999999; text-align: center;">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header alert alert-success">
                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 35px;">Formulari de Contacte</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Formulari de contacte enviat. Rebràs una resposta el més aviat possible.</p>
            </div>
        </div>
	</div>
</div>
</body>
<!-----------------FINAL BODY----------------->
<!-----------------FOOTER----------------->  
<?php
    include 'footer.php';
?>
<!-----------------FINAL FOOTER----------------->    

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="../js/navbar.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</html>