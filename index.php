<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Portes Obertes</title>
    <style>
      body{
     font-family: "Arial"; 
     }
     </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/carrousel.css">    
    <link rel="stylesheet" href="style/estiloInicio.css">
    <link rel="icon"  href="img/politecnicsico.png" type="image/png" />
</head>
<!---------------------------------------BODY-------------------------------------->
<body>
<!---------------------------------------NAVBAR-------------------------------------->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
    <img src="img/riverspath.png" width="60" height="60" class="d-inline-block align-middle" alt="" loading="lazy" >
		<div class="container fluid">
			<a href="index.php" class="navbar-brand">Portes Obertes</a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ms-auto">
					<li><a href="index.php" class="nav-item nav-link active">Inicio</a></li>
					<li><a href="#cursos" class="nav-item nav-link">Cursos</a></li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Juegos</a>
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Juego 1</a>
							<a href="#" class="dropdown-item">Juego 2</a>
							<a href="#" class="dropdown-item">Juego 3</a>
							<a href="#" class="dropdown-item">Juego 4</a>
							<a href="#" class="dropdown-item">Juego 5</a>
						</div> -->
					</li>
					<li class="dropdown">
						<a href="frontend/aboutus.php" class="nav-item nav-link">Sobre Nosotros</a>
						<!-- <div class="dropdown-menu">
							<a href="frontend/aboutus.php" class="dropdown-item">Sebas Angelov</a>
							<a href="#" class="dropdown-item">Pablo Ferrer</a>
							<a href="#" class="dropdown-item">Óscar Gonzalez</a>
							<a href="#" class="dropdown-item">Daniel Moreno</a>
							<a href="#" class="dropdown-item">Victor Soriano</a>
						</div> -->
					</li>
					<li><a href="#" class="nav-item nav-link">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-----------------FINAL NAVBAR----------------->
<!-----------------CARROUSEL---------------->  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="opacity: 25%;">
      <div class="carousel-item active">
        <img src="./img/bannercolegio.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/bannercolegio.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./img/bannercolegio.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    <div class="position-absolute top-50 start-50 translate-middle-x">          
        <p class="tituloCarousel">Us donem la benvinguda al Politécnics!</p>
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
	<section id="content" class="content">
		<div class="container" id="flechainicio">
			<div class="row">
        <!-----------------PARRAFO INICIAL ----------------> 
				<div class="col-md-5">
					<p>
          Al Centre d’Estudis Politècnics impartim cicles formatius de grau mitjà i grau superior de les especialitats de comerç i màrqueting, d’administració i finances, d’informàtica, i de turisme i gestió d’esdeveniments.
          </p>
          <p>
          La nostra missió és el creixement de l’alumnat. Vetllem per l’assoliment de les seves competències professionals i habilitats personals que les empreses, en particular, i la societat, en general, demanden.
          </p>
          <p>
          L’objectiu del Politècnics és convertir-nos en un centre de Formació Professional de referència a Catalunya.
          </p>
				</div>
        <div class="col-md-2">
				</div>
				<div class="col-md-5">
          <!-----------------VIDEO----------------> 
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" height="300" width="600"src="https://www.youtube.com/embed/re1WCaQ1xbc" allowfullscreen></iframe>
          </div>

				</div>
			</div>
		</div>
    <!-----------------SEPARACIÓN DE SECCIÓN----------------> 
    <hr class="bg-primary border-3 border-top m-5 border-primary">
    <!-----------------PARRAFO FRASE----------------> 
    <div class="container" id="inicioFrase">      
      <h1 style="color: #0089ff; text-align:center" class="display-3">FRASE</h1>
			<div class="row">
				<div class="col-md-5">
					<p>
          Al Centre d’Estudis Politècnics impartim cicles formatius de grau mitjà i grau superior de les especialitats de comerç i màrqueting, d’administració i finances, d’informàtica, i de turisme i gestió d’esdeveniments.
          </p>
          <p>
          La nostra missió és el creixement de l’alumnat. Vetllem per l’assoliment de les seves competències professionals i habilitats personals que les empreses, en particular, i la societat, en general, demanden.
          </p>
          <p>
          L’objectiu del Politècnics és convertir-nos en un centre de Formació Professional de referència a Catalunya.
          </p>
				</div>
        <div class="col-md-2">
				</div>
        <!-----------------Imagen Frase----------------> 
				<div class="col-md-5">
          <img src="./img/frase.png" width="600" height="auto" alt="fraseImg">
				</div>
			</div>
		</div>
    <!-----------------SEPARACIÓN DE SECCIÓN----------------> 
    <hr class="bg-primary border-3 border-top m-5 border-primary">
    <!-----------------PARRAFO "QUE M'INTERESSA"----------------> 
    <div class="container" id="inicioFrase">      
      <h1 style="color: #0089ff; text-align:center" class="display-3">QUÉ M'INTERESSA?</h1>
			<div class="row">
        <!-----------------NO TINC NI IDEA----------------> 
				<div class="col-md-4">          
          <p><h3 style="text-align:center" class="display-8">No tinc ni idea...</h3></p>			
        

          <p> <img src="./img/placeholder.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> </p>
          <p style="text-align: center;">
            Al CEP oferim cursos molt variats. T'interessará coneixer més de les nostres opcions abans de profunditzar en la especialitat.
          </p>
				</div>
        <!-----------------SE QUINA RAMA VULL----------------> 
        <div class="col-md-4">          
          <p><h3 style="text-align:center" class="display-8">Sé quina rama vull!</h3></p>			
        
          <p style="text-align: center;"> <img src="./img/placeholder.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> </p>
           <!-----------------LLISTA DE RAMES---------------->            
           <div class="d-grid gap-2 d-md-block col-9 mx-auto text-center">
                  <button type="button" class="btn btn-lg btn-danger">  Comerç i Màrqueting</button>
                  <button type="button" class="btn btn-lg btn-primary">Hoteleria i Turisme</button>
                  <button type="button" class="btn btn-lg btn-warning">Informàtica i Comunicacions</button>
                  <button type="button" class="btn btn-lg btn-success">Administració i Gestió</button>
            </div>


            <!-- <div class="row">
              <div class="col-12 col-sm-6">
                <div class="d-grid gap-2">
                  <button type="button" class="btn btn-danger">Comerç i Màrqueting</button>
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <div class="d-grid gap-2">
                  <button type="button" class="btn btn-primary">Hoteleria i Turisme</button>
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <div class="d-grid gap-2">
                  <button type="button" class="btn btn-warning">Informàtica i Comunicacions</button>
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <div class="d-grid gap-2">
                  <button type="button" class="btn btn-success">Administració i Gestió</button>
                </div>
                
              </div>
            </div> -->
				</div>
        <!-----------------TINC CLAR EL CURS----------------> 
				<div class="col-md-4">          
          <p><h3 style="text-align:center" class="display-8">Tinc clar el curs.</h3></p>			
        
          <p> <img src="./img/placeholder.jpg" class="imgOrientacio" width="200" height="auto" alt="fraseImg"> </p>
          <p style="text-align: center;">
            Al CEP oferim cursos molt variats. T'interessará coneixer més de les nostres opcions abans de profunditzar en la especialitat.
          </p>
				</div>
			</div>
		</div>

	</section>
</main>
<!-----------------END TEXTO---------------->  
<!-----------------FINAL BODY----------------->  
</body>
<!-----------------FOOTER----------------->  
<footer class="text-center text-lg-start bg-dark text-muted">
  <section class="">
  <div class="text-center">
      <img src="img/politecnicsiconsinfondo.png" width="170" height="60" style="" class="d-inline-block align-middle" alt="" loading="lazy" >
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/navbar.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>
</html>