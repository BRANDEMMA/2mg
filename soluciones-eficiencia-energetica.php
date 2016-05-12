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

</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>
	
	<div class="contenido linea-energetica">
		<div class="izquierda-energetica">
			<img src="img/solucion-energetica-2mg.jpg">
		</div>
		<div class="derecha-energetica">
			<div class="derecha-energetica-centrado">
				<h2 class="tit-part1">Soluciones de</h2>
				<h2 class="tit-part2">Eficiencia <span>Energética</span></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet, ac vulputate ipsum faucibus. Duis ut eleifend neque. Integer molestie augue est. Donec sit amet justo at mi elementum bibendum. Quisque in egestas ipsum. Integer vel bibendum orci. Aliquam cursus, tortor vel ultricies pretium, metus sem congue enim.</p>
				<p class="texto-azul espaciado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet, ac vulputate ipsum faucibus. Duis ut eleifend neque.</p>

				<div class="contenedor-caracteristicas">
					<div class="caracteristicas foco">
						<img src="img/foco.png"> 
						<img src="img/corchete.png"> 
						<p>Ahorro en Energia Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>

					<div class="caracteristicas rayo">
						<img src="img/rayo.png"> 
						<img src="img/corchete.png"> 
						<p>Energia Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>

					<div class="caracteristicas esquema">
						<img src="img/esquema.png"> 
						<img src="img/corchete.png"> 
						<p>Mejores coneciones lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>

					<div class="caracteristicas precaucion">
						<img src="img/precaucion.png"> 
						<img src="img/corchete.png"> 
						<p>Menor Riesgo Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>

				<div class="escribenos">
					<a href="">Escríbenos <img src="img/flecha-derecha-blanca.png"></a>
				</div>

				<p class="texto-azul espaciado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet.</p>

				<p class="texto-azul">Lorem ipsum dolor <span>sit amet</span>.</p>
			</div>
		</div>

		<div class="clear"></div>

		<?php
			include 'contacto.php';
		?>
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>