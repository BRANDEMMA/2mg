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
		<div class="detalle-socio">
			<img src="img/ernani-mota.jpg">
			<div class="informacion-socio">
				<h2>Ernani Mota</h2>
				<h4>Civil Engineer</h4>
				<a href="mailto:ernani@2mg.com.pe"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;ernani@2mg.com.pe</a>
				<p>Ernani Mota are graduated in civil engineering and computer science with a specialization in construction management.<br><br>
				With 23 years of professional experience in construction of infrastructure, we have designed and conducted technical specifications of various water projects and sewage , including treatment plants and sewage pumping stations , industrial and human consumption.<br><br>
				In addition, part of the management of engineering works vials , port and human supply centers being responsible for the adoption of technical purchases.</p>
				<h4>Languages:</h4>
				<p>Portuguese, Spanish and English.</p>

			</div>

			<div class="clear"></div>
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