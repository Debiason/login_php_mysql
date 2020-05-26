<?php
	session_start();
	
	unset(
		$_SESSION['id'],
		$_SESSION['nome'],
		$_SESSION['celular'],
		$_SESSION['email'],
	);
	
	$_SESSION['logindeslogado'] =" <p style='color:green'>Usuário Deslogado!!</p>";
	
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>