<?php
    function crearUsuario($nombreUsuario, $contra, $nombre, $apellidos, $correo, $tipo)
    {
        $usuario = [
            'nombre_usuario' => $nombreUsuario,
            'password' => $contra,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'correo' => $correo,
            'tipo' => $tipo
        ];

        return $usuario;
    }

    function crearUsuario2($id_usuario, $nombreUsuario, $contra, $nombre, $apellidos, $correo, $tipo)
    {
        $usuario = [
            'id_usuario' => $id_usuario,
            'nombre_usuario' => $nombreUsuario,
            'password' => $contra,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'correo' => $correo,
            'tipo' => $tipo
        ];

        return $usuario;
    }
?>