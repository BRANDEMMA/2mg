<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - EXPORTACIÓN E IMPORTACIÓN DE PRODUCTOS Y PROCUREMENT DE INGENIERÍA</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="Empresa peruana con más de 10 años dedicada a la exportación e importación de productos, soluciones en procurement de ingeniería." />

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

	<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

	<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

	<!--================== 	ENLACE GOOGLE ANALYTICS (INICIA)  =====================-->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-79840828-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!--================== 	ENLACE GOOGLE ANALYTICS (TERMINA)  =====================-->
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

			<a href="productos.php"><div class="eficiencia">
				<img src="img/fondo-transparente2.png">
			</div></a>
		</div>

		<div class="nosotros"><a name="nosotros"></a>
			<div class="izquierda-nosotros">
				<img src="img/logo-2mg.gif">
				<h1>2MG - ESPECIALISTAS EN PROCUREMENT DE INGENIERÍA Y EXPORTACIÓN E IMPORTACIÓN DE PRODUCTOS.</h1>
				<p>Somos una empresa peruana cuyos socios fundadores son brasileños inmigrantes en Perú hace mas de 10 años y nos dedicamos a actividades de importación y exportación de productos, servicios y soluciones en Procurement de Ingeniería.</p>
				<a class="boton" href="nosotros.php">Leer Más</a>

				<div class="clear"></div>
			</div>
			<div class="derecha-nosotros"><img src="img/nosotros-2mg.jpg"></div>

			<div class="clear"></div>

			<!-- <h2>Nuestros Clientes</h2>
			<img class="clientes" src="img/votorantim.jpg">
			<img class="clientes" src="img/ipp.jpg">
			<img class="clientes" src="img/polycoas.jpg">
			<img class="clientes" src="img/trieste.jpg">

			<a class="btn-clientes" href="nuestros-clientes.php">Ver Todos</a>
			<div class="clear"></div> -->

			<h2>Distribuidor Autorizado</h2>
			<img class="img-marcas" src="img/logo-nano-4life.png">
			<img class="img-marcas" src="img/logo-xado.png">
			<img class="img-marcas" src="img/logo-effectus.png">
			<img class="img-marcas" src="img/logo-wodon.png">
			<img class="img-marcas" src="img/logo-itw.png">
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