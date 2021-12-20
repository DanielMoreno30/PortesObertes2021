<?php

    session_start();


if (!isset($_SESSION['idioma']))
	$_SESSION['idioma'] = "cat";
else if (isset($_GET['idioma']) && $_SESSION['idioma'] != $_GET['idioma'] && !empty($_GET['idioma']))
{
	if ($_GET['idioma'] == "es")
		$_SESSION['idioma'] = "es";
	else if ($_GET['idioma']  == "en")
        $_SESSION['idioma'] = "en";
    else if ($_GET['idioma']  == "cat")
		$_SESSION['idioma'] = "cat";
}

require_once "idiomas/" . $_SESSION['idioma'] . ".php";


	
?>