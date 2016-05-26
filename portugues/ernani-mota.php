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
				<h4>Engenheiro Civil</h4>
				<a href="mailto:ernani@2mg.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;ernani@2mg.com</a>
				<p>Ernani Mota ‘e formado em engenharia civil e ciência da computação com especialização em gerenciamento de construção civil.<br><br>
				Com 23 anos de atuação profissional em obras de infraestruturas, já projetou e realizou especificações técnicas de diversos projetos de agua e esgoto, incluindo plantas de tratamento e estacoes de bombeamento de esgoto, industrial e para o consumo humano. <br><br>
				Além disto, participou da gerencia de engenharia de obras viais, portuárias e de centros de abastecimento humano sendo responsável pela aprovação de compras técnicas. </p>
				<h4>Idiomas:</h4>
				<p>Portugués, Espanhol e Inglés.</p>

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