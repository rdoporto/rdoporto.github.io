<?php 
	//Creamos las variables donde almacenamos los datos del formulario y las formateamos correctamente
	$nombre = strip_tags(htmlspecialchars($_POST['name']));
	$email = strip_tags(htmlspecialchars($_POST['email']));
	$telefono = strip_tags(htmlspecialchars($_POST['tel']));
	$mensaje = strip_tags(htmlspecialchars($_POST['message']));


	//Utilizamos estas variables para generar el correo electrónico
	$to = "rdoportoregueiro@gmail.com"; 
	$subject = "Formulario web:  $name";
	$body = "Alguien quiere contactar contigo .\n\n"."Aquí tienes los detalles del mensaje:\n\n 
	Nombre: $nombre \n\n
	Email: $email \n\n
	Telefono: $telefono \n\n
	Mensaje: $mensaje";
 
	//invocamos el método mail() con sus correspondientes parámetros para enviar el correo según los datos recibidos
	mail($to, $subject, $body)
 ?>