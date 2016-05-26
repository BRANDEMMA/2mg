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
				<h4>Civil Engineer</h4>
				<a href="mailto:marcos@2mg.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;marcos@2mg.com</a>
				<p>Marcos de Moura has 35 years of experience in the development of infrastructure projects in South America, the Caribbean and the Middle East , identifying needs , working throughout the value chain , delivering different populations permanent assets, substantially improving the different qualities of life.<br><br>
				Degree in Civil Engineering with specialization in structures at the Federal University of Minas Gerais, Brazil and Master Business Administration from the University of São Paulo, Brazil.</p>
				<h4>Languages:</h4>
				<p>Portuguese , English, French reading</p>

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