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
	
	<div class="contenido linea-energetica">
		<div class="contenedor-clientes">
			<h2>Nossos Clientes</h2>
			<img src="img/votorantim.jpg">
			<img src="img/ipp.jpg">
			<img src="img/trieste.jpg">
			<img src="img/htw.jpg">
			<img src="img/polycoas.jpg">
			<img src="img/qits.jpg">
			<img src="img/ingelsa.jpg">
			<img src="img/hf.jpg">
		</div>

		<?php
			include 'contacto.php';
		?>
	</div>

		<div class="clear"></div>		
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>