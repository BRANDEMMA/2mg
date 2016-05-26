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
			<img src="img/marcos-de-moura.jpg">
			<div class="informacion-socio">
				<h2>Marcos de Moura</h2>
				<h4>Engenheiro Civil</h4>
				<a href="mailto:marcos@2mg.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;marcos@2mg.com</a>
				<p>Marcos de Moura possui experiência de 35 anos no desenvolvimento de projetos de infraestrutura na América do Sul, Caribe e Oriente Médio, identificando as necessidades, atuando em toda cadeia de valores, entregando as diferentes populações os bens permanentes, melhorando substancialmente as diferentes qualidades de vida.<br><br>
				Graduado em Engenharia Civil com especialização em Estruturas pela Universidade Federal de Minas Gerais, Brasil e Master Business Administration pela Universidade de São Paulo, Brasil.</p>
				<h4>Idiomas:</h4>
				<p>Português, Espanhol, Inglês, leitura Francês.</p>

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