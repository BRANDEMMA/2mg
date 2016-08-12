<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - SOMOS EXPORTADORES E IMPORTADORES DE PRODUCTOS, DAMOS SERVICIO Y SOLUCION EN PROCUREMENT DE INGENIERÍA.</title>
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
	
	<div class="contenido linea-energetica">
		
		<div class="derecha-nosotros2">
			<div class="derecha-nosotros-centrado">
				<!-- <h1>2MG - ESPECIALISTAS EN PROCUREMENT DE INGENIERÍA Y EXPORTACIÓN E IMPORTACIÓN DE PRODUCTOS - GRAN SORTEO</h1>
				<p class="texto-gris espaciado">Tenemos la gran alegría de invitarte a participar en el gran sorteo de 2MG en el marco de la XXII Convención Mundial de Exportación e Importación de Productos.<br><br>
				Tenemos grandes premios para ti como un casa totalmente amoblada en la luna y muchos premios más, solo regístrate y participas automaticamente.</p> -->

				<div class="registro-ok">
					<h2>Gracias por 
					<span>Participar</span></h2>

					<p>
						Gracias por participar en nuestro sorteo. Tienes el doble de posibilidades de ganar con el siguiente código:
					</p>

					<?php 
						include 'php/conexion-db.php';
						$rs = mysql_query("SELECT MAX(id) AS id FROM participantes");
						if ($row = mysql_fetch_row($rs)) {
						$id = trim($row[0]);
						}
					?>

					<div class="registro-ok-izq">
						<img src="img/logo-2mg-blanco.png">

						<p>2MG-XADO-<?php echo $id?></p>
					</div>
					<!-- <div class="registro-ok-der">
						<img src="img/codigo-sorteo.jpg">
					</div>
					<div class="clear"></div> -->
				</div>
			</div>
			

		</div>

		<div class="clear"></div>

		<!-- <?php
			include 'contacto.php';
		?> -->
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>