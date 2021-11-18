<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Portes Obertes</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/carrousel.css">    
    <link rel="stylesheet" href="style/estiloInicio.css">
    <link rel="icon"  href="img/politecnicsico.png" type="image/png" />
</head>
<!---------------------------------------BODY-------------------------------------->
<body style="font-family: 'Assistant';">
<!---------------------------------------NAVBAR-------------------------------------->
<?php
    include 'frontend/navbar.php';
?>
<!---------------------------------------FINAL NAVBAR-------------------------------------->
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
            <iframe class="embed-responsive-item" height="300" width="450"src="https://www.youtube.com/embed/re1WCaQ1xbc" allowfullscreen></iframe>
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
          <img src="./img/frase.png" width="450" height="auto" alt="fraseImg">
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