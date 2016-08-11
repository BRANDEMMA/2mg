<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - LÍDERES EN PROCUREMENT EN INGENIERÍA</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="Somos líderes en Procurement en ingeniería, proveemos aseria y ofrecemos a nuestros clientes agilidad en los procesos internos de compras. En 2MG desarrollamos el planeamiento logístico y de consumo para lograr las mejores adquisiciones que respondan a las necesidades específicas de cada uno de nuestros clientes." />

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

	<div class="contenido espacio-inferior-producto">
		<div class="formulario-requerimientos">
			<div class="titulo-formulario"><h2>Envianos tus requerimientos</h2></div>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto3.php">
				
				<div class="centrado verde" id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>				
				<label>Nombre</label><br>
				<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-nombre">*Por favor introduce tu nombre*</div><br>

				<label>Empresa</label><br>
				<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-empresa">*Por favor introduce el nombre de tu empresa*</div><br>
								
				<label>Email</label><br>
				<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-email">*Por favor introduce tu e-mail*</div>
				<div class="error centrado" id="err-emailvld">*El formato de E-mail no es valido*</div><br>
			    				
				<label>Teléfono</label><br>
				<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-telefono">*Por favor introduce tu número teléfonico*</div><br>			
				
				<label>Mensaje</label><br>
				<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
				<div class="clear"></div>
				<div class="error centrado" id="err-mensaje">*Por favor escribe un mensaje*</div><br>
				<div class="error centrado" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
				<div class="error centrado" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
				<div class="error centrado" id="err-state"></div><br>
				<button class="boton-naranja" id="send" class="btn btn-primary boton-enviar">Enviar</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>

		<div class="texto-detalle">
			<h1>Procurement en <strong>Ingeniería</strong></h1><img src="img/ingeniero.jpg">
			<p>Proveemos asesoría en Procurement, ofreciendo a nuestros clientes agilidad en los procesos internos de compras, garantizando las mejores practicas para la administración de la cadena de suministros (Supply Chain Management) esenciales para que estos dediquen su tiempo al core business de las empresas, respectando las políticas de selección de proveedores implementados por estos (Compliance).<br><br>
			El abastecimiento o aprovisionamiento (Procurement) es la función logística mediante la cual se provee a una empresa de todo el material necesario para su funcionamiento. Su concepto es sinónimo de provisión o suministro.<br><br>
			Las actividades incluidas dentro de este proceso son:<br><br>
			Cálculo de necesidades : Planeamiento Logístico y de Consumo<br><br>
			Compra o Adquisición: Realiza las adquisiciones (obtención, almacenamiento, control stock y utilización de desperdicios)<br><br>
			El abastecimiento (Procurement) es una de las funciones comunes básicas de cualquier organización, puesto que cada una de ellas depende - si bien en mayor o menor grado - de los materiales y suministros de otras empresas. Ninguna organización es autosuficiente.<br><br>
			Está claro que el área de Procurement de cualquier empresa juega un rol importante, y que, sobre todo, influye de manera relevante en los costos de la misma y por consiguiente en los precios también, lo cual, a su vez, repercute en la capacidad de mantenerse en el mercado y competir. El éxito de una empresa, creada para ofrecer productos en el mercado, depende en gran medida de que pueda lograr una combinación razonable de la cantidad, la calidad, la oportunidad y el costo de los bienes o servicios que produce, lo que estimula que nuestra empresa ofrezca  estos servicios en el mercado Peruano.</p>
			
		</div>

		<div class="clear"></div>

		<!-- <div class="contenedor-productos"><a name="productos"></a>
			<h2>Productos</h2>

			<div class="productos-centrados">
				<div class="producto espaciado-producto">
					<img src="img/spray-anti-fog.jpg">
					<h3><strong> ARENA ANTIFOG – LIQUIDO ANTIEMPAÑANTE</strong></h3>
					<p><strong>
						Fabricante:
					</strong>
						Arenas
						<br>
					<strong>
						País Procedencia:
					</strong>EEUU
					<br>
					</p>
					<p><strong>Para que sirve:</strong> Desempañar gafas de buceó, actividades de natación, lentes de seguridad de actividades industriales (minería).</p>
					
					<a href="arena-antifog.php"><div class="boton-mas-info">+ MÁS INFO.</div></a>
				</div>

				<div class="producto">
					<img class="img-producto" src="img/bolsoadtitanium.jpg">
					<h3><strong> AD Titanium – Aditivo en Polvo para Concreto</strong></h3>
					<p><strong>
						Fabricante:
					</strong>
						Effectus Industria y Comercio Ltda
						<br>
					<strong>
						Embalaje:
					</strong>Bolsas de 25, 50 Kg o Big Bag
					<br>
					</p>
					<p><strong>Para que sirve:</strong> Reduce el consumo de água en la mezcla. Disminuye la retracción y aumenta la compacidad, Reduce la permeabilidad - Aumenta la resistencia y modulo - Reduz Teor de Cemento -Reduz la reacción Álcali – Agregado – aumenta la durabilidade de la Estrutura – Gano de altas Resistencias Iniciales –Reduccion del custo general de la Obra.
</p>
					<a href="ad-titanium.php"><div class="boton-mas-info">+ MÁS INFO.</div></a>
				</div>

				<div class="producto espaciado-producto espaciado-top">
					<img src="img/planchas-bimetalicas-antidesgastes.jpg">
					<h3><strong>Planchas Bimetalicas antidesgastes</strong></h3>
					<p><strong>
						Fabricante:
					</strong>
						Wodon
						<br>
					<strong>
						País Procedencia:
					</strong>China
					<br>
					</p>
					<p><strong>Para que sirve:</strong> Aplicación Industrial.</p>
					
					<a href="planchas-bimetalicas.php"><div class="boton-mas-info">+ MÁS INFO.</div></a>
				</div>

				<div class="producto espaciado-top">
					<img class="img-producto" src="img/alambre-de-soldadura-para-placas-bimetalicas.jpg">
					<h3><strong>Alambre de Soldadura para Placas Bimetálicas</strong></h3>
					<p><strong>
						Fabricante:
					</strong>
						Wodon
						<br>
					<strong>
						Embalaje:
					</strong>Arame
					<br>
					</p>
					<p><strong>Para que sirve:</strong> Para revestir los rodillos de molinos verticales de cemento y otras aplicaciones.</p>
					<a href="alambre-de-soldadura.php"><div class="boton-mas-info">+ MÁS INFO.</div></a>
				</div>

				<div class="clear"></div>
			</div>
		</div> -->

		<div class="contenedor-representaciones"><a name="representaciones"></a>
			<h2 class="espaciado-repre">Representaciones</h2>

			<div class="representaciones-producto espaciado-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>WODON -  <span>Wear Resistant Material Professional Manufacturer</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/wodon.jpg">Tianjin Wodon Wear Resistant Material Co., Ltd (CHINA WODON). located in the northern international shipping center TIANJlN, which specialized in research, development, production and sales wear-resistant material, and have many years experience in this field. Now the company owns over 100 employees, has anual  output 60,000 square meters of wear plate and 8,000 metric tons of welding consumables.</p>
						<a class="boton-empresas" href="" target="_blank">VER MÁS</a> <a class="boton-empresas" href="pdf/catalogo-wodon.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>

			<div class="representaciones-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>EFFECTUS -  <span>Seu Parceiro Na Construçáo</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/logoeffectus.jpg">Effectus Indústria e Comércio Ltda., fundada em agosto/1993 , constantemente vem procurando renovar sua linha de produtos para tratamento e recuperação de concretos em geral . Com 100% de capital brasileiro, destina todo o seu trabalho na busca de novas tecnologias em produtos e sistemas para tratamento de concreto.</p>
						<a class="boton-empresas" href="" target="_blank">VER MÁS</a><!--<a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a> -->
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="representaciones-producto espaciado-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>NANO4LIFE -  <span>Bienvenido al mundo de la nanotecnología</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/logo-nano-4life.png">A NANO4LIFE® es la marca lider mundial en revestimientos de Nanotecnología que fueron específicamente desarrollados para sustituir a los convencionales para diferentes aplicaciones. Los revestimientos NANO4LIFE® tienen como base SiO2 (Cuarzo puro de dióxido de silicio) nuestros productos están hechos a partir del proceso de fabricación sol-gel.</p>
						<a class="boton-empresas" href="productos-nano4life.php">VER MÁS</a><!--<a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a> -->
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="representaciones-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>XADO -  <span>Innovative Nanotechnology</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/logo-xado.png">The main, leading brand of XADO Chemical Group. Registered in 1991. The first products with the XADO trademark appeared in automotive shops in 1999. If you see the XADO logo on the package, it means this is an innovative product containing revitalizant. It is the main feature and distinctive sign of the XADO trademark.</p>
						<a class="boton-empresas" href="productos-xado.php">VER MÁS</a><!--<a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a> -->
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="representaciones-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>ITW -  <span>Seu Parceiro Na Construçáo</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/logo-itw.png">Effectus Indústria e Comércio Ltda., fundada em agosto/1993 , constantemente vem procurando renovar sua linha de produtos para tratamento e recuperação de concretos em geral . Com 100% de capital brasileiro, destina todo o seu trabalho na busca de novas tecnologias em produtos e sistemas para tratamento de concreto.</p>
						<a class="boton-empresas" href="" target="_blank">VER MÁS</a><!--<a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a> -->
						<div class="clear"></div>
					</div>
				</div>
			</div>

			<div class="clear"></div>
		</div>
	</div>
	
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>