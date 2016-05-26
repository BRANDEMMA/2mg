<?php
?>
		<div class="contacto"><a name="contacto"></a>
			<h2>Contato</h2>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/contacto.php">
				<div class="centrado" id="ajaxsuccess">*O e-mail foi enviado com sucesso.*</div>

				<div class="campos-formulario">
					<label>Nome</label><br>
					<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-nombre">*Digite seu nome*</div><br>
				</div>

				<div class="campos-formulario">
					<label>Email</label><br>
					<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-email">*Digite seu e-mail*</div>
				    <div class="error" id="err-emailvld">*O formato de E-mail é inválido*</div><br>
			    </div>

				<div class="campos-formulario">
					<label>Telefone</label><br>
					<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-telefono">*Por favor, indique o seu número de telefone*</div><br>
				</div>

				<div class="clear"></div>

				<div class="campos-formulario">
					<label>Empresa</label><br>
					<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-empresa">*Por favor, indique o nome da empresa*</div><br>
				</div>

				<div class="mensaje-formulario">
				<label>Mensagem</label><br>
					<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
					<div class="clear"></div>
					<div class="error" id="err-mensaje">*Por favor, indique uma mensagem*</div><br>
				</div>

				<div class="clear"></div>

				<div class="error centrado" id="err-form">*Houve um problema validar o formulário por favor, verifique!*</div>
				<div class="error centrado" id="err-timedout">*Conexão em tempo para o servidor expirou!*</div>
				<div class="error" id="err-state"></div><br>
				<button class="boton" id="send" class="btn btn-primary boton-enviar">ENVIAR</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>	

<?php
?>