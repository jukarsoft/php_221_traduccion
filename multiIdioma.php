<?php 
	//array de idiomas permitidos
	$idiomasPermitidos=['es','ca'];
	//obtener la página dónde nos encontramos
	$pagina = $_SERVER['PHP_SELF'];
	//idioma por defecto
	$idioma ='es';
	//captura del server del idioma
	$idiomaNavegador=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
	//validar que el idioma del validador este contemplado
				//print_r($_SERVER);
	if (in_array($idiomaNavegador, $idiomasPermitidos)) {
			$idioma = $idiomaNavegador;		
	}		
	//recuperar el idioma seleccionado por el usuario
	if (isset($_GET['idioma'])) {
		//verficar si el idioma existe como idioma permitido
		if (in_array($_GET['idioma'], $idiomasPermitidos)) {
			$idioma = $_GET['idioma'];			
			setcookie('idioma',$idioma, time()+3600*24*365);
		}
	} else {
		//comprobar si existe cookie de idioma
		if (isset($_COOKIE['idioma'])) {
			$idioma = $_COOKIE['idioma'];
		}
	}
	//incorporar fichero externo con las variables en castellano o catalán 
	//$idioma es la extension que indica el fichero a cargar
	include("contenido_$idioma.php");
 ?>
