<?php
?>
		<div class="contacto">
			<h2>Contacto</h2>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/contacto.php">
				<div class="centrado" id="ajaxsuccess">*El Email ha sido enviado satisfactoriamente.*</div>

				<div class="campos-formulario">
					<label>Nombre</label><br>
					<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-nombre">*Por favor introduce tu nombre*</div><br>
				</div>

				<div class="campos-formulario">
					<label>Email</label><br>
					<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-email">*Por favor introduce tu e-mail*</div>
				    <div class="error" id="err-emailvld">*El formato de E-mail no es valido*</div><br>
			    </div>

				<div class="campos-formulario">
					<label>Teléfono</label><br>
					<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-telefono">*Por favor introduce tu número teléfonico*</div><br>
				</div>

				<div class="clear"></div>

				<div class="campos-formulario">
					<label>Empresa</label><br>
					<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-empresa">*Por favor introduce el nombre de tu empresa*</div><br>
				</div>

				<div class="mensaje-formulario">
				<label>Mensaje</label><br>
					<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
					<div class="clear"></div>
					<div class="error" id="err-mensaje">*Por favor escribe un mensaje*</div><br>
				</div>

				<div class="clear"></div>

				<div class="error centrado" id="err-form">*Hubo un problema al validar el formulario por favor verifica!*</div>
				<div class="error centrado" id="err-timedout">*El tiempo de conexión con el servidor a expirado!*</div>
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