<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <title>Portes Obertes</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/games.css">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
</head>
<!---------------------------------------BODY-------------------------------------->
<body style="font-family: 'Assistant';">
<!---------------------------------------NAVBAR-------------------------------------->
<?php
    include 'login.php';
    include 'navbarfija.php';
?>
<!---------------------------------------FINAL NAVBAR-------------------------------------->

<section id="contentSection" class="content">
    <div class="container pb-4">
        <header>
            <div class="pb-2 mb-4 rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 text-center" style="color: #0089ff; font-size: 5rem; font-family: 'Montserrat'; letter-spacing: 10px;">Jocs</h1>
            </div>
        </header>
        <div class="row text-center m-3">
            <div class="col-md-8 col-12">
                <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="../games/Patronus/index.html" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="../img/patronus.gif" class="d-block w-100" alt="..." height="400px">
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-l">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h1 class="modal-title" id="exampleModalLabel" style="color: #0089ff;">Registre</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="container mt-5 text-start modalRegistre" style="font-size: 1.5rem;">
                                                    <form action="phpmailer.php" class="row g-3" method="POST">
                                                        <div class="col-md-12">
                                                            <label for="nombre" class="form-label">Nom</label>
                                                            <input type="text" class="form-control form-control-lg" name="nombre" id="nombre" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="apellidos" class="form-label">Usuari</label>
                                                            <input type="text" class="form-control form-control-lg" name="apellidos" id="apellidos" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="email" class="form-label">E-mail</label>
                                                            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="email" class="form-label">Gènere</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Home
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Dona
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                                <label class="form-check-label" for="flexRadioDefault3">
                                                                    No vull respondre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Tancar</button>
                                            <a href="../games/Patronus/index.html" class="btn btn-primary btn-lg" type="submit" name="submit" id="submit" value="submit">
                                                Guardar i jugar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="../games/memory/memory.php" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                <img src="../img/juego2.png" class="d-block w-100" alt="..." height="400px">
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-l">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h1 class="modal-title" id="exampleModal1Label" style="color: #0089ff;">Inici de sessió</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="container mt-5 text-start modalRegistre" style="font-size: 1.5rem; font-family: 'Open Sans', sans-serif ">
                                                    <form action="phpmailer.php" class="row g-3" method="POST">
                                                        <div class="col-md-12">
                                                            <label for="email" class="form-label">E-mail</label>
                                                            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="apellidos" class="form-label">Usuari</label>
                                                            <input type="text" class="form-control form-control-lg" name="apellidos" id="apellidos" required>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Tancar</button>
                                            <a href="../games/memory/memory.php" class="btn btn-primary btn-lg" type="submit" name="submit" id="submit" value="submit">
                                                Guardar i jugar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="../games/skyHop/index.php" type="button">
                                <img src="../img/juego3.PNG" class="d-block w-100" alt="..." height="400px">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="../games/PacmanJuego/pacman.php" type="button">
                                <img src="../img/juego4.PNG" class="d-block w-100" alt="..." height="400px">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="../games/Turnflip/index.html" type="button">
                                <img src="../img/juego5.png" class="d-block w-100" alt="..." height="400px">
                            </a>
                        </div>
                        <div class="carousel-item disabledGame">
                            <a type="button">
                                <img src="../img/patronus.gif" class="d-block w-100" alt="..." height="400px" style="opacity: 0.5; cursor:not-allowed">
                            </a>
                            <div class="carousel-caption d-none d-md-block">
                                <h1 style="color: black"><strong>Juga als altres jocs per desbloquejar aquest.</strong></h1>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="accordion" id="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="accordion">
                                Ranking joc 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionBody" style="overflow-y: scroll; height: 110px;">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true" style="background-color: #0089ff;">Jugador 1: 100</li>
                                    <li class="list-group-item">Jugador 2: 97</li>
                                    <li class="list-group-item">Jugador 3: 96</li>
                                    <li class="list-group-item">Jugador 4: 90</li>
                                    <li class="list-group-item">Jugador 5: 86</li>
                                    <li class="list-group-item">Jugador 6: 85</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="accordion">
                            Ranking joc 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionBody" style="overflow-y: scroll; height: 110px;">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true" style="background-color: #0089ff;">Jugador 1: 100</li>
                                    <li class="list-group-item">Jugador 2: 97</li>
                                    <li class="list-group-item">Jugador 3: 96</li>
                                    <li class="list-group-item">Jugador 4: 90</li>
                                    <li class="list-group-item">Jugador 5: 86</li>
                                    <li class="list-group-item">Jugador 6: 85</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="accordion">
                            Ranking joc 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionBody" style="overflow-y: scroll; height: 110px;">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true" style="background-color: #0089ff;">Jugador 1: 100</li>
                                    <li class="list-group-item">Jugador 2: 97</li>
                                    <li class="list-group-item">Jugador 3: 96</li>
                                    <li class="list-group-item">Jugador 4: 90</li>
                                    <li class="list-group-item">Jugador 5: 86</li>
                                    <li class="list-group-item">Jugador 6: 85</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="accordion">
                            Ranking joc 4
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionBody" style="overflow-y: scroll; height: 110px;">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true" style="background-color: #0089ff;">Jugador 1: 100</li>
                                    <li class="list-group-item">Jugador 2: 97</li>
                                    <li class="list-group-item">Jugador 3: 96</li>
                                    <li class="list-group-item">Jugador 4: 90</li>
                                    <li class="list-group-item">Jugador 5: 86</li>
                                    <li class="list-group-item">Jugador 6: 85</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="accordion">
                            Ranking joc 5
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body" id="accordionBody" style="overflow-y: scroll; height: 110px;">
                                <ul class="list-group">
                                    <li class="list-group-item active" aria-current="true" style="background-color: #0089ff;">Jugador 1: 100</li>
                                    <li class="list-group-item">Jugador 2: 97</li>
                                    <li class="list-group-item">Jugador 3: 96</li>
                                    <li class="list-group-item">Jugador 4: 90</li>
                                    <li class="list-group-item">Jugador 5: 86</li>
                                    <li class="list-group-item">Jugador 6: 85</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-----------------FINAL BODY----------------->  
</body>
<!-----------------FOOTER----------------->  
<?php
    include './footer.php';
?>
<!-----------------FINAL FOOTER----------------->   

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/navbar.js"></script>
  <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>
</html>