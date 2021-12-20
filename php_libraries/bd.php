<?php
    //(FUNCIONA)
    //Función para abrir o conextarse la base de datos:
    function abrirBd()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conexion = new PDO("mysql:host=$servername;dbname=portesObertes", $username, $password);
        //set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");

        return $conexion;
    }

    //(FUNCIONA)
    //Función para cerrar la base de datos:
    function cerrarBd()
    {
        return null;
    }


    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //SELECTS

    /*-----------------------------------------------------------------------------------------------------------------------------------*/
    
    
    //(FUNCIONA)
    //Función para seleccionar los juegos:
    function selectJuegos()
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarJuegos = "select * from portesObertes.juegos";

        $sentenciaJuegos = $conexion->prepare($sentenciaSeleccionarJuegos);
        $sentenciaJuegos->execute();

        $juegos = $sentenciaJuegos->fetchAll();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los juegos:
        return $juegos;
    }

    //(FUNCIONA)
    //Función para seleccionar los usuarios:
    function selectUsuarios()
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarUsuarios = "select * from usuarios";

        $sentenciaUsuarios = $conexion->prepare($sentenciaSeleccionarUsuarios);
        $sentenciaUsuarios->execute();

        $usuarios = $sentenciaUsuarios->fetchAll();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los usuarios:
        return $usuarios;
    }

    //(FUNCIONA)
    //Función para seleccionar los usuarios:
    function selectUnUsuario($idUsuario)
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarUnUsuario = "select * from usuarios where id_usuario=:idUsuario";

        $sentenciaUsuario = $conexion->prepare($sentenciaSeleccionarUnUsuario);
        $sentenciaUsuario->bindParam(':idUsuario', $idUsuario);
        $sentenciaUsuario->execute();

        $usuario = $sentenciaUsuario->fetch();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los usuarios:
        return $usuario;
    }

    //(FUNCIONA)
    //Función para seleccionar los usuarios por tipo:
    function selectUsuariosPorTipo($tipo)
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarUsuariosPorTipo = "select * from usuarios where tipo=:tipo";

        $sentenciaUsuarios = $conexion->prepare($sentenciaSeleccionarUsuariosPorTipo);
        $sentenciaUsuarios->bindParam(':tipo', $tipo);
        $sentenciaUsuarios->execute();

        $usuarios = $sentenciaUsuarios->fetchAll();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los usuarios:
        return $usuarios;
    }

    //(FUNCIONA)
    //Función para seleccionar los usuarios por tipo:
    function selectUsuariosParaIS($correo, $contra)
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarUsuariosParaIS = "select * from usuarios where correo=:correo";

        $sentenciaUsuario = $conexion->prepare($sentenciaSeleccionarUsuariosParaIS);
        $sentenciaUsuario->bindParam(':correo', $correo);
        $sentenciaUsuario->execute();

        $usuario = $sentenciaUsuario->fetch();

        if(isset($usuario))
        {
            if(!password_verify($contra, $usuario["password"]))
            {
               $usuario = null; 
            }
        }

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los usuarios:
        return $usuario;
    }

    //(FUNCIONA)
    //Función para seleccionar los usuarios:
    function selectRegistros($id_juego)
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos y la ejecutamos:
        $sentenciaSeleccionarRegistros = "select usuarios.nombre_usuario, usuarios.tipo, ranking.puntuacion from ranking join usuarios on ranking.id_usuario = usuarios.id_usuario where id_juego=:id_juego and usuarios.tipo='N' order by puntuacion desc limit 5";

        $sentenciaRegistros = $conexion->prepare($sentenciaSeleccionarRegistros);
        $sentenciaRegistros->bindParam(':id_juego', $id_juego);
        $sentenciaRegistros->execute();

        $registros = $sentenciaRegistros->fetchAll();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los usuarios:
        return $registros;
    }

    //(FUNCIONA)
    //Función para seleccionar los juegos jugados:
    function selectJuegosJugadosUnUsuario($id_usuario)
    {
        //Abrimos conexión:
        $conexion = abrirBd();

        //Creamos la consulta, la preparamos, enlazamos el parámetro idPokemon y la ejecutamos:
        $sentenciaSeleccionarJuegosJugados = "select * from usuario_has_played join usuarios on usuarios.id_usuario = usuario_has_played.usuario_id where usuario_id=:id_usuario";

        $sentenciaJuegosJugados = $conexion->prepare($sentenciaSeleccionarJuegosJugados);
        $sentenciaJuegosJugados->bindParam(':id_usuario', $id_usuario);
        $sentenciaJuegosJugados->execute();

        //Guardamos los id's de los tipos seleccionados:
        $juegosJugados = $sentenciaJuegosJugados->fetchAll();

        //Cerramos conexión:
        $conexion = cerrarBd();

        //Devolvemos los nombres de los tipos:
        return $juegosJugados;
    }


    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //FIN SELECTS

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //INSERT

    /*-----------------------------------------------------------------------------------------------------------------------------------*/


    //(FUNCIONA)
    //Función para insertar un pokemon:
    function insertUsuario($nombreUsuario, $contra, $nombre, $apellidos, $correo, $tipo)
    {
        try 
        {
            //Encriptamos la contraseña:
            $contraEncriptada = password_hash($contra, PASSWORD_DEFAULT);

            //Para comprobar contraseñas:
            //password_verify('imposible', $hash);

            //Abrimos conexión:
            $conexion = abrirBd();

            //Para iniciar una transacción, desactivando el 'autocommit':
            $conexion->beginTransaction();
            
            //Creamos la consulta, la preparamos, enlazamos todos los parámetros que queremos añadir y la ejecutamos:
            $sentenciaInsertarUsuario = "insert into usuarios (nombre_usuario, password, nombre, apellidos, correo, tipo) values (:nombreUsuario, :contra, :nombre, :apellidos, :correo, :tipo)";

            $sentenciaInsertar = $conexion->prepare($sentenciaInsertarUsuario);
            $sentenciaInsertar->bindParam(':nombreUsuario', $nombreUsuario);
            $sentenciaInsertar->bindParam(':contra', $contraEncriptada);
            $sentenciaInsertar->bindParam(':nombre', $nombre);
            $sentenciaInsertar->bindParam(':apellidos', $apellidos);
            $sentenciaInsertar->bindParam(':correo', $correo);
            $sentenciaInsertar->bindParam(':tipo', $tipo);
            $sentenciaInsertar->execute();

            //Guardamos los cambios en la base de datos:
            $conexion->commit();

            $_SESSION['mensaje'] = "¡Usuario añadido correctamente!";
        } 
        catch (PDOException $e) 
        {
            $_SESSION['error'] = $e->getCode() . ' - ' . $e->getMessage();
        }

        //Cerramos conexión:
        $conexion = cerrarBd();
    }


    //Función para insertar un pokemon:
    function insertJuegoJugado($usuario_id, $juego_id)
    {
        try 
        {
            //Abrimos conexión:
            $conexion = abrirBd();

            //Para iniciar una transacción, desactivando el 'autocommit':
            $conexion->beginTransaction();
            
            //Creamos la consulta, la preparamos, enlazamos todos los parámetros que queremos añadir y la ejecutamos:
            $sentenciaInsertarJuegoJugado = "insert into usuario_has_played (usuario_id, juego_id) values (:id_usuario, :id_juego)";

            $sentenciaInsertar = $conexion->prepare($sentenciaInsertarJuegoJugado);
            $sentenciaInsertar->bindParam(':id_usuario', $usuario_id);
            $sentenciaInsertar->bindParam(':id_juego', $juego_id);
            $sentenciaInsertar->execute();

            //Guardamos los cambios en la base de datos:
            $conexion->commit();

            $_SESSION['mensaje'] = "¡Juego jugado correctamente!";
        } 
        catch (PDOException $e) 
        {
            $_SESSION['error'] = $e->getCode() . ' - ' . $e->getMessage();
        }

        //Cerramos conexión:
        $conexion = cerrarBd();
    }


    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //FIN INSERT

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //DELETE

    /*-----------------------------------------------------------------------------------------------------------------------------------*/


    //(FUNCIONA)
    function borrarUsuario($id_usuario)
    {
        try 
        {
            //Abrimos conexión:
            $conexion = abrirBd();

            //Creamos la consulta, la preparamos, enlazamos el parámetro numeroPokemon y la ejecutamos:
            $sentenciaBorrarUsuario = "delete from usuarios where id_usuario=:id_usuario";

            $sentenciaBorrar = $conexion->prepare($sentenciaBorrarUsuario);
            $sentenciaBorrar->bindParam(':id_usuario', $id_usuario);
            $sentenciaBorrar->execute();

            $_SESSION['mensaje'] = "¡Usuario borrado correctamente!";
        } catch (PDOException $e) 
        {
            $_SESSION['error'] = $e->getCode() . ' - ' . $e->getMessage();
        }

        //Cerramos conexión:
        $conexion = cerrarBd();
    }


    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //FIN DELETE

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //UPDATE

    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    function modificarUsuario($id_usuario, $nombreUsuario, $contra, $nombre, $apellidos, $correo, $tipo)
    {
        try {
            //Abrimos conexión:
            $conexion = abrirBd();

            //Encriptamos la contraseña:
            $contraEncriptada = password_hash($contra, PASSWORD_DEFAULT);

            //Para iniciar una transacción, desactivando el 'autocommit':
            $conexion->beginTransaction();                        

            $sentenciaModificarUsuario = "update usuarios set nombre_usuario=:nombre_usuario, password=:contra, nombre=:nombre, apellidos=:apellidos, correo=:correo, tipo=:tipo where id_usuario=:id_usuario";

            $sentenciaModificar = $conexion->prepare($sentenciaModificarUsuario);
            $sentenciaModificar->bindParam(':id_usuario', $id_usuario);
            $sentenciaModificar->bindParam(':nombre_usuario', $nombreUsuario);
            $sentenciaModificar->bindParam(':contra', $contraEncriptada);
            $sentenciaModificar->bindParam(':nombre', $nombre);
            $sentenciaModificar->bindParam(':apellidos', $apellidos);
            $sentenciaModificar->bindParam(':correo', $correo);
            $sentenciaModificar->bindParam(':tipo', $tipo);
            $sentenciaModificar->execute();

            //Guardamos los cambios en la base de datos:
            $conexion->commit();

            $_SESSION['mensaje'] = "¡Usuario modificado correctamente!";
        } 
        catch (PDOException $e) 
        {
            $_SESSION['error'] = $e->getCode() . ' - ' . $e->getMessage();
        }

        //Cerramos conexión:
        $conexion = cerrarBd();
    }


    /*-----------------------------------------------------------------------------------------------------------------------------------*/

    //FIN UPDATE

    /*-----------------------------------------------------------------------------------------------------------------------------------*/
?>