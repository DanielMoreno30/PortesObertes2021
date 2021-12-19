<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>PACMAN</title> 
</head>
<body>
  <h1> Pacman</h1>
  <ul>Controles:
     <li>Movimiento: Flechas</li>
     <li>Empezar: N</li>
     <li>Pausar: P</li>
  </ul>
  <div id="pacman"></div>
 <script src="./pacman.js"></script>
 <script src="./modernizr-1.5.min.js"></script>
 <script>
   var el = document.getElementById("pacman");

    if (Modernizr.canvas && Modernizr.localstorage && 
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
      window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
    } else { 
      el.innerHTML = "Sorry, needs a decent browser<br /><small>" + 
        "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
    }
 </script>
</body>
</html>
