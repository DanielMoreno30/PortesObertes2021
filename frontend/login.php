<!-- Modal Iniciar Sesión -->
    <div class="modal fade" id="modaliniciarsesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Portes Obertes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="modal-content">
            <div class="container">
                <h1>Iniciar Sessió</h1>
                <p>Escriu el teu email i contrasenya per iniciar sessió.</p>
            <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="escriu el teu Email" name="email" required>

                <label for="pass"><b>Contrasenya</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <label for="psw-repeat"><b>Repetir Contrasenya</b></label>
                <input type="password" placeholder="Repeat Password" name="pass-repetir" required>

                <div class="clearfix">
                    <button type="submit" class="signup">Iniciar Sessió</button>
                </div>
                <a data-toggle="modal" href="#modalcrearusuario" class="btn btn-primary">No tens complte? Registra't!</a>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
<!-- FINAL Modal Iniciar Sesión -->

<!-- Modal Crear Usuario -->

    <div class="modal fade" id="modalcrearusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
                <input type="text" placeholder="escriu el teu Nom d'Usuari" name="nombre" required>

                <label for="email"><b>Nom</b></label>
                <input type="text" placeholder="escriu el teu Nom" name="nombre" required>

                <label for="email"><b>Cognoms</b></label>
                <input type="text" placeholder="escriu el teus Cognoms" name="apellidos" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="escriu el teu Email" name="email" required>

                <label for="pass"><b>Contrasenya</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <label for="psw-repeat"><b>Repetir Contrasenya</b></label>
                <input type="password" placeholder="Repeat Password" name="pass-repetir" required>

                <div class="clearfix">
                    <button type="submit" class="crearusuario">Crear Usuari</button>
                </div>
                </div>
            </form>
            </div>
            </div>
        </div>
	</div>
    
<!-- FINAL Modal Crear Usuario -->

