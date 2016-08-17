<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - NANO4SHOES - NANO4LIFE PERÚ</title>
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
				<img src="img/producto-nano4shoes.jpg">
			</div>
			
			<div class="detalle-producto-xado-der">
				<div class="titulo-producto-xado">
					<h1>NANO4SHOES</h1>
				</div>

				<div class="fondo-azul-xado">
					<p>Protección 100% invisible, que hace al calzado ser repelente frente a cualquier tipo de suciedades y manchas causadas por líquidos permitiendo eliminar la mayor parte de la suciedad con un poco de agua. Previene la formación de manchas y el desarrollo bacteriano, además de evitar la decoloración provocada por los rayos ultra-violeta, aumentando la vida útil del calzado. Con un elevado rendimiento, permite ahorrar tiempo y dinero, posibilitando reducir hasta un 90% la utilización de productos de limpieza. Bastará enjuagar con agua para mantener el tejido limpio..</p>
				</div>

				<h2>Tecnología y certificados</h2>
				<?php
					include 'certificados-nano4life.php';
				?>
			</div>
			<div class="clear"></div>


			<h3>Lugares de aplicación: </h3>
			<ul>
				<li><span>Todo tipo de calzado no encerado.</span></li>
				
			</ul>

			<h3>Versiones comercializadas: </h3>
			<ul>
				<li><span>Única.</span></li>
				
			</ul>
			<h3>Envases: </h3>
			<ul>
				<li><span>100 ml</span></li>
				<li><span>200 ml</span></li>
				<li><span>500 ml</span></li>
				<li><span>1000 ml</span></li>
				
			</ul>

			<h3>Documentación: </h3>

			<ul>
				<li><span>	<a href="pdf/shoes-nano4life.pdf" target="_blank">Ficha técnica</a></span></li>
				
				
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