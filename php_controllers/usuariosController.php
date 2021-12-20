<?php
    require_once("../php_libraries/crearUsuario.php");
    require_once("../php_libraries/bd.php");
    session_start();

    if(isset($_POST["insertarAdmin"]))
    {
        insertUsuario($_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
        $_POST["apellidos"], $_POST["correo"], 'A');

        if(!isset($_SESSION['error']))
        {
            header('Location: ' . "../frontend/administracioAdmin.php");
            exit();
        }
        else
        {
            $_SESSION["usuarioInsertar"] = crearUsuario($_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'A');

            header('Location: ' . "../php_views/formularioInsertarAdmin.php");
            exit();
        }
    }
    else if(isset($_POST["borrarAdmin"]))
    {
        if(isset($_POST["numeroOcultoBorrar"]))
        {
            $id = $_POST["numeroOcultoBorrar"];

            borrarUsuario($id);

            if(!isset($_SESSION['error']))
            {
                $_SESSION['mensaje'] = "¡Pokemon borrado correctamente!";
            }
            else
            {
                $_SESSION['error'] = "¡No se ha borrado el pokemon!";
            }

            header('Location: ' . "../frontend/administracioAdmin.php");
        }
    }
    else if(isset($_POST["editarAdmin"]))
    {
        $editarAdmin = selectUnUsuario($_POST["numeroOcultoEditar"]);
        $_SESSION["datosAdmin"] = $editarAdmin;

        header('Location: ' . "../php_views/formularioEditarAdmin.php");
        exit();
    }
    else if(isset($_POST["modificarAdmin"]))
    {

        if($_POST["checkTipo"][0] == 'A')
        {
            modificarUsuario($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'A');
        }
        else
        {
            modificarUsuario($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'N');
        }

        if(!isset($_SESSION['error']))
        {
            header('Location: ' . "../frontend/administracioAdmin.php");
            exit();
        }
        else
        {
            $_SESSION["datosAdmin"] = crearUsuario2($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'A');

            header('Location: ' . "../php_views/formularioEditarAdmin.php");
            exit();
        }
    }

    if(isset($_POST["borrarUsuario"]))
    {
        if(isset($_POST["numeroOcultoBorrar"]))
        {
            $id = $_POST["numeroOcultoBorrar"];

            borrarUsuario($id);

            if(!isset($_SESSION['error']))
            {
                $_SESSION['mensaje'] = "¡Pokemon borrado correctamente!";
            }
            else
            {
                $_SESSION['error'] = "¡No se ha borrado el pokemon!";
            }

            header('Location: ' . "../frontend/administracioUsuaris.php");
            exit();
        }
    }
    else if(isset($_POST["editarUsuario"]))
    {
        $editarUsuario = selectUnUsuario($_POST["numeroOcultoEditar2"]);
        $_SESSION["datosUsuario"] = $editarUsuario;

        header('Location: ' . "../php_views/formularioEditarUsuario.php");
        exit();
    }
    else if(isset($_POST["modificarUsuario"]))
    {

        if($_POST["checkTipo"][0] == 'A')
        {
            modificarUsuario($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'A');
        }
        else
        {
            modificarUsuario($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'N');
        }

        if(!isset($_SESSION['error']))
        {
            header('Location: ' . "../frontend/administracioUsuaris.php");
            exit();
        }
        else
        {
            $_SESSION["datosUsuario"] = crearUsuario2($_POST["numeroOcultoModificar"], $_POST["nombreUsuario"], $_POST["contra"], $_POST["nombre"], 
            $_POST["apellidos"], $_POST["correo"], 'A');

            header('Location: ' . "../php_views/formularioEditarUsuario.php");
            exit();
        }
    }

    if(isset($_POST["iniciarSesion"]))
    {
        $usuario = selectUsuariosParaIS($_POST["email"]);

        if($usuario == null)
        {
            header('Location: ' . "../index.php");
            exit();
        }
        else
        {
            $_SESSION["idIS"] = $usuario;
            header('Location: ' . "../index.php");
            exit();
        }
    }
?>