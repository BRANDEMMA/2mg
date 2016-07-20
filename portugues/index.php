<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - EXPORTAÇÃO E IMPORTAÇÃO DE PRODUTOS E PROCUREMENT DE INGENIERIA</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="Empresa peruana com mais de 10 anos dedicados à exportação e importação de produtos, soluções em procurement de ingenieria." />

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

			<a href="soluciones-eficiencia-energetica.php"><div class="eficiencia">
				<img src="img/fondo-transparente2.png">
			</div></a>
		</div>

		<div class="nosotros"><a name="nosotros"></a>
			<div class="izquierda-nosotros">
				<img src="img/logo-2mg.gif">
				<h1>2MG - ESPECIALISTA EM PROCUREMENT DE INGENIERIA E EXPORTAÇÃO E IMPORTAÇÃO DE PRODUTOS.</h1>
				<p>We are a Peruvian company whose founding members are Brazilians living in Peru for over 10 years and are dedicated to the import and export activities of products, services and solutions related to the Procurement Engineering branch.</p>
				<a class="boton" href="nosotros.php">Ler Mais</a>

				<div class="clear"></div>
			</div>
			<div class="derecha-nosotros"><img src="img/nosotros-2mg.jpg"></div>

			<div class="clear"></div>

			<h2>Nossos clientes</h2>
			<img class="clientes" src="img/votorantim.jpg">
			<img class="clientes" src="img/ipp.jpg">
			<img class="clientes" src="img/polycoas.jpg">
			<img class="clientes" src="img/trieste.jpg">

			<a class="btn-clientes" href="nuestros-clientes.php">Ver Todos</a>
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