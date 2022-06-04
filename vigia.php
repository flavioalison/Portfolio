<?php
	//Conectada a session
	session_start();
	if (!(isset($_SESSION['usuario']))) {
		header('Location: INDEX3.php');
	}
?>