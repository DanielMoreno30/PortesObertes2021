<?php
    session_start();
    require_once("../../php_libraries/bd.php");

    insertJuegoJugado($_SESSION["idIS"]["id_usuario"], 5);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pac-man</title>
    <link rel="stylesheet" href="style.css">
    <script src="juego.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="grid">
      
    </div>

    <h3>Score:<span id="score"></span></h3>
    <div class = "opciones">
      <input type="button" value="Restart" onclick="location.reload()"/>
      <input type="button" value="Volver" onclick="location.href= '../../frontend/games.php'"/>
      <input type="button" value="Cambiar imagenes a Escuela" onclick="location.href='./pacman2.php'"/>
    </div>

  </body>
</html>