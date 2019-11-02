<?php 
	//incorporar fichero externo de multiidioma
	require('multiIdioma.php');
	$fichero="php_221_LOdatos_1_$idioma.txt";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
	<script src="js/form.js" type="text/javascript"></script>
</head>
<body>
	<?php include('header.html');?>
	<div class="wraper">
		<?php include('nav.html');?>
		<div class="content">
			<div class="slider" >
				<img src="img/iem_3.jpg" /><img src="img/iem_4.jpg" />
		    </div>

		    <div class="sections">
		    	<h1 style="text-align:center"><?=$contactoCab;?></h1><br><br>
		    	<div class="contacto">
					<h2><?=$formContacto;?></h2>
					<p><?=$formL1;?></p><br>
					<form id="form" name="form" method="get" action='#'>
						<label for="nombre"><?=$labelNombre;?></label><input type="text" name="nombre" autofocus id="nombre" /><br><br>
						<label for="email"><?=$labelEmail;?></label><input type="email" name="email" id="email" placeholder="nom@mail.com" /><br><br>
						<label for="telefono"><?=$labelTelf;?></label><input type="tel" name="telefono" id="telefono"><br><br>
						<label><?=$labelMensaje;?></label><br><br>
						<textarea id="mensaje" name="mensaje" placeholder="<?=$textarea;?>" ></textarea><br><br>
						<span><?=$privacidad;?></span><br><br>
						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()"><?=$formVeraqui;?></span><br><br>
						<input id="enviar" type="button" name="enviar" value="Enviar" onclick="validaFormulario()"/><br>
					</form>
					
					<div id="alerta">
						<span id="alertatext"><?=readfile($fichero);?><br><br>
						<input type="button" onclick="ocultaAlert()"/>
					</div>
				</div>
		    </div>
		    <br><br>
		</div>
		<?php include('footer.html');?>
	</div>
</body>
</html> 
