<?php    
?>
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
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="icon"  href="img/politecnicsico.png" type="image/png" />
</head>
<body>
<!-- -----------------------------------------NAVBAR----------------------------------------------------------------------- -->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
    <img src="./img/politecnicsiconsinfondo.png" width="150" height="60" class="d-inline-block align-middle" alt="" loading="lazy" >
		<div class="container">
			<a href="index.php" class="navbar-brand">Portes Obertes</a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="#" class="nav-item nav-link active">Home</a></li>
					<li><a href="#" class="nav-item nav-link">Cursos</a></li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">Juegos</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Juego 1</a>
							<a href="#" class="dropdown-item">Juego 2</a>
							<a href="#" class="dropdown-item">Juego 3</a>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" class="nav-item nav-link" data-toggle="dropdown">About Us</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Sebas Angelov</a>
							<a href="#" class="dropdown-item">Pablo Ferrer</a>
							<a href="#" class="dropdown-item">Óscar Gonzalez</a>
							<a href="#" class="dropdown-item">Daniel Moreno</a>
							<a href="#" class="dropdown-item">Victor Soriano</a>
						</div>
					</li>
					<li><a href="#" class="nav-item nav-link">Contacto</a></li>
				</ul>
			</div>
		</div>
	</nav>

<!-- -----------------------------------------BODY----------------------------------------------------------------------- --> 

<div class="banner">
	<div class="container">
			<h1>Portes Obertes</h1>
			<p></p>
			<a href="#content" class="button button-primary">Qui som?</a>
		</div>
	</div>
</header>

<main>
	<section id="content" class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p>
            Al Centre d’Estudis Politècnics disposem d’un equip professional i humà que vetlla en tot moment per satisfer l’experiència acadèmica del nostre alumnat. 
            En tractar-se d’una formació presencial, li proposem que visqui una experiència d’aprenentatge amb els cinc sentits. 
            A l’aula podem veure’ns, escoltar-nos, compartir, discutir i emocionar-nos. L’assistència a classe ens permet aprofitar millor l’experiència d’aprenentatge, d’una manera molt més enriquidora. 
            Ens tenim a totes i tots per explicar, per preguntar, per dubtar, per equivocar-nos i per descobrir.
          </p>
				</div>
				<div class="col-md-4">
					<p>Per a la Direcció del centre, la qualitat del nostre equip docent i administratiu sempre ha estat un dels principals elements de valor diferencial. 
            Per això, el Politècnics té un equip professional i humà especialitzat, amb experiència professional en els diversos sectors dels cicles formatius que s’hi imparteixen. 
            És fonamental un equip que conegui i combini les realitats de l’aula i de l’empresa per poder acompanyar el nostre alumnat en el seu procés d’aprenentatge, de creixement personal i d’inserció en el mercat laboral.</p>
				</div>
				<div class="col-md-4">
					<p>Per una banda, al Politècnics disposem d’un programa de formació per al nostre equip professional i humà. 
            Contempla formacions tècniques dels diferents sectors professionals de la nostra oferta educativa i d’innovació pedagògica per ser aplicades a les aules.
            Per una altra, l’equip professional assisteix a formacions externes organitzades pel Departament d’Educació, universitats i altres institucions sectorials i educatives.</p>
				</div>
			</div>
		</div>
	</section>
</main>

<!-- -----------------------------------------FOOTER----------------------------------------------------------------------- -->
  <footer class="bg-dark text-center text-lg-start">
    <div class="text-center p-3" >
        <div id="footerLinks">
            <a href="https://github.com/MrFron/Recomercem" class="badge badge-primary">GitHub</a>
            <a href="./frontend/about.php" class="badge badge-primary">About</a>
        </div>
        <p class="card-text"></p> Copyright © 2021 - 2022 - Proyecto DAW 2B (Grup 2) - Centre d’Estudis Politècnics<br> Sebas Angelov · Pablo Ferrer · Óscar Gonzalez · Daniel Moreno · Victor Soriano</p>
    </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/navbar.js"></script>
</html>