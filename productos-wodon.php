<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - WODON</title>
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
		
		<img class="banner-xado" src="img/banner-wodon.jpg">

		<div class="descripcion-xado">
			<div class="texto-xado-izq">
				<img src="img/logos/logo-wodon-big.jpg">
			</div>
			
			<div class="texto-xado-der">
				<p>Tianjin Wodon Wear Resistant Material Co., Ltd (CHINA WODON). located in the northern international shipping center TIANJlN, which specialized in research, development, production and sales wear-resistant material, and have many years experience in this field. Now the company owns over 100 employees, has anual  output 60,000 square meters of wear plate and 8,000 metric tons of welding consumables.</p>
				
				<a class="boton-azul-xado" href="pdf/catalogo-wodon.pdf" >Dossier</a>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>

			<h1 class="titulo-xado2">Productos WODON</h1>

			<div class="subtitulo-xado">
				<h2>Productos &nbsp; <i class="fa fa-sort-desc" aria-hidden="true"></i></h2>
				<p>Descubra lo que pueden hacer los productos Nano4Life® en su día a día.	</p>
			</div>

			<div class="contenedor-productos-xado">

				<div class="producto-xado">
					<img src="img/planchas-bimetalicas-antidesgastes.jpg">
					<h3><a href="planchas-bimetalicas.php">Planchas Bimetalicas antidesgastes</a></h3>
					<p class="descripcion-producto-xado">Para usar en aplicaciones industriales...</p>
					

					<a class="mas-info-producto-xado" href="planchas-bimetalicas.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/alambre-de-soldadura-para-placas-bimetalicas.jpg">
					<h3><a href="alambre-de-soldadura.php">Alambre de Soldadura para Placas Bimetálicas</a></h3>
					<p class="descripcion-producto-xado">Para revestir los rodillos de molinos verticales de cemento y otras aplicaciones....</p>
					

					<a class="mas-info-producto-xado" href="alambre-de-soldadura.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
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