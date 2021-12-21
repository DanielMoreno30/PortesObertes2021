<link rel="stylesheet" href="../style/login.css">

<!-- Modal Iniciar Sesión -->
    <div class="modal fade" id="modaliniciarsesion" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLogin"><?php echo $idioma['titol'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="modal-content" action="./php_controllers/usuariosController.php" method="POST">
            <div class="container">
                <h1 style="font-size: 25px;"><?php echo $idioma['iniciarSessio'] ?></h1>
                <p><?php echo $idioma['iniciarSessioP'] ?></p>
            <hr>
                <label for="email"><b><?php echo $idioma['ContacteEmail'] ?></b></label>
                <input type="text" class="inputs" placeholder="<?php echo $idioma['placeholderEmail'] ?>" name="email" required>
                <label for="pass"><b><?php echo $idioma['contrasenya'] ?></b></label>
                <input type="password" class="inputs" placeholder="<?php echo $idioma['placeholderContra'] ?>" name="pass" required>
                <div class="clearfix">
                    <button type="submit" name="iniciarSesion" class="signup"><?php echo $idioma['iniciarSessio'] ?></button> 
                    <button class="gotocreateuser" type="button" data-bs-toggle="modal" data-bs-target="#modalcrearusuario" data-bs-dismiss="modal"><?php echo $idioma['noCompte'] ?></button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
<!-- FINAL Modal Iniciar Sesión -->
<!-- Modal Crear Usuario -->
<div class="modal fade" id="modalcrearusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Portes Obertes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="modal-content" action="php_controllers/usuariosController.php" method="POST">
                <div class="container">
                    <h1><?php echo $idioma['crearUsuari'] ?></h1>
                    <p><?php echo $idioma['crearUsuariP'] ?></p>
                <hr>
                <label for="nomusuari"><b>Nom Usuari</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Nom d'Usuari" name="nombreUsuarioNuevo" required>

                <label for="email"><b>Nom</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Nom" name="nombreNuevo" required>
 
                <label for="email"><b>Cognoms</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teus Cognoms" name="apellidosNuevos" required>

                <label for="email"><b>Email</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Email" name="emailNuevo" required>

                <label for="pass"><b>Contrasenya</b></label>
                <input type="password" class="inputs" placeholder="Escriu la teva contrasenya" name="passNueva" required>

                <div class="clearfix">
                    <button type="submit" name="registro" class="signup">Crear Usuari</button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
    
<!-- FINAL Modal Crear Usuario -->

