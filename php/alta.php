<?php
	include("con_db.php");

		if(isset($POST_['send'])) {

			if(strlen($_POST['name']) > 1 && strlen($_POST['lastname']) > 1 && strlen($_POST['phone']) > 1 && strlen($_POST['email']) > 1 && strlen($_POST['msg']) > 1) {
				$name = trim($POST['name']);
				$lastname = trim($POST['lastname']);
				$phone = trim($POST['phone']);
				$email = trim($POST['email']);
				$msg = trim($POST['msg']);
			}
		}
?>