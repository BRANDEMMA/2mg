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
				<h2>REPRESENTACIONES DE PRODUCTO</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet, ac vulputate ipsum faucibus. Duis ut eleifend neque. Integer molestie augue est. Donec sit amet justo at mi elementum bibendum. Quisque in egestas ipsum. Integer vel bibendum orci. Aliquam cursus, tortor vel ultricies pretium, metus sem congue enim.</p>
				<p class="texto-azul espaciado">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum urna vel enim aliquet, ac vulputate ipsum faucibus. Duis ut eleifend neque.</p>

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