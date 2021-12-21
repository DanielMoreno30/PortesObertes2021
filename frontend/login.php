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
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $idioma['titol'] ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="modal-content">
            <div class="container">
                <h1><?php echo $idioma['crearUsuari'] ?></h1>
                <p><?php echo $idioma['crearUsuariP'] ?></p>
            <hr>
                <label for="nomusuari"><b><?php echo $idioma['nomUsuari'] ?></b></label>
                <input type="text" class="inputs" placeholder="<?php echo $idioma['placeholderUsuari'] ?>" name="nombre" required>
                <label for="email"><b><?php echo $idioma['ContacteNom'] ?></b></label>
                <input type="text" class="inputs" placeholder="<?php echo $idioma['placeholderNom'] ?>" name="nombre" required>
 
                <label for="email"><b><?php echo $idioma['ContacteCognoms'] ?></b></label>
                <input type="text" class="inputs" placeholder="<?php echo $idioma['placeholderCognom'] ?>" name="apellidos" required>
                <label for="email"><b><?php echo $idioma['ContacteEmail'] ?></b></label>
                <input type="text" class="inputs" placeholder="<?php echo $idioma['placeholderEmail'] ?>" name="email" required>
                <label for="pass"><b><?php echo $idioma['contrasenya'] ?></b></label>
                <input type="password" class="inputs" placeholder="<?php echo $idioma['placeholderContra'] ?>" name="pass" required>
                <label for="psw-repeat"><b><?php echo $idioma['repetirContra'] ?></b></label>
                <input type="password" class="inputs" placeholder="<?php echo $idioma['placeholderRepetir'] ?>" name="pass-repetir" required>
                <div class="clearfix">
                    <button type="submit" class="signup"><?php echo $idioma['crearUsuari'] ?></button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
    
<!-- FINAL Modal Crear Usuario -->

