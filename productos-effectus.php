<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - EFFECTUS</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="NANO4LIFE® PERÚ es la marca lider mundial en revestimientos de Nanotecnología que fueron específicamente desarrollados para sustituir a los convencionales para diferentes aplicaciones."/>

	<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

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
	
	<div class="contenedor-xado">
		
		<img class="banner-xado" src="img/banner-effectus.jpg">

		<div class="descripcion-xado">
			<div class="texto-xado-izq">
				<img src="img/marco-nano4life.jpg">
			</div>
			
			<div class="texto-xado-der">
				<p>Effectus Indústria e Comércio Ltda., fundada em agosto/1993 , constantemente vem procurando renovar sua linha de produtos para tratamento e recuperação de concretos em geral . Com 100% de capital brasileiro, destina todo o seu trabalho na busca de novas tecnologias em produtos e sistemas para tratamento de concreto.</p>
			</div>
			<div class="clear"></div>

			<h1 class="titulo-xado2">Productos EFFECTUS</h1>

			<div class="subtitulo-xado">
				<h2>Productos &nbsp; <i class="fa fa-sort-desc" aria-hidden="true"></i></h2>
				<p>Los productos de más alta calidad para las necesidades más exigentes.</p>
			</div>

			<div class="contenedor-productos-xado">

				<div class="producto-xado">
					<img src="img/bolsoadtitanium.jpg">
					<h3><a href="nano4bathcare.php">AD TITANIUM</a></h3>
					<p class="descripcion-producto-xado">Reduce el consumo de água en la mezcla. Disminuye la retracción y aumenta la compacidad, Reduce la...</p>
					

					<a class="mas-info-producto-xado" href="ad-titanium.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

			</div>

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