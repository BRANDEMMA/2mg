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

	<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->
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
				<p>Somos una empresa peruana cuyos socios fundadores son brasileños inmigrantes en Perú hace mas de 10 años y nos dedicamos a actividades de importación y exportación de productos, servicios y soluciones en Procurement de Ingenieria.</p>
				<a class="boton" href="nosotros.php">Leer Más</a>

				<div class="clear"></div>
			</div>
			<div class="derecha-nosotros"><img src="img/nosotros-2mg.jpg"></div>

			<div class="clear"></div>

			<h2>Nuestros Clientes</h2>
			<img class="clientes" src="img/votorantim.jpg">
			<img class="clientes" src="img/ipp.jpg">
			<img class="clientes" src="img/trieste.jpg">
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