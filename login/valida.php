<?php
	session_start();
	
	if ((isset($_POST['Usuário'])) && (isset($_POST['senha']))) {

		

	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválida";
		header("Location:index.php");
	}

?>