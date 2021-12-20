<?php
    require_once("../php_libraries/bd.php");
    session_start();

    if(isset($_SESSION['datosUsuario']))
    {
        $usuario = $_SESSION['datosUsuario'];
    }
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portes Obertes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
    <link rel="stylesheet" href="../style/administracio.css">
</head>
<body class="overflow-hidden" style="font-family: 'Assistant'; height: 100vh;">
    <div class="container-fluid d-flex justify-content-center flex-column mt-3 mb-3">
        
        <!-- si hay mensajes o errores los mostramos y los quitamos de la sessión -->
        <?php
            if(isset($_SESSION['error']))
            {
                echo '<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">' . $_SESSION['error'] . 
                '<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button> </div>';
                unset($_SESSION['error']);
            }
        
            if(isset($_SESSION['mensaje']))
            {
                echo '<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">' . $_SESSION['mensaje'] . 
                '<button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button> </div>';
                unset($_SESSION['mensaje']);
            }
        ?>
        <div class="card">
            <div class="card-header fs-4 d-flex align-items-center bg-secondary" style="color: white;">
                Administrador
            </div>
            <div class="card-body">
                <form action="../php_controllers/usuariosController.php" class="d-block" method="POST" enctype="multipart/form-data">
                    <!--nombre de usuario-->
                    <!-- si habia un pokemon guardado en la sesión recuperamos el valor y lo ponemos en el formulario -->
                    <div class="mb-3 row">
                        <label for="nombreUsuario" class="col-sm-2 col-form-label">Nom d'usuari </label>
                        <div class="col-sm-10">
                            <input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" placeholder="Nombre de usuario..." maxlength="45"
                            value="<?php if(isset($usuario['nombre_usuario'])){ echo $usuario['nombre_usuario']; } ?>" readonly>
                        </div>
                    </div>

                    <!-- contrassenya -->
                    <div class="mb-3 row">
                        <label for="contra" class="col-sm-2 col-form-label">Contrassenya </label>
                        <div class="col-sm-10">
                            <input type="text" name="contra" class="form-control" id="contra" placeholder="Contrassenya..." maxlength="60"
                            value="<?php if(isset($usuario['password'])){ echo $usuario['password']; } ?>" readonly>
                        </div>
                    </div>

                    <!--nombre-->
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nom </label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre..." maxlength="20"
                            value="<?php if(isset($usuario['nombre'])){ echo $usuario['nombre']; } ?>" readonly>
                        </div>
                    </div>

                    <!-- apellidos -->
                    <div class="mb-3 row">
                        <label for="apellidos" class="col-sm-2 col-form-label">Cognoms </label>
                        <div class="col-sm-10">
                            <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Apellidos..." maxlength="45"
                            value="<?php if(isset($usuario['apellidos'])){ echo $usuario['apellidos']; } ?>" readonly>
                        </div>
                    </div>

                    <!-- correo -->
                    <div class="mb-3 row">
                        <label for="correo" class="col-sm-2 col-form-label">Correu </label>
                        <div class="col-sm-10">
                            <input type="text" name="correo" class="form-control" id="correo" placeholder="Correu..." maxlength="60"
                            value="<?php if(isset($usuario['correo'])){ echo $usuario['correo']; } ?>" readonly> 
                        </div>
                    </div>

                    <!-- tipo -->
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="checkTipo[]" id="usuarioAdmin" value="A"
                                <?php if(isset($usuario['tipo'])){ if($usuario['tipo'] == 'A'){ echo "checked"; } } ?>>
                                <label class="form-check-label me-2" for="usuarioAdministrador"> Administrador</label>
                            </div>
                        </div>
                    </div>

                    <!--botones-->
                    <div class="d-flex justify-content-end">
                        <a href="../frontend/administracioAdmin.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
                        <input type="submit" class="btn btn-primary ms-2" name="modificarUsuario" value="Aceptar">
                        <input id="numeroOcultoModificar" type="hidden" name="numeroOcultoModificar" value="<?php if(isset($usuario['id_usuario'])){ echo $usuario['id_usuario']; } ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/administracio.js"></script>
</body>
</html>