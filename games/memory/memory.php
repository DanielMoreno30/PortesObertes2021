<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Memory (Daniel Moreno)</title>
  <link rel="stylesheet" href="memorystyle.css">
  <link rel="icon"  href="img/bombillalogo.png" type="image/png" />
</head>

<body>
  <header>
    <h1>MEMORY</h1>
  </header>
  <div class="finjuego" id="finjuego">
  </div>
  <div class="temporizador" id="temporizador">
    <h3 id="tituloTiempo" style="font-family: 'Assistant';">Temps</h3>
    <p id="textCrono" style="font-family: 'Assistant';">0.00</p>
  </div>
  <div class="puntos" id="puntos">
    <h3 style="font-family: 'Assistant';">Puntuació:</h3>
    <p id="puntuacion" style="font-family: 'Assistant';">0</p>
  </div>
  <section class="memory-game" id="memory-game">
    <div class="card" data-framework="css">
      <img class="partedelantera" src="img/css.png" alt="CSS" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>
    <div class="card" data-framework="css">
	  <img class="partedelantera" src="img/css.png" alt="CSS" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>

    <div class="card" data-framework="vue">
      <img class="partedelantera" src="img/vue.png" alt="Vue" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>
    <div class="card" data-framework="vue">
	  <img class="partedelantera" src="img/vue.png" alt="Vue" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>

    <div class="card" data-framework="angular">
      <img class="partedelantera" src="img/angular.png" alt="Angular" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>
    <div class="card" data-framework="angular">
	  <img class="partedelantera" src="img/angular.png" alt="Angular" width="100" height="50"/>
	  <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>

    <div class="card" data-framework="ionic">
      <img class="partedelantera" src="img/ionic.png" alt="Ionic" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>
    <div class="card" data-framework="ionic">
	  <img class="partedelantera" src="img/ionic.png" alt="Ionic" width="100" height="50"/>
	  <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
	</div>

    <div class="card" data-framework="javascript">
	  <img class="partedelantera" src="img/javascript.png" alt="JavaScript" width="100" height="50"/>
	  <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
	</div>
	<div class="card" data-framework="javascript">
	  <img class="partedelantera" src="img/javascript.png" alt="JavaScript" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
	</div>

    <div class="card" data-framework="react">
      <img class="partedelantera" src="img/react.png" alt="React" width="100" height="50"/>
      <img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
    </div>
    <div class="card" data-framework="react">
		<img class="partedelantera" src="img/react.png" alt="React" width="100" height="50"/>
		<img class="partetrasera" src="img/memorylogo.png" alt="MemoryLogo"/>
	</div>
  </section>

  <script src="memoryscript.js"></script>
</body>
</html>