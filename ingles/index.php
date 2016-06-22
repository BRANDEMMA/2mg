<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - EXPORT AND IMPORT OF PRODUCTS AND PROCUREMENT OF ENGINEERING</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="Peruvian company with more than 10 years dedicated to the export and import of products, engineering procurement solutions." />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

	<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

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

	<div class="contenido">
		<div class="presentacion-servicios">
			<a href="representaciones-comerciales.php"><div class="representaciones">
				<img src="img/fondo-transparente.png">
			</div></a>

			<a href="productos.php"><div class="procurement">
				<img src="img/fondo-transparente.png">
			</div></a>

			<div class="clear"></div>	

			<a href="soluciones-eficiencia-energetica.php"><div class="eficiencia">
				<img src="img/fondo-transparente2.png">
			</div></a>
		</div>

		<div class="nosotros"><a name="nosotros"></a>
			<div class="izquierda-nosotros">
				<img src="img/logo-2mg.gif">
				<h1>2MG - PROCUREMENT SPECIALIST ENGINEERING AND EXPORT AND IMPORT OF PRODUCTS.</h1>
				<p>We are a Peruvian company whose founding members are Brazilians living in Peru for over 10 years and are dedicated to the import and export activities of products, services and solutions related to the Procurement Engineering branch.</p>
				<a class="boton" href="nosotros.php">Read More</a>

				<div class="clear"></div>
			</div>
			<div class="derecha-nosotros"><img src="img/nosotros-2mg.jpg"></div>

			<div class="clear"></div>

			<h2>Our Clients</h2>
			<img class="clientes" src="img/votorantim.jpg">
			<img class="clientes" src="img/ipp.jpg">
			<img class="clientes" src="img/polycoas.jpg">
			<img class="clientes" src="img/trieste.jpg">

			<a class="btn-clientes" href="nuestros-clientes.php">See All</a>
			<div class="clear"></div>
		</div>

		<?php
			include 'contacto.php';
		?>	
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>