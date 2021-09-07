<?php

	include("con_db.php");
	if(strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
		$user = $_POST['user'];
		$password = $_POST['password'];

		if($user == 'admin' && $password == 'admin'){
			header("location:msg.php");
		}

		else{
            $mensaje = "Los datos iniciados no concuerdan";
			echo "<script type='text/javascript'>windows.alert($mensaje);</script>";

		}
	}

?>