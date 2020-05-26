<?php
	
session_start();

$email = $_SESSION['email'];
	
include_once("conexao.php");

$sql = "SELECT * from usuario where email = '$email'";

$result = mysqli_query($conn,$sql);

$usuario = mysqli_fetch_assoc($result);

$nome = $usuario['nome'];
$email = $usuario['email'];
$celular = $usuario['celular'];

$primeiroNome = explode(" ", $nome);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">

    <title>Dados do Usuário</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <link rel="icon" href="image/biscoito.png">
   
  </head>

  <body>
  <div class="container" id="logado">
      
        <h2 class="logado">Usuário <b><?php echo $primeiroNome[0]; ?></b> Logado</h2>

          <label>Nome</label>
          <input disabled value="<?php echo $nome; ?>">
          
          <label>Email</label>
          <input disabled value="<?php echo $email; ?>">
          
          <label>Celular</label>
          <input disabled value="<?php echo $celular; ?>">
          
          <a href="sair.php">Sair</button></a>
        
  </div>
  </body>
</html>