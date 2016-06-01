<!DOCTYPE HTML>
<html>

<head>
	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>2MG - PRODUCTOS</title>
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

	<div class="contenido espacio-inferior-producto">
		<div class="formulario-requerimientos">
			<div class="titulo-formulario"><h2>Send us your requirements</h2></div>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto3.php">
				
				<div class="centrado verde" id="ajaxsuccess">*The Email has been sent successfully.*</div>				
				<label>Name</label><br>
				<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-nombre">*Please enter your name.*</div><br>

				<label>Company</label><br>
				<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-empresa">*Please enter your business name*</div><br>
								
				<label>Email</label><br>
				<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-email">*Please enter your email*</div>
				<div class="error centrado" id="err-emailvld">*The E-mail format is invalid*</div><br>
			    				
				<label>Phone</label><br>
				<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-telefono">*Please enter your phone number*</div><br>			
				
				<label>Menssage</label><br>
				<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
				<div class="clear"></div>
				<div class="error centrado" id="err-mensaje">*Please, write a message*</div><br>
				<div class="error centrado" id="err-form">*There was a problem validating the form please check!*</div>
				<div class="error centrado" id="err-timedout">*Time connection to the server has expired!*</div>
				<div class="error centrado" id="err-state"></div><br>
				<button class="boton-naranja" id="send" class="btn btn-primary boton-enviar">SUBMIT</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>

		<div class="texto-detalle">
			<h2><span>Engineering</span> Procurement</h2><img src="img/ingeniero.jpg">
			<p>We provide advice on procurement, offering our customers agility in the internal processes of buying, ensuring the best practices for the management of the supply chain (Supply Chain Management) essential for them to dedicate their time to the core business of their companies, respecting the political choice implemented by these suppliers (Compliance).<br><br>
			The supply procurement (Procurement) 'and the logistic function in which it provides to a company all the material necessary for its operation, and its concept synonymous forecast or supply.<br><br>
			The activities included within this process are:<br><br>
			Calculation needs: Logistics Planning and Consumption<br><br>
			For the acquisition: Performs acquisition (procurement, storage, inventory control and use of waste)<br><br>
			The supply (Procurement) es una of basic common functions of any organization, and each of them depends, more or less willingly, materials and supplies from other companies. No company 'and self-sufficient.<br><br>
			It is clear that the Procurement area of ​​any company plays an important role and, above all, a relevant influence on the cost of the same, and therefore prices too, which affects the ability to remain on the market and compete. The success of an enterprise, created to offer products on the market depends on the ability of it to get a reasonable combination of quantity and quality, timeliness and cost of goods and services it produces, which makes 2MG be encouraged to offer these services the Peruvian market.</p>
			
		</div>

		<div class="clear"></div>

		<div class="contenedor-productos"><a name="productos"></a>
			<h2>Products</h2>

			<div class="productos-centrados">
				<div class="producto espaciado-producto">
					<img src="img/spray-anti-fog.jpg">
					<h3><strong> ARENA ANTIFOG – LIQUIDO ANTIEMPAÑANTE</strong></h3>
					<p><strong>
						Maker:
					</strong>
						Arenas
						<br>
					<strong>
						Country Origin:
					</strong>EEUU
					<br>
					</p>
					<p><strong>What is it for:</strong> Defogging goggles, swimming activities, safety glasses industrial activities (mining).</p>
					
					<a href="arena-antifog.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MORE INFO.</div></a>
				</div>

				<div class="producto">
					<img class="img-producto" src="img/bolsoadtitanium.jpg">
					<h3><strong> AD Titanium – Concrete Additive Powder</strong></h3>
					<p><strong>
						Maker:
					</strong>
						Effectus Industria y Comercio Ltda
						<br>
					<strong>
						Embalaje:
					</strong>Bags of 25, 50 Kg o Big Bag
					<br>
					</p>
					<p><strong>What is it for:</strong> Reduce consumption of water in the mixture. Shrinkage decreases and increases compactness, reduces permeability - Increases strength and modulus - Added - - Reduz Teor Alkali Cement -Reduz the reaction increases the durabilidade of Estrutura - Initial Resistance Gano high -Reduced overall custo Artwork .</p>
					<a href="ad-titanium.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MORE INFO.</div></a>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="contenedor-representaciones"><a name="representaciones"></a>
			<h2 class="espaciado-repre">Representations</h2>

			<div class="representaciones-producto espaciado-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>WODON -  <span>Wear Resistant Material Professional Manufacturer</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/wodon.jpg">Tianjin Wodon Wear Resistant Material Co., Ltd (CHINA WODON). located in the northern international shipping center TIANJlN, which specialized in research, development, production and sales wear-resistant material, and have many years experience in this field. Now the company owns over 100 employees, has anual  output 60,000 square meters of wear plate and 8,000 metric tons of welding consumables.</p>
						<a class="boton-empresas" href="http://chinawodon.com/ENGLISH/" target="_blank">WEB</a> <a class="boton-empresas" href="pdf/wodon-catalg.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a>
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
						<a class="boton-empresas" href="http://www.effectus.com.br/" target="_blank">WEB</a> <!--<a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a> -->
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