<?php
    include "../php_controllers/configuracionIdiomas.php"; 
    require_once("../php_libraries/bd.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/navbaraboutus.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="icon"  href="../img/politecnicsico.png" type="image/png" />
</head>
<body style="font-family: 'Assistant';" class="d-block" data-bs-spy="scroll">
    <!---------------------------------------NAVBAR-------------------------------------->
    <?php
        include 'login.php';
        include 'navbarfija.php';
    ?>

    <script>
        function expand()
        {
            var textoParaDesplegar1 = document.getElementById("desplegarAC");
            var textoParaDesplegar2 = document.getElementById("desplegarMP");
            var textoParaDesplegar3 = document.getElementById("desplegarGVEC");
            var textoParaDesplegar4 = document.getElementById("desplegarCI");
            var textoParaDesplegar5 = document.getElementById("desplegarAVGE");
            var textoParaDesplegar6 = document.getElementById("desplegarSMIX");
            var textoParaDesplegar7 = document.getElementById("desplegarDAM");
            var textoParaDesplegar8 = document.getElementById("desplegarDAW");
            var textoParaDesplegar9 = document.getElementById("desplegarGA");
            var textoParaDesplegar10 = document.getElementById("desplegarAF");
            var textoParaDesplegar11 = document.getElementById("desplegarAD");
            var flecha1 = document.querySelector(".flechaExpandir1");
            var flecha2 = document.querySelector(".flechaExpandir2");
            var flecha3 = document.querySelector(".flechaExpandir3");
            var flecha4 = document.querySelector(".flechaExpandir4");
            var flecha5 = document.querySelector(".flechaExpandir5");
            var flecha6 = document.querySelector(".flechaExpandir6");
            var flecha7 = document.querySelector(".flechaExpandir7");
            var flecha8 = document.querySelector(".flechaExpandir8");
            var flecha9 = document.querySelector(".flechaExpandir9");
            var flecha10 = document.querySelector(".flechaExpandir10");
            var flecha11 = document.querySelector(".flechaExpandir11");

            if(textoParaDesplegar1.classList.contains("expandir"))
            {
                textoParaDesplegar1.classList.remove("expandir");
                flecha1.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar1.classList.add("expandir");
                flecha1.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar2.classList.contains("expandir"))
            {
                textoParaDesplegar2.classList.remove("expandir");
                flecha2.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar2.classList.add("expandir");
                flecha2.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar3.classList.contains("expandir"))
            {
                textoParaDesplegar3.classList.remove("expandir");
                flecha3.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar3.classList.add("expandir");
                flecha3.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar4.classList.contains("expandir"))
            {
                textoParaDesplegar4.classList.remove("expandir");
                flecha4.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar4.classList.add("expandir");
                flecha4.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar5.classList.contains("expandir"))
            {
                textoParaDesplegar5.classList.remove("expandir");
                flecha5.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar5.classList.add("expandir");
                flecha5.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar6.classList.contains("expandir"))
            {
                textoParaDesplegar6.classList.remove("expandir");
                flecha6.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar6.classList.add("expandir");
                flecha6.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar7.classList.contains("expandir"))
            {
                textoParaDesplegar7.classList.remove("expandir");
                flecha7.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar7.classList.add("expandir");
                flecha7.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar8.classList.contains("expandir"))
            {
                textoParaDesplegar8.classList.remove("expandir");
                flecha8.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar8.classList.add("expandir");
                flecha8.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar9.classList.contains("expandir"))
            {
                textoParaDesplegar9.classList.remove("expandir");
                flecha9.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar9.classList.add("expandir");
                flecha9.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar10.classList.contains("expandir"))
            {
                textoParaDesplegar10.classList.remove("expandir");
                flecha10.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar10.classList.add("expandir");
                flecha10.style.backgroundImage = "url(../img/expand-button.png)";
            }

            if(textoParaDesplegar11.classList.contains("expandir"))
            {
                textoParaDesplegar11.classList.remove("expandir");
                flecha11.style.backgroundImage = "url(../img/expand-arrow.png)";
            }
            else 
            {
                textoParaDesplegar11.classList.add("expandir");
                flecha11.style.backgroundImage = "url(../img/expand-button.png)";
            }
        }
    </script>

    <style type="text/css">
        p
        {
            font-size: 18px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
        }

        p.expandir
        {
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
        }

        .flechaExpandir
        {   
            width: 100%;
            height: 20px;
            cursor: pointer;
            background-image: url("../img/expand-button.png");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .imagenCurso
        {
            width: 500px;
            height: 700px;
        }
    </style>

    <!-- CM -->
    <div id="familiaCM" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 8%; margin-bottom: 5%; color: #cb0f22; font-size: 5rem; letter-spacing: 10px;"><?php echo $idioma['comerç'] ?></div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GM'] ?>
        </h2>
    </div>
    
    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-activitats-comercials.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-100 h-100">
            <h2 class="fs-2 mb-5" style="font-family: 'Montserrat';">
                <?php echo $idioma['GMActivitats'] ?>
            </h2>

            <p id="desplegarAC" class="expandir">
                <?php echo $idioma['GMActivitatsP'] ?>

                <br><br><?php echo $idioma['GMActivitatsP2'] ?>

                <br><br><?php echo $idioma['GMActivitatsP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir1"></div>
        </div>
    </div>

    <hr class="bg-danger border-3 border-top m-5 border-danger">

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GS'] ?>
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSMarqueting'] ?>
            </h2>

            <p id="desplegarMP" class="expandir"> 
            <?php echo $idioma['GSMarquetingP'] ?>

                <br><br><?php echo $idioma['GSMarquetingP2'] ?>

                <br><br><?php echo $idioma['GSMarquetingP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir2"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-marqueting-i-publicitat.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-gestio-de-vendes-i-espais-comercials.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>    

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSGestioV'] ?>
            </h2>

            <p id="desplegarGVEC" class="expandir">
            <?php echo $idioma['GSGestioVP'] ?>

                <br><br><?php echo $idioma['GSGestioVP2'] ?>

                <br><br><?php echo $idioma['GSGestioVP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir3"></div>
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSComerç'] ?>
            </h2>

            <p id="desplegarCI" class="expandir">
            <?php echo $idioma['GSComerçP'] ?>

                <br><br><?php echo $idioma['GSComerçP2'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir4"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-comerc-internacional.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-danger border-3 border-top m-5 border-danger">

    <!-- HT -->
    <div id="familiaHT" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="margin-top: 5%; margin-bottom: 3%; color: #4e377c; font-size: 5rem; letter-spacing: 10px;"><?php echo $idioma['hosteleria'] ?></div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GS'] ?>
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-agencies-de-viatges-i-gestio-desdeveniments.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSAgencies'] ?>
            </h2>   

            <p id="desplegarAVGE" class="expandir">
            <?php echo $idioma['GSAgenciesP'] ?>

                <br><br><?php echo $idioma['GSAgenciesP2'] ?>

                <br><br><?php echo $idioma['GSAgenciesP3'] ?>

                <br><br><?php echo $idioma['GSAgenciesP4'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir5"></div>
        </div>
    </div>

    <hr class="bg-primary border-3 border-top m-5 border-primary">

    <!-- IC -->
    <div id="familiaIC" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 5%; margin-bottom: 3%; color: gold; font-size: 5rem; letter-spacing: 10px;"><?php echo $idioma['informàtica'] ?></div>

    <div class="col d-flex justify-content-center align-items-center mb-5" style="margin-bottom: 6%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GM'] ?>
        </h2>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GMSistemes'] ?>
            </h2>

            <p id="desplegarSMIX" class="expandir">
            <?php echo $idioma['GMSistemesP'] ?>

                <br><br><?php echo $idioma['GMSistemesP2'] ?>

                <br><br><?php echo $idioma['GMSistemesP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir6"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-sistemes-microinformatics-i-xarxes.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-warning border-3 border-top m-5 border-warning">

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GS'] ?>
        </h2>
    </div>     
    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-desenvolupament-aplicacions-multiplataforma.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSMulti'] ?>
            </h2>

            <p id="desplegarDAM" class="expandir">
            <?php echo $idioma['GSMultiP'] ?>

                <br><br><?php echo $idioma['GSMultiP2'] ?>

                <br><br><?php echo $idioma['GSMultiP3'] ?>

                <br><br><?php echo $idioma['GSMultiP4'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir7"></div>
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSWeb'] ?>
            </h2>

            <p id="desplegarDAW" class="expandir">
            <?php echo $idioma['GSWebP'] ?>

                <br><br><?php echo $idioma['GSWebP2'] ?>

                <br><br><?php echo $idioma['GSWebP3'] ?>

                <br><br><?php echo $idioma['GSWebP4'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir8"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-desenvolupament-aplicacions-web.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <hr class="bg-warning border-3 border-top m-5 border-warning">

    <!-- AG -->
    <div id="familiaAG" class="container fw-bold d-flex justify-content-center align-items-center position-relative" style="font-family: 'Montserrat'; margin-top: 5%; margin-bottom: 3%; color: green; font-size: 5rem; letter-spacing: 10px;"><?php echo $idioma['gestió'] ?></div>ç

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GM'] ?>
        </h2>
    </div>   

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-mitja-gestio-administrativa.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>

        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GMGestioA'] ?>
            </h2>

            <p id="desplegarGA" class="expandir">
            <?php echo $idioma['GMGestioAP'] ?>

                <br><br><?php echo $idioma['GMGestioAP2'] ?>

                <br><br><?php echo $idioma['GMGestioAP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir9"></div>
        </div>
    </div>

    <hr class="bg-success border-3 border-top m-5 border-success">

    <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 5%;">
        <h2 class="fs-1 fw-bold mt-4" style="font-family: 'Montserrat';">
            <?php echo $idioma['GS'] ?>
        </h2>
    </div> 

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSAdmin'] ?>
            </h2>

            <p id="desplegarAF" class="expandir">
            <?php echo $idioma['GSAdminP'] ?>

                <br><br><?php echo $idioma['GSAdminP2'] ?>

                <br><br><?php echo $idioma['GSAdminP3'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir10"></div>
        </div>

        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-administracio-i-finances.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-center gap-5 position-relative" style="margin-bottom: 6%;">
        <div class="container d-flex justify-content-end" style="width: 100%; height: auto;">
            <img src="../img/imagenesCursos/imagenesCursos/grau-superior-assistencia-a-la-direccio.jpg" class="imagenCurso rounded img-fluid" alt="">
        </div>
        
        <div class="container d-flex justify-content-center flex-column w-75 h-100">
            <h2 class="fs-2 mb-5 fw-bold" style="font-family: 'Montserrat';">
                <?php echo $idioma['GSAssistencia'] ?>
            </h2>

            <p id="desplegarAD" class="expandir">
            <?php echo $idioma['GSAssistenciaP'] ?>

                <br><br><?php echo $idioma['GSAssistenciaP2'] ?>
            </p>

            <div onclick="expand()" class="d-flex justify-content-center align-items-center flechaExpandir flechaExpandir11"></div>
        </div>
    </div>

    <!-----------------FOOTER----------------->  
    <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</body>
</html>

<!-- PARA OCULTAR TEXTO Y VOLVERLO A MOSTRAR -->

<!-- CSS

    .hola{
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

-->

<!-- JAVASCRIPT

    Añadir la classe .hola al elemento HTML.

-->