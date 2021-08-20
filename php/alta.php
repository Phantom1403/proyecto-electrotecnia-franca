<?php
	include("con_db.php");

	if(strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['phone']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['msg']) >= 1) {
		$name = trim($POST['name']);
		$lastname = trim($POST['lastname']);
    	$phone = trim($POST['phone']);
		$email = trim($POST['email']);
		$msg = trim($POST['msg']);
		$consulta = "INSERT INTO mensajes(Nombre, Apellido, Teléfono, Email, Mensaje) VALUES ('$name','$lastname','$phone','$email','$msg')";
		$resultado = mysqli_query($conex,$consulta);
		
		if ($resultado) {
			echo "El mensaje se envió correctamente";
		}else{
			echo "Hubo un error al enviar el mensaje, intente más tarde";}
			
	}else{
			echo "Por favor complete los campos";
	}
?>