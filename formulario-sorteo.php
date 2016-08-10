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
				<h1>2MG - ESPECIALISTAS EN PROCUREMENT DE INGENIERÍA Y EXPORTACIÓN E IMPORTACIÓN DE PRODUCTOS - GRAN SORTEO</h1>
				<p class="texto-gris espaciado">Tenemos la gran alegría de invitarte a participar en el gran sorteo de 2MG en el marco de la XXII Convención Mundial de Exportación e Importación de Productos.<br><br>
				Tenemos grandes premios para ti como un casa totalmente amoblada en la luna y muchos premios más, solo regístrate y participas automaticamente.</p>

				<div class="fondo-formulario">
					<h2>Participa en nuestro sorteo</h2>
					
					<div class="contenido-form-sorteo">

						<form class="form-main formulario-sorteo" name="ajax-form" id="ajax-form" method="POST" action="php/registrar.php">

							<div class="campos-formulario">
								<label>Nombre:</label><br>
								<input name="nombre" id="nombre" type="text" required>
							</div>

							<div class="campos-formulario">
								<label>DNI:</label><br>
								<input name="dni" id="dni" type="tel" required>
							</div>

							<div class="campos-formulario">
								<label>Email:</label><br>
								<input name="email" id="email" type="email" required>
						    </div>

							<div class="campos-formulario">
								<label>Teléfono:</label><br>
								<input name="telefono" id="telefono" type="tel" required>
							</div>

							<div class="campos-formulario">
								<label>Empresa:</label><br>
								<input name="empresa" id="empresa" type="text" required>
							</div>
							
							<button type="submit" id="send" class="btn btn-primary boton-registrarse">Participa ahora</button>

							<div class="clear"></div>
						</form>

						<div class="img-premio">
							<img src="img/imagen-sorteo.jpg">
						</div>

						<div class="clear"></div>
					</div>

					<img class="img-bottom-sorteo" src="img/imagen-bottom-sorteo.jpg">

				</div>
			<!-- <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions-sorteo.js"></script> -->
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