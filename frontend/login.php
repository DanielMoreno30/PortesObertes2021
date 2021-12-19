<link rel="stylesheet" href="../style/login.css">

<!-- Modal Iniciar Sesión -->
    <div class="modal fade" id="modaliniciarsesion" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLogin">Portes Obertes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="modal-content">
            <div class="container">
                <h1 style="font-size: 25px;">Iniciar Sessió</h1>
                <p>Escriu el teu email i contrasenya per iniciar sessió.</p>
            <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Email" name="email" required>

                <label for="pass"><b>Contrasenya</b></label>
                <input type="password" class="inputs" placeholder="Escriu la teva contrasenya" name="pass" required>

                <div class="clearfix">
                    <button type="submit" class="signup">Iniciar Sessió</button>
                    <button class="gotocreateuser" type="button" data-bs-toggle="modal" data-bs-target="#modalcrearusuario" data-bs-dismiss="modal">No tens compte? Registra't</button>
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
            <form class="modal-content">
            <div class="container">
                <h1>Crear un nou usuari</h1>
                <p>Escriu les teves dates per registrar-te.</p>
            <hr>
                <label for="nomusuari"><b>Nom Usuari</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Nom d'Usuari" name="nombre" required>

                <label for="email"><b>Nom</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Nom" name="nombre" required>
 
                <label for="email"><b>Cognoms</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teus Cognoms" name="apellidos" required>

                <label for="email"><b>Email</b></label>
                <input type="text" class="inputs" placeholder="Escriu el teu Email" name="email" required>

                <label for="pass"><b>Contrasenya</b></label>
                <input type="password" class="inputs" placeholder="Escriu la teva contrasenya" name="pass" required>

                <label for="psw-repeat"><b>Repetir Contrasenya</b></label>
                <input type="password" class="inputs" placeholder="Repeteix la contrasenya" name="pass-repetir" required>

                <div class="clearfix">
                    <button type="submit" class="signup">Crear Usuari</button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
    
<!-- FINAL Modal Crear Usuario -->

