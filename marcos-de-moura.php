<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->
	<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--================== 	ENLACE ICONO (TERMINA)  =====================-->


</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>
	
	<div class="contenido linea-energetica">
		<div class="detalle-socio">
			<img src="img/marcos-de-moura.jpg">
			<div class="informacion-socio">
				<h2>Marcos de Moura</h2>
				<h4>Ingeniero Civil</h4>
				<a href="mailto:marcos@2mg.com.pe"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;marcos@2mg.com.pe</a>
				<p>Marcos de Moura tiene experiencia de 35 anos en desarrollo de proyectos de infra-Estructura en  América del Sur, Caribe y Oriente Medio, identificando las necesidades , actuando en toda la cadena de valores, entregando a las diferentes poblaciones los bienes permanentes y mejorando sustancialmente sus diferentes calidades de vida. <br><br>
				Graduado en Ingeniería Civil con especialización en Estructuras por la Universidad Federal de Minas Gerais, Brasil y Master en Business Administration por la Universidad de São Paulo, Brasil</p>
				<h4>Idiomas:</h4>
				<p>Portugués, Español, Ingles, lectura Francés.</p>

			</div>

			<div class="clear"></div>
		</div>
		<?php
			include 'contacto.php';
		?>
	</div>

		<div class="clear"></div>
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>