<?php 
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular',FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);


$nome = ucwords(strtolower($nome)); // insere a 1° maiuscula
$email = strtolower($email); // Insere tudo minuscula


$test_usuario = "SELECT email from usuario where email = '$email'";

$query = $conn->query( $test_usuario );

  if( $query->num_rows > 0 ) {

    $_SESSION['msg'] = "<p style='color:red'>Usuário já cadastrado!!</p>";
	header("Location: index.php");

  }else{

	$result_usuario = "INSERT INTO usuario (nome,email,celular,senha) VALUES ('$nome','$email','$celular','$senha')";

	$resultado_usuario = mysqli_query($conn,$result_usuario);

	if (isset($resultado_usuario)) {

		$_SESSION['msg'] = "<p style='color:green'>Usuário cadastrado com Sucesso!!</p>";
		header("Location: index.php");

	}else{

		$_SESSION['msg'] = "<p style='color:green'>Ocorreu um erro!Usuário não cadastrado!!</p>";
		header("Location: index.php");
	}

}

 ?>