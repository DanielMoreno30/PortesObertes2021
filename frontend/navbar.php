<!---------------------------------------NAVBAR-------------------------------------->
<header class="header-area overlay">
    <nav class="navbar navbar-expand-md navbar-dark">
    <img src="/1rProjecteDAW2b2122/img/riverspath.png" width="60" height="60" class="d-inline-block align-middle" alt="" loading="lazy" >
		<div class="container fluid">
			<a href="index.php" class="navbar-brand"><?php echo $idioma['titol'] ?></a>
			<button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#main-nav">
			<button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#main-nav">
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
						<li><a href="./frontend/administracio.php" class="nav-item nav-link">Admin</a></li>
				<?php
						}
					}
				?>
					<li><a href="index.php" class="nav-item nav-link active"><?php echo $idioma['NavbarInici'] ?></a></li>
					<li><a href="frontend/cursos.php" class="nav-item nav-link"><?php echo $idioma['NavbarCursos'] ?></a></li>
					<li class="dropdown">
						<a href="frontend/games.php" class="nav-item nav-link" data-toggle="dropdown"><?php echo $idioma['NavbarJocs'] ?></a>
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Juego 1</a>
							<a href="#" class="dropdown-item">Juego 2</a>
							<a href="#" class="dropdown-item">Juego 3</a>
							<a href="#" class="dropdown-item">Juego 4</a>
							<a href="#" class="dropdown-item">Juego 5</a>
						</div> -->
					</li>
					<li class="dropdown">
						<a href="frontend/aboutus.php" class="nav-item nav-link"><?php echo $idioma['NavbarSobre'] ?></a>
						<!-- <div class="dropdown-menu">
							<a href="frontend/aboutus.php" class="dropdown-item">Sebas Angelov</a>
							<a href="#" class="dropdown-item">Pablo Ferrer</a>
							<a href="#" class="dropdown-item">Óscar Gonzalez</a>
							<a href="#" class="dropdown-item">Daniel Moreno</a>
							<a href="#" class="dropdown-item">Victor Soriano</a>
						</div> -->
					</li>
					<li class="dropdown">
						<a href="" class="nav-item nav-link"><?php echo $idioma['idioma'] ?></a>
						<div class="dropdown-menu">
							<a class="es dropdown-item"> <img src="img/spainflag.png" width="20" height="15"> <?php echo $idioma['es'] ?></a>
            				<a class="en dropdown-item"> <img src="img/ukflag.png" width="20" height="15"> <?php echo $idioma['en'] ?></a> 
            				<a class="cat dropdown-item"> <img src="img/catalunaflag.png" width="20" height="15"> <?php echo $idioma['cat'] ?></a>
						</div>
					</li>
					<li><a href="frontend/formcontacto.php" class="nav-item nav-link"><?php echo $idioma['NavbarContacte'] ?></a>
					</li>
					<?php
			if(!isset($_SESSION["idIS"]))
			{
		?>
				<li>
					<button type="button" class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#modaliniciarsesion" style="border: none; background: transparent; outline: none; margin-top: 8px;">
					<img src="./img/login.png" width="50" height="50" alt="submit" />
					
				
				
					</button>
				</li>
		<?php
			}
			else {

		?>
		
			<a href="frontend/logout.php" class="nav-item nav-link" data-toggle="dropdown">Cerrar Sesión</a>
	<?php
	}
	?>

				</ul>
			</div>
		</div>
	</nav>

        <script>
              function filename(){

                var rutaAbsoluta = self.location.href,
                    posicionUltimaBarra = rutaAbsoluta.lastIndexOf("/"),
                    rutaRelativa = rutaAbsoluta.substring( posicionUltimaBarra + "/".length , rutaAbsoluta.length );
                return rutaRelativa;  
              }
              var nombre_archivo = filename(),
                  es = document.querySelector(".es"),
                  en = document.querySelector(".en"),
                  cat = document.querySelector(".cat");

              if (nombre_archivo.includes("index")) {
                es.href = "/1rProjecteDAW2b2122/index.php?idioma=es";
                en.href = "/1rProjecteDAW2b2122/index.php?idioma=en";
                cat.href = "/1rProjecteDAW2b2122/index.php?idioma=cat";
              } else if (nombre_archivo.includes("aboutus")) {
                es.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=es";
                en.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=en";
                cat.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=cat"; 
              } else if (nombre_archivo.includes("cursos")) {
                es.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=es";
                en.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=en";
                cat.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=cat";                
              } else if (nombre_archivo.includes("formcontacto")) {
                es.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=es";
                en.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=en";
                cat.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=cat"; 
              } else if (nombre_archivo.includes("games")) {
                es.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=es";
                en.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=en";
                cat.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=cat"; 
              }
              /* switch(nombre_archivo){
                  case "text.includes("nombre_archivo")":
                    es.href = "/1rProjecteDAW2b2122/index.php?idioma=es"
                    en.href = "/1rProjecteDAW2b2122/index.php?idioma=en"
                    cat.href = "/1rProjecteDAW2b2122/index.php?idioma=cat"
                    break;
                  case "aboutus.php":
                    es.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=es"
                    en.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=en"
                    cat.href = "/1rProjecteDAW2b2122/frontend/aboutus.php?idioma=cat"
                    break;
                  case "cursos.php":
                    es.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=es"
                    en.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=en"
                    cat.href = "/1rProjecteDAW2b2122/frontend/cursos.php?idioma=cat"
                    break;
                  case "formcontacto.php":
                    es.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=es"
                    en.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=en"
                    cat.href = "/1rProjecteDAW2b2122/frontend/formcontacto.php?idioma=cat"
                    break;
                  case "games.php":
                    es.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=es"
                    en.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=en"
                    cat.href = "/1rProjecteDAW2b2122/frontend/games.php?idioma=cat"
                    break;
              } */
        </script>
<!-----------------FINAL NAVBAR----------------->