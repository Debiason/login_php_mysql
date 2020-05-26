<?php 
session_start();

include_once("conexao.php");

$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);

$test_usuario = "SELECT nome,email,celular,senha from usuario where email = '$email' and senha = $senha";

$query = $conn->query( $test_usuario );

  if( $query->num_rows > 0 ) {

        $_SESSION['email'] = $email;
        header("Location: logado.php");
 
  }else{
	

		$_SESSION['msg'] = "<p style='color:red'>Nome ou Senha Inválidos!!</p>";
		header("Location: index.php");

   }

 ?>