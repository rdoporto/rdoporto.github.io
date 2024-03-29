<?php 
	$nombre = $_POST['name'];
	$telefono = $_POST['tel'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('rdoportoregueiro@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>