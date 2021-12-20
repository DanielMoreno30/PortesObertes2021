<?php
    require_once("../php_libraries/bd.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portes Obertes</title>
    <style>
        body
        {
            font-family: "Arial"; 
        }
    </style>
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
    <?php
        include 'navbarfija.php';
    ?>

    <section id="content" class="content" style="height: 100vh;">
        <div class="container h-100">
            <div class="container-fluid d-flex justify-content-end mb-3">
                <form action="../php_controllers/usuariosController.php" method="POST">
                    <button id="btnEditarUsuario" type="submit" name="editarUsuario" class="btn shadow-none" style="cursor: pointer; text-decoration: none;" disabled>
                        <i class="fas fa-user-edit fa-3x me-5 iconAdmin"></i>
                    </button>
                    <input id="numeroOcultoEditar2" type="hidden" name="numeroOcultoEditar2" value="">
                </form>
                <!-- Button trigger modal -->
                <button id="btnBorrarUsuario" type="button" class="btn shadow-none me-5" style="cursor: pointer; text-decoration: none;" data-toggle="modal" data-target="#exampleModal" disabled>
                    <i class="fas fa-user-minus fa-3x iconAdmin"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-3" id="exampleModalLabel">Confirmació</h5>
                                <button class="btnModal" data-dismiss="modal">
                                    <i class="fas fa-window-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../php_controllers/usuariosController.php" method="POST">
                                    <button type="submit" name="borrarUsuario" class="btn shadow-none fs-4" style="cursor: pointer; text-decoration: none;">
                                        Estás segur que vols eliminar?
                                    </button>
                                    <input id="numeroOculto" type="hidden" name="numeroOcultoBorrar" value="">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <form action="../php_controllers/usuariosController.php" method="POST">
                                    <button type="button" class="btn btn-secondary fs-4" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="borrarUsuario" class="btn btn-primary shadow-none fs-4" style="cursor: pointer; text-decoration: none;">
                                        Aceptar
                                    </button>
                                    <input id="numeroOculto" type="hidden" name="numeroOcultoBorrar" value="">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <table id="tablaUsuarios" class="table bg-dark" style="height: 100%;">
                    <thead class="text-white">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nom d'usuari</th>
                            <th scope="col">Contrassenya</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Cognoms</th>
                            <th scope="col">Correu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light overflow-scroll">
                        <?php
                            $tipoUsuario = 'N';
                            $usuarios = selectUsuariosPorTipo($tipoUsuario);

                            foreach ($usuarios as $user) 
                            {
                        ?>
                                <tr class="unselected" style="cursor: pointer;">
                                    <th scope="row"><?php echo $user["id_usuario"]; ?></th>
                                    <td><?php echo $user["nombre_usuario"]; ?></td>
                                    <td><?php echo $user["password"]; ?></td>
                                    <td><?php echo $user["nombre"]; ?></td>
                                    <td><?php echo $user["apellidos"]; ?></td>
                                    <td><?php echo $user["correo"]; ?></td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/navbar.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/administracio.js"></script>
</html>