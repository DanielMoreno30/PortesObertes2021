<?php
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

    <div class="container-fluid h-100 d-flex flex-row justify-content-center align-items-center">
        <a href="../frontend/administracioAdmin.php" class="col d-flex flex-row justify-content-end align-items-center" style="height: 50%; color: black;"> 
            <div class="cardAdmin card h-100 bg-dark shadow d-flex justify-content-center align-items-center" 
            style="width: 50%; background-color: #d3d3d3; position: relative; right: 10%; border-radius: 8%; cursor: pointer;">
                <i class="fas fa-user-shield fa-8x position-absolute" style="filter: invert(85%); top: 20%;"></i>
                <h2 class="text-white fw-bold position-absolute" style="bottom: 15%; font-size: 25px;">Administradors</h2>
            </div>
        </a>

        <a href="../frontend/administracioUsuaris.php" class="col d-flex flex-row justify-content-start align-items-center" style="height: 50%; color: black;"> 
            <div class="cardAdmin card h-100 bg-dark shadow d-flex justify-content-center align-items-center" 
            style="width: 50%; background-color: #d3d3d3; position: relative; left: 10%; border-radius: 8%; cursor: pointer;"> 
                <i class="fas fa-users fa-8x position-absolute" style="filter: invert(85%); top: 20%;"></i>
                <h2 class="text-white fw-bold position-absolute" style="bottom: 15%; font-size: 25px;">Usuaris</h2>
            </div>
        </a>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/navbar.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://kit.fontawesome.com/668120ee8a.js" crossorigin="anonymous"></script>
</html>