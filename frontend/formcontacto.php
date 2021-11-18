<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portes Obertes</title>
    <style>
      body{
     font-family: "Arial"; 
     }
     </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
    </head>
<!---------------------------------------BODY-------------------------------------->
<body style="font-family: 'Assistant';">
<!---------------------------------------NAVBAR-------------------------------------->
<?php
    include 'navbarfija.php';
?>
<!---------------------------------------FINAL NAVBAR-------------------------------------->
<!---------------------------------------FORMULARIO-------------------------------------->
<section id="content" class="content" style="background-color: #d3d3d3;">
    <div class="container">
        <header class="jumbotron my-4">
            <center>
                <h1 style="color: #0089ff;" class="display-3">Formulario de contacto</h1>
            </center>
        </header>
        <div class="container mt-5">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>
          <div class="col-md-6">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" required>
          </div>
          <div class="col-md-8">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <div class="col-md-4">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" placeholder="+34    623 785 999">
          </div>
          <div class="col-md-12">
            <label for="texto" class="form-label">¿Que sucede?</label>
            <textarea class="form-control" id="comments" rows="3" required></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
    </div>
    </div>
</section>
<!---------------------------------------END FORMULARIO-------------------------------------->
</body>
<!-----------------FINAL BODY----------------->
<!-----------------FOOTER----------------->  
<?php
    include 'footer.php';
?>
<!-----------------FINAL FOOTER----------------->    

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/navbar.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</html>