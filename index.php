<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">

    <title>Douglas - Login</title>

    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link rel="icon" href="image/biscoito.png">

  </head>

  <body>
  <div class="container">

      <div class ="mensagem" id="mensagem">
        <p>
          <?php
            if (isset($_SESSION['msg'])) {
               echo $_SESSION['msg'];
               unset($_SESSION['msg']);
            }
          ?>
        </p>
      </div>

      <form class="form" method="POST" action="valida.php">
        <h2 class="login">Login</h2>
        <div class="meu-box">
          <input type="email" name="email" class="input-nome" id="email" placeholder="Email" required autofocus>
          <label for="email" class="label-nome" id="label" >Email</label>
        </div>

        <div class="meu-box">
          <input type="password" name="senha" id="senha" class="input-nome" placeholder="Senha" required onclick="document.getElementById('demo').innerHTML = 'Senha de Seis Números'">
          <label for="senha" class="label-nome">Senha</label>
        </div>

        <p id="demo" style="font-size: 11px;color: red"></p>

        <button class="button" type="submit">Acessar</button><br><br>

        <a href="cadastro.php" class="cadastro">Não tem cadastro?Cadastre-se!!</a>

      </form>


      <div class ="mensagem" id="erroLogin">
	      <p>
         <?php 
          if(isset($_SESSION['loginErro'])){
		   	  	echo $_SESSION['loginErro'];
		   	  	unset($_SESSION['loginErro']);
		    	}?>
        </p>
      </div>

      <div class ="mensagem" id="deslogado">
		    <p>
			   <?php 
			    if(isset($_SESSION['logindeslogado'])){
			   	echo $_SESSION['logindeslogado'];
			  	unset($_SESSION['logindeslogado']);
			   }?>
        </p>
        </div>

  </div>
  </body>
</html>
