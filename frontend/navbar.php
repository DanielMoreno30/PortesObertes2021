<!---------------------------------------NAVBAR-------------------------------------->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
    <img src="/1rProjecteDAW2b2122/img/riverspath.png" width="60" height="60" class="d-inline-block align-middle" alt="" loading="lazy" >
		<div class="container fluid">
			<a href="index.php" class="navbar-brand">Portes Obertes</a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ms-auto">
					<?php
						if(isset($_SESSION["idIS"]))
						{
							if($_SESSION["idIS"]["tipo"] == 'A')
							{
					?>
							<li><a href="frontend/administracio.php" class="nav-item nav-link">Admin</a></li>
					<?php
							}
						}
					?>
					<li><a href="index.php" class="nav-item nav-link active">Inici</a></li>
					<li><a href="frontend/cursos.php" class="nav-item nav-link">Cursos</a></li>
					<li class="dropdown">
						<a href="frontend/games.php" class="nav-item nav-link" data-toggle="dropdown">Jocs</a>
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Juego 1</a>
							<a href="#" class="dropdown-item">Juego 2</a>
							<a href="#" class="dropdown-item">Juego 3</a>
							<a href="#" class="dropdown-item">Juego 4</a>
							<a href="#" class="dropdown-item">Juego 5</a>
						</div> -->
					</li>
					<li class="dropdown">
						<a href="frontend/aboutus.php" class="nav-item nav-link">Sobre Nosaltres</a>
						<!-- <div class="dropdown-menu">
							<a href="frontend/aboutus.php" class="dropdown-item">Sebas Angelov</a>
							<a href="#" class="dropdown-item">Pablo Ferrer</a>
							<a href="#" class="dropdown-item">Óscar Gonzalez</a>
							<a href="#" class="dropdown-item">Daniel Moreno</a>
							<a href="#" class="dropdown-item">Victor Soriano</a>
						</div> -->
					</li>
					<li><a href="frontend/formcontacto.php" class="nav-item nav-link">Contacte</a></li>
					<li>
						<button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#modaliniciarsesion" style="border: none; background: transparent; outline: none; margin-top: 8px;">
						<img src="./img/login.png" width="50" height="50" alt="submit" />
						</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!-----------------FINAL NAVBAR----------------->