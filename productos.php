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
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/contacto.php">
				
				<div class="centrado" id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>				
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
			<h2>Procurement en <span>Ingeniería</span></h2><img src="img/ingeniero.jpg">
			<p>Proveemos asesoría en Procurement, ofreciendo a nuestros clientes agilidad en los procesos internos de compras, garantizando las mejores practicas para la administración de la cadena de suministros (Supply Chain Management) esenciales para que estos dediquen su tiempo al core business de las empresas, respectando las políticas de selección de proveedores implementados por estos (Compliance).<br><br>
			El abastecimiento o aprovisionamiento (procurement) es la función logística mediante la cual se provee a una empresa de todo el material necesario para su funcionamiento. Su concepto es sinónimo de provisión o suministro.<br><br>
			Las actividades incluidas dentro de este proceso son:<br><br>
			Cálculo de necesidades : Planeamiento Logístico y de Consumo<br>
			Compra o Adquisición: Realiza las adquisiciones (obtención, almacenamiento, control stock y utilización de desperdicios)<br><br>
			El abastecimiento (Procurement) es una de las funciones comunes básicas de cualquier organización, puesto que cada una de ellas depende - si bien en mayor o menor grado - de los materiales y suministros de otras empresas. Ninguna organización es autosuficiente. <br><br>
			Está claro que el área de Procurement de cualquier empresa juega un rol importante, y que, sobre todo, influye de manera relevante en los costos de la misma y por consiguiente en los precios también, lo cual, a su vez, repercute en la capacidad de mantenerse en el mercado y competir. El éxito de una empresa, creada para ofrecer productos en el mercado, depende en gran medida de que pueda lograr una combinación razonable de la cantidad, la calidad, la oportunidad y el costo de los bienes o servicios que produce, lo que estimula que nuestra empresa ofrezca  estos servicios en el mercado Peruano.
			</p>
			
		</div>

		<div class="clear"></div>

		<div class="contenedor-productos"><a name="productos"></a>
			<h2>Productos</h2>
			<p>Lorem Ipsum es simplemente el texto de relleno<br>
			de las imprentas y archivos de texto.</p>

			<div class="productos-centrados">
				<div class="producto espaciado-producto">
					<img src="img/arena-antifog-2mg.jpg">
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
					
					<a href="arena-antifog.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MÁS INFO.</div></a>
				</div>

				<div class="producto">
					<img src="img/ad-titanium-2mg.jpg">
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
					<a href="ad-titanium.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MÁS INFO.</div></a>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="contenedor-representaciones"><a name="representaciones"></a>
			<h2>Representaciones</h2>
			<p>Lorem Ipsum es simplemente el texto de relleno<br>
			de las imprentas y archivos de texto.</p>

			<div class="representaciones-producto espaciado-producto">
				<img src="img/productos-2mg.jpg">
				<h3>REPRESENTACIONES DE PRODUCTO</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam a orci posuere porttitor. Donec eu enim eros. Quisque vitae justo at augue sollicitudin egestas eget ac tellus. Ut dignissim turpis eget arcu rutrum mollis. In dignissim eget velit sit amet tempor. Phasellus iaculis libero tortor, sed semper neque porttitor vel. Aliquam quis turpis egestas, efficitur ligula ut, cursus ex. Phasellus et tristique turpis, at commodo mauris. Vestibulum eget mollis lacus.</p>
				<a href="representaciones-productos.php"><div class="boton-mas-info2"><!-- <img src="img/ver-mas-blanco.png"> -->+ MÁS INFO.</div></a>
			</div>

			<div class="representaciones-producto">
				<img src="img/insumos-2mg.jpg">
				<h3>REPRESENTACIONES DE INSUMOS</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lacinia quam a orci posuere porttitor. Donec eu enim eros. Quisque vitae justo at augue sollicitudin egestas eget ac tellus. Ut dignissim turpis eget arcu rutrum mollis. In dignissim eget velit sit amet tempor. Phasellus iaculis libero tortor, sed semper neque porttitor vel. Aliquam quis turpis egestas, efficitur ligula ut, cursus ex. Phasellus et tristique turpis, at commodo mauris. Vestibulum eget mollis lacus.</p>
				<a href="representaciones-insumos.php"><div class="boton-mas-info2"><!-- <img src="img/ver-mas-blanco.png"> -->+ MÁS INFO.</div></a>
			</div>

			<div class="clear"></div>
		</div>
	</div>
	
	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>