<?php
	/*print_r($_POST);

	echo '<br />';
	echo $_POST['email'];
	echo '<br />';
	echo $_POST['senha'];*/

	session_start();


	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$usuarios = array('teste1@hotmail.com' => '1234', 'teste2@gmail.com' => 'abcd');
	//acessando os elementos do vetor
	if (isset($usuarios[$email])){
		if ($usuarios[$email]==$senha) {
			$_SESSION['usuario'] = $email;
			header('Location: logged.php');
		}
		else{
			header('Location: INDEX3.php');
			echo '<br>';
		}

	}
	else{
		header('Location: INDEX3.php');
		echo '<br>';
	}

?>