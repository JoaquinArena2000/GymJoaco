<?php<?php
//Guardado de los datos del formulario 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$telefono = $_POST['telefono'];

//$servicio = $_POST['opcionesSelect'];

//Armado del mail
$to = 'javascripttt.3.14@gmail.com';
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
              \n Nombre: $nombre 
              \n Correo: $email
              \n Mensaje o consulta: \n $comentarios \n"; 
$headers = "From: $email";

//Envió del mail
mail($to, $email_subject, $email_body, $headers); 
echo 'Pronto nos estaremos comunicando con usted!';
?>
<br>
<br>
<button><a href="index.html">Volver</a></button>
