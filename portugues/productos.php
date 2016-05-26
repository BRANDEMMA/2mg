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
			<div class="titulo-formulario"><h2>Envie-nos as suas necessidades</h2></div>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/contacto.php">
				
				<div class="centrado" id="ajaxsuccess">*O e-mail foi enviado com sucesso.*</div>				
				<label>Nome</label><br>
				<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-nombre">*Digite seu nome*</div><br>

				<label>Empresa</label><br>
				<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-empresa">*Por favor, indique o nome da empresa*</div><br>
								
				<label>Email</label><br>
				<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-email">*Digite seu e-mail*</div>
				<div class="error centrado" id="err-emailvld">*O formato de E-mail é inválido*</div><br>
			    				
				<label>Telefone </label><br>
				<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error centrado" id="err-telefono">*Por favor, indique o seu número de telefone*</div><br>			
				
				<label>Mensagem</label><br>
				<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
				<div class="clear"></div>
				<div class="error centrado" id="err-mensaje">*Por favor, indique uma mensagem*</div><br>
				<div class="error centrado" id="err-form">*Houve um problema validar o formulário por favor, verifique!*</div>
				<div class="error centrado" id="err-timedout">*Conexão em tempo para o servidor expirou!*</div>
				<div class="error centrado" id="err-state"></div><br>
				<button class="boton-naranja" id="send" class="btn btn-primary boton-enviar">Enviar</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>

		<div class="texto-detalle">
			<h2>Procurement en <span>Ingenieria</span></h2><img src="img/ingeniero.jpg">
			<p>Fornecemos assessoria em Procurement, oferecendo a nossos clientes agilidade nos processos internos de compra, garantindo as melhores praticas para a administração da cadeia de fornecedores, (Supply Chain Management) essenciais para que estes dediquem seu tempo ao core business de suas empresas, respeitando as politicas de escolha de fornecedores implementados por estes (Compliance).<br><br>
			O abastecimento o aprovisionamento (Procurement) ‘e a função logística mediante a qual se fornece a uma empresa todo o material necessário para seu funcionamento, sendo seu conceito sinônimo de previsão ou fornecimento.<br><br>
			As atividades incluídas dentro deste processo consistem em:<br><br>
			Cálculo de necessidades : Planeamento Logístico e de Consumo<br><br>
			Compra o Aquisição: Realiza as aquisições (obtenção, armazenamento, controle de estoque e utilização de desperdícios)<br><br>
			O abastecimento (Procurement) es una das funções comum básica de qualquer organização, sendo que cada uma delas depende, em maior ou menor grado, de materiais e fornecimentos de outras empresas. Nenhuma empresa ‘e autossuficiente.<br><br>
			Está claro que a área de Procurement de qualquer empresa possui um papel importante e que, sobretudo, influencia de maneira relevante nos custos da mesma, e consequentemente nos preços também, o qual repercute na capacidade de manter-se no mercado e concorrer. O êxito de una empresa, criada para oferecer produtos no mercado, depende da capacidade da mesma de conseguir uma combinação razoável entre quantidade e qualidade, oportunidade e custo dos bens ou serviços que produz, o que faz com que 2MG seja estimulada a oferecer estes serviços no mercado Peruano.</p>
			
		</div>

		<div class="clear"></div>

		<div class="contenedor-productos"><a name="productos"></a>
			<h2>Produzir</h2>

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
						País de Origem:
					</strong>EEUU
					<br>
					</p>
					<p><strong>Para que serve:</strong> Óculos de desembaçamento, atividades de natação, óculos de segurança actividades industriais (mineração).</p>
					
					<a href="arena-antifog.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MAIS INFO.</div></a>
				</div>

				<div class="producto">
					<img class="img-producto" src="img/bolsoadtitanium.jpg">
					<h3><strong> AD Titanium – Betão aditivo em pó</strong></h3>
					<p><strong>
						Fabricante:
					</strong>
						Effectus Industria y Comercio Ltda
						<br>
					<strong>
						Embalagem:
					</strong>Bolsas de 25, 50 Kg o Big Bag
					<br>
					</p>
					<p><strong>Para que serve:</strong>Reduzir o consumo de água na mistura. Encolhimento diminui e aumenta a compactação, reduz a permeabilidade - Aumenta a resistência e módulo - Adicionado - - Reduz Teor Alkali Cimento -Reduz a reação aumenta a durabilidade da Estrutura - alta Obra Custo inicial Resistência Gano -Reduced geral.</p>
					<a href="ad-titanium.php"><div class="boton-mas-info"><!-- <img src="img/ver-mas-negro.png"> -->+ MAIS INFO.</div></a>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="contenedor-representaciones"><a name="representaciones"></a>
			<h2 class="espaciado-repre">Representações</h2>

			<div class="representaciones-producto espaciado-producto">
				<div class="empresas-derecha borde-inferior">
					<div class="titulo">
						<h2>WODON -  <span>Wear Resistant Material Professional Manufacturer</span></h2>
					</div>
					<div class="descripcion-empresa">
						<p><img src="img/wodon.jpg">Tianjin Wodon Wear Resistant Material Co., Ltd (CHINA WODON). located in the northern international shipping center TIANJlN, which specialized in research, development, production and sales wear-resistant material, and have many years experience in this field. Now the company owns over 100 employees, has anual  output 60,000 square meters of wear plate and 8,000 metric tons of welding consumables.</p>
						<a class="boton-empresas" href="http://chinawodon.com/ENGLISH/" target="_blank">WEB</a> <a class="boton-empresas" href="" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a>
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
						<a class="boton-empresas" href="http://www.effectus.com.br/" target="_blank">WEB</a> <a class="boton-empresas" href=""><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;DOSSIER</a>
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