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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <img src="../img/riverspath.png" width="60" height="60" class="d-inline-block align-middle" alt="" loading="lazy" >
    <div class="container fluid">
          <a href="" class="navbar-brand">Portes Obertes</a>
          <div id="main-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
              <li><a href="../index.php" class="nav-item nav-link active">Inicio</a></li>
              <li><a href="#" class="nav-item nav-link">Cursos</a></li>
              <li class="dropdown">
                <a href="#" class="nav-item nav-link" data-toggle="dropdown">Juegos</a>
              </li>
              <li class="dropdown">
                <a href="aboutus.php" class="nav-item nav-link">Sobre Nosotros</a>
              </li>
              <li><a href="formcontacto.php" class="nav-item nav-link">Contacto</a></li>
            </ul>
          </div>
        </div>
    </nav>
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
<footer class="text-center text-lg-start bg-dark text-muted">
  <section class="">
  <div class="text-center">
      <img src="../img/politecnicsiconsinfondo.png" width="170" height="60" style="" class="d-inline-block align-middle" alt="" loading="lazy" >
  </div>
    <!-- <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
		<i class="fas fa-adjust"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div> -->
  </section>
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Centre Urquinaona
          </h6>
          <p>
            <i class="fas fa-map-marker-alt"></i>
              Plaça Urquinaona, 10. <br> 08010 Barcelona. <br>
            <i class="fas fa-phone-alt"></i> 93 302 02 24 <br>
            info@politecnics.barcelona
          </p>
		      
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-2">
          <h6 class="text-uppercase fw-bold mb-4">
            Centre Santa Anna
          </h6>
          <p>
            <i class="fas fa-map-marker-alt"></i>
                  C/Santa Anna, 28. <br> 08002 Barcelona. <br>
            <i class="fas fa-phone-alt"></i> 93 302 41 06 <br>
            info@politecnics.barcelona
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Enlaces
          </h6>
          <p>
          <a href="#!" class="text-reset"><i class="fab fa-github"></i> GitHub</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vacio</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vacio</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="fab fa-linkedin"></i> Sebas Angelov</p>
          <p><i class="fab fa-linkedin"></i> Pablo Ferrer</p>
          <p><i class="fab fa-linkedin"></i> Óscar Gonzalez</p>
          <p><i class="fab fa-linkedin"></i> Daniel Moreno</p>
		  <p><i class="fab fa-linkedin"></i> Victor Soriano</p>
        </div>
      </div>
    </div>
    <div class="text-center">
	    <p class="card-text"></p> Copyright © 2021 - 2022 - Proyecto DAW 2 (Grup 2) - Centre d’Estudis Politècnics</p>
    </div>
  </section>
</footer>
<!-----------------FINAL FOOTER----------------->    

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/navbar.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</html>