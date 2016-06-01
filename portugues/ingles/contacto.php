<?php
?>
		<div class="contacto"><a name="contacto"></a>
			<h2>Contact</h2>
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto.php">
				<div class="centrado verde" id="ajaxsuccess">*The Email has been sent successfully.*</div>

				<div class="campos-formulario">
					<label>Name</label><br>
					<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-nombre">*Please enter your name.*</div><br>
				</div>

				<div class="campos-formulario">
					<label>Email</label><br>
					<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-email">*Please enter your email*</div>
				    <div class="error" id="err-emailvld">*The E-mail format is invalid*</div><br>
			    </div>

				<div class="campos-formulario">
					<label>Phone</label><br>
					<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-telefono">*Please enter your phone number*</div><br>
				</div>

				<div class="clear"></div>

				<div class="campos-formulario">
					<label>Company</label><br>
					<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-empresa">*Please enter your business name*</div><br>
				</div>

				<div class="mensaje-formulario">
				<label>Menssage</label><br>
					<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
					<div class="clear"></div>
					<div class="error" id="err-mensaje">*Please, write a message*</div><br>
				</div>

				<div class="clear"></div>

				<div class="error centrado" id="err-form">*There was a problem validating the form please check!*</div>
				<div class="error centrado" id="err-timedout">*Time connection to the server has expired!*</div>
				<div class="error" id="err-state"></div><br>
				<button class="boton" id="send" class="btn btn-primary boton-enviar">SUBMIT</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>	

<?php
?>