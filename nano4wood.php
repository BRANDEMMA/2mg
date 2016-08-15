<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - NANO4WOOD - NANO4LIFE PERÚ</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="2MG es una empresa peruana que se dedica a la importación y exportación de productos, servicios y soluciones en Procurement de Ingeniería."/>

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
		
		<div class="descripcion-xado">
			<div class="detalle-producto-xado-izq">
				<img src="img/producto-nano4wood.jpg">
			</div>
			
			<div class="detalle-producto-xado-der">
				<div class="titulo-producto-xado">
					<h1>NANO4WOOD - NANO4LIFE PERÚ</h1>
				</div>

				<div class="fondo-azul-xado">
					<p>Protección 100% invisible, no impide a la madera respirar, repele eficazmente los líquidos evitando su penetración. Evita a descoloración de la radiación ultra-violeta, confiere protección contra el hielo y previene la formación de algas, hongos y mohos en la superfície de la madera. No se ve afectado por la acción de agentes climáticos.</p>
				</div>

				<h2>Tecnología y certificados</h2>
				<?php
					include 'certificados-nano4life.php';
				?>
			</div>
			<div class="clear"></div>



			<h3>Lugares de aplicación: </h3>
			<ul>
				<li><span>Maderas exteriores e interiores.</span></li>
				
			</ul>

			<h3>Versiones comercializadas: </h3>
			<ul>
				<li><span>Única.</span></li>
				
			</ul>
			<h3>Envases: </h3>
			<ul>
				<li><span>100 ml</span></li>
				<li><span>200 ml</span></li>
				<li><span>300 ml</span></li>
				<li><span>1000 ml</span></li>
				
			</ul>

		
<h3>Documentación: </h3>

			<ul>
				<li><span>	<a href="pdf/wood-nano4life.pdf" target="_blank">Ficha técnica</a></span></li>
				
				
			</ul>
			
			

			

		
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