<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - XADO</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="2MG es una empresa peruana que se dedica a la importación y exportación de productos, servicios y soluciones en Procurement de Ingeniería."/>

	<!--================== 	ENLACE HOJA DE ESTILOS <br>(INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<!--================== 	ENLACE HOJA DE ESTILOS <br>(TERMINA)  =====================-->

	<!--================== 	ENLACE ICONO <br>(INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!--================== 	ENLACE ICONO <br>(TERMINA)  =====================-->

	<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#leer-mas-xado').on('click', function(){
				$('#texto-xado-oculto').slideDown('slow');
				$('#leer-mas-xado').hide();
				$('#leer-menos-xado').show();
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#leer-menos-xado').on('click', function(){
				$('#texto-xado-oculto').slideUp('slow');
				$('#leer-menos-xado').hide();
				$('#leer-mas-xado').show();
			});
		});
	</script>

<!--================== 	SCRIPT PARA LLAMAR A DIV OCULTO (TERMINA)  =====================-->

	<!--================== 	ENLACE GOOGLE ANALYTICS (INICIA)  =====================-->

	<script>
	  <br>(function<br>(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function<br>(){
	  <br>(i[r].q=i[r].q||[]).push<br>(arguments)},i[r].l=1*new Date<br>();a=s.createElement<br>(o),
	  m=s.getElementsByTagName<br>(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore<br>(a,m)
	  })<br>(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga<br>('create', 'UA-79840828-1', 'auto');
	  ga<br>('send', 'pageview');

	</script>

	<!--================== 	ENLACE GOOGLE ANALYTICS <br>(TERMINA)  =====================-->

</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>
	
	<div class="contenedor-xado">
		
		<img class="banner-xado" src="img/banner-xado.jpg">

		<div class="descripcion-xado">
			<p class="texto-todo-xado"><img src="img/marco-xado.jpg">El consorcio químico XADO se especializa en la producción e introducción de tecnologías economizadoras de energía y recursos, producción de aceites, lubricantes y productos químicos para automóviles.<br><br>

			Actualmente Xado es una moderna empresa química que cuenta con sistemas de producción altamente tecnológicos y equipos de avanzada.
			Esto permite no solamente acrecentar los volúmenes de producción de sus propios productos, sino que también dedicarse a la fabricación de productos para terceros, a condiciones contractuales.  Cada partida de productos es sometida a riguroso control ya que la empresa trabaja bajo el sistema de control de calidad ISO 9001_2000.<br><br>

			Forman parte del Consorcio el Centro de investigación científica “XADO-Laboratories” con laboratorios físico-químicos, químico-motológicos, tribológicos, balísticos, metodológicos y un centro de investigación científica excelentemente equipados y certificados.<br><br></p>

			<a class="boton-azul-xado" id="leer-mas-xado">Leer Más</a>
			<div class="clear"></div>

			<p class="texto-todo-xado ocultar" id="texto-xado-oculto">La subdivisión estructural del Consorcio es la compañía VERYLUBE, que produce medios para el cuidado y mantenimiento de automóviles, incluyéndose prestaciones en forma de aerosol. En su producción se utilizan productos de la compañía BASF, líder mundial en la industria química. VERYLUBE es una marca comercial de uso popular, produce productos químicos automovilísticos de altísima calidad a precios bastante asequibles.<br><br>

			La oficina central se encuentra en la ciudad de Kharkov, contando con representaciones generales en Ucrania, Rusia, Bielorrusia, Lituania, Holanda, EE.UU. Se ha creado además una red de representaciones y concesionarios que cubre ahora la mayoría de países del mundo.<br><br>

			Los productos de ХАDО pueden ser adquiridos en más de 30000 puntos certificados de venta. Actualmente se viene realizando un programa para creación de centros oficiales de servicio técnico “ХАDО-Service”, donde se realiza el diagnóstico y tratamiento garantizado con la aplicación de la tecnología Xado.<br><br>

			Los productos ХАDО cuentan con licencia de API — American Petroleum Institute <br>(Instituto americano del petróleo) en sus más altas especificaciones API SL y API SM, lo que demuestra la altísima calidad de los aceites para motor producidos.<br><br>

			El descubrimiento del fenómeno “Revitalización” se convirtió en la esencia y eslabón clave de una nueva tecnología — La tecnología ХАDО. Los productos fabricados en base a esta tecnología poseen propiedades únicas, tanto restauradoras, protectoras como de reparación, lo que permite economizar en portadores de energía y recursos, proteger el medio ambiente creando un nueva calidad de vida.<br><br>

			La eficacia de los revitalizantes se ha confirmado mediante pruebas de certificación en 35 países del mundo. Este invento está protegido por patentes registradas en Australia, Alemania, China, Rusia, EE.UU., Ucrania, Sudáfrica y otros países.<br><br>

			Hoy en día, el consorcio químico XADO ofrece más de 150 denominaciones de productos que pueden ser adquiridos en cualquier país del mundo. La singularidad y alta calidad de nuestros productos son confirmadas por la gran cantidad de premios, diplomas y condecoraciones recibidas en concursos y exposiciones internacionales.<br><br>

			Pero, sin lugar a dudas, el mejor premio que podemos tener es el reconocimiento de los usuarios, quienes han hecho su elección en favor de los productos del Consorcio químico Xado.</p>

			<a class="boton-azul-xado ocultar" id="leer-menos-xado">Leer Menos</a>
			<div class="clear"></div>

		</div>
		<div class="clear"></div>

			<h1 class="titulo-xado">Productos XADO</h1>

			<div class="subtitulo-xado">
				<h2>Productos &nbsp; <i class="fa fa-sort-desc" aria-hidden="true"></i></h2>
				<p>Innovative Nanotechnology by XADO</p>
			</div>

			<div class="contenedor-productos-xado espacio-inferior-xado">

				<div class="producto-xado">
					<img src="img/productos-xado/xado_amc-maximum-for-diesel-truck_950ml.jpg">
					<h3><a href="xado-maximum-for-diesel-truck.php">XADO® Atomic metal conditioner 1 Stage Maximum for Diesel Truck <br>(box, bottle 950 ml)</a></h3>
					
					<a class="mas-info-producto-xado" href="xado-maximum-for-diesel-truck.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_amc-maximum_250ml.jpg">
					<h3><a href="xado-1stage-maximum.php">XADO® Atomic metal conditioner 1 Stage Maximum <br>(box, bottle 225  ml)</a></h3>
					<a class="mas-info-producto-xado" href="xado-1stage-maximum.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_amc-highway-disel-truck.jpg">
					<h3><a href="xado-highway-for-diesel-truck.php">XADO® Atomic metal conditioner Highway for Diesel Truck <br>(box, bottle 950 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xado-highway-for-diesel-truck.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_amc-highway_225ml.jpg">
					<h3><a href="xado-highway.php">XADO® Atomic metal conditioner Highway <br>(box, bottle 225 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xado-highway.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_1stage_magnum_box-maximum.jpg">
					<h3><a href="revitalizante-1stage-magnum.php">ХАDО® 1 STAGE engine revitalizant MAGNUM diesel truck <br>(blister package, tube 90 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="revitalizante-1stage-magnum.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_1stage_27ml.jpg">
					<h3><a href="xado-1stage.php">ХАDО® 1 STAGE engine revitalizant <br>(blister package, tube 27 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xado-1stage.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_ex120-dlia_vseh_tipov_toplivnoy_apparatury_8ml.jpg">
					<h3><a href="xado-revitalizante-ex120-para-todos-los-tipos-de-sistemas-de-combustible-y-sistemas-de-inyeccion.php">ХАDО® REVITALIZANT EX120  for all types of fuel equipment <br>(blister package, syringe 8 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xado-revitalizante-ex120-para-todos-los-tipos-de-sistemas-de-combustible-y-sistemas-de-inyeccion.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_ex120-dlia_akpp_8ml.jpg">
					<h3><a href="xado-revitalizante-ex120-para-las-cajas-de-cambio-automaticas.php">ХАDО® REVITALIZANT EX120 for automatic transmission <br>(blister package, syringe 8 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xado-revitalizante-ex120-para-las-cajas-de-cambio-automaticas.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_ex120-dlia_kpp_i_reduktorov_8ml.jpg">
					<h3><a href="xado-revitalizante-ex120-para-cajas-de-cambio-y-reductores.php">XADO® REVITALIZANT EX120  for gear boxes, transfer cases and differentials <br>(blister package, syringe 8 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="xado-revitalizante-ex120-para-cajas-de-cambio-y-reductores.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_injector_box-maximum-tr.jpg">
					<h3><a href="acondicionador-atomico-de-metal-maximum-para-transmisiones-mecanicas-de-camiones-diesel.php">XADO® Atomic metal conditioner 1 Stage Maximum Transmission for Diesel Truck <br>(syringe 50 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="acondicionador-atomico-de-metal-maximum-para-transmisiones-mecanicas-de-camiones-diesel.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/amc-maximum-disel-truck-transmission-automat.jpg">
					<h3><a href="acondicionador-atomico-de-metal-maximum-para-transmisiones-automaticas-de-camiones-diesel-jeringa.php">XADO® Atomic metal conditioner 1 Stage Maximum Automatic Transmission for Diesel Truck <br>(syringe 50 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="acondicionador-atomico-de-metal-maximum-para-transmisiones-automaticas-de-camiones-diesel-jeringa.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/amc-maximum-disel-truck-fuel_new.jpg">
					<h3><a href="acondicionador-atomico-de-metal-maximum-para-equipos-de-combustible-de-camiones-diesel.php">XADO® Atomic metal conditioner with 1 Stage Revitalizant Maximum for Diesel Truck for all types of fuel equipment <br>(syringe 30 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="acondicionador-atomico-de-metal-maximum-para-equipos-de-combustible-de-camiones-diesel.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/antirain-aerosol-can-320ml.jpg">
					<h3><a href="pdf/antirain.pdf" target="_blank">Antirain <br>(aerosol can 320 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/antirain.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/antifog-aerosol-can-320ml.jpg">
					<h3><a href="pdf/antifog.pdf" target="_blank">Antifog <br>(aerosol can 320 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/antifog.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado_gel-revitalizant-dlia-benzinovogo-dvigagatelia_9ml.jpg">
					<h3><a href="gel-renovador-para-los-motores-de-gasolina.php">ХАDО® Gel-REVITALIZANT for cylinders <br>(blister package, tube 9 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="gel-renovador-para-los-motores-de-gasolina.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/atomex-energy-drive-power-amplifier-for-gasoline-engine-aluminum-bottle-250ml.jpg">
					<h3><a href="pdf/atomex-energy-drive-gasoline.pdf" target="_blank">Atomex Energy Drive. Power amplifier for gasoline engine <br>(aluminum bottle 250 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="pdf/atomex-energy-drive-gasoline.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/atomex-energy-drive-power-amplifier-for-diesel-engine-aluminum-bottle-250ml.jpg">
					<h3><a href="pdf/atomex-energy-drive-diesel.pdf" target="_blank">Atomex Energy Drive. Power amplifier for diesel engine <br>(aluminum bottle 250 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="pdf/atomex-energy-drive-diesel.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-protective-grease-tube-125ml.jpg">
					<h3><a href="pdf/greases-repairing-restoring-protective.pdf" target="_blank">ХАDО® protective grease <br>(tube 125 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/greases-repairing-restoring-protective.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-restoring-grease-tube-125ml.jpg">
					<h3><a href="pdf/greases-repairing-restoring-protective.pdf" target="_blank">ХАDО® restoring grease <br>(tube 125 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/greases-repairing-restoring-protective.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-repairing-grease-tube-125ml.jpg">
					<h3><a href="pdf/greases-repairing-restoring-protective.pdf" target="_blank"> ХАDО® repairing grease <br>(tube 125 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/greases-repairing-restoring-protective.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/amc-maximum-disel-truck-transmission_new.jpg">
					<h3><a href="acondicionador-atomico-de-metal-maximum-para-transmisiones-mecanicas-de-camiones-diesel.php">XADO® Atomic metal conditioner 1 Stage Maximum Transmission for Diesel Truck <br>(syringe 50 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="acondicionador-atomico-de-metal-maximum-para-transmisiones-mecanicas-de-camiones-diesel.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-gel-revitalizant-snipex-for-shooting-sports-equipment-blister-package-tube-27ml.jpg">
					<h3><a href="pdf/revitalizant-snipex.pdf" target="_blank"> ХАDО® gel-REVITALIZANT SnipeX, for shooting sports equipment <br>(blister package, tube 27  ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/revitalizant-snipex.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/atomex-totalflush-oil-system-cleaner-aluminum-bottle-250ml.jpg">
					<h3><a href="pdf/atomex-total-flush.pdf" target="_blank">Atomex TotalFlush. Oil system cleaner <br>(aluminum bottle 250 ml)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="pdf/atomex-total-flush.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/atomex-multi-cleaner-high-performance-fuel-system-cleaner-for-gasoline-and-lpg-engine-aluminum-bottle-250ml.jpg">
					<h3><a href="pdf/atomex-multi-cleaner-gasoline.pdf" target="_blank">Atomex Multi Cleaner. High performance fuel system cleaner for gasoline and LPG engine <br>(aluminum bottle 250 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="pdf/atomex-multi-cleaner-gasoline.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/atomex-multi-cleaner-high-performance-fuel-system-cleaner-for-diesel-engine-aluminum-bottle-250ml.jpg">
					<h3><a href="pdf/atomex-multi-cleaner-diesel.pdf" target="_blank">Atomex Multi Cleaner. High performance fuel system cleaner for diesel engine <br>(aluminum bottle 250 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="pdf/atomex-multi-cleaner-diesel.pdf" target="_blank"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-xteme-cleaner.jpg">
					<h3><a href="xtreme-complex-fuel-system-cleane.php">Complex fuel system cleaner "Xtreme Cleaner for Diesel Truck" for up to 500 L of fuel <br>(can 500 ml)</a></h3>
					

					<a class="mas-info-producto-xado" href="xtreme-complex-fuel-system-cleane.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>

				<div class="producto-xado">
					<img src="img/productos-xado/xado-xtreme-flush.jpg">
					<h3><a href="xtreme-flush.php">Oil System Cleaner «Xtreme Flush  for Diesel Truck» <br>(can 0,5 l)</a><br><br></h3>
					

					<a class="mas-info-producto-xado" href="xtreme-flush.php"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;MÁS INFO</a>
				</div>


			</div>

		<?php
			include 'contacto.php';
		?>

		</div>
		
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>