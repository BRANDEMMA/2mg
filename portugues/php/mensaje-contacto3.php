<?php
//Variables
@$nombre = addslashes($_POST["nombre"]);
@$empresa = addslashes($_POST["empresa"]);
@$email = addslashes($_POST["email"]);
@$telefono = addslashes($_POST["telefono"]);
@$mensaje = addslashes($_POST["mensaje"]);

//Mensaje
@$mensaje=
"Nombre: $nombre\n\n
Empresa: $empresa\n\n
E-mail: $email \n\n
Teléfono: $telefono\n\n
Mensaje: $mensaje\n\n
Mensaje enviado desde la sección Procurement en Ingeniería de la Página Web 2MG";

//Cabecera
$cabeceras = "Responder a : $email";
$asunto = utf8_decode("Mensaje desde la página Web");
$email_to = "2mg@2mg.com.pe";
$contenido = utf8_decode("$mensaje");
//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$headers )) {

//Confirmación mensaje Ok
die("Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted. Gracias.");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
?>