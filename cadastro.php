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

      <form class="form" id="frmCad" name="frmCad" method="POST" action="processa.php">
        <h2 class="cadastro">Cadastro</h2>
        <div class="meu-box">
          <input type="text" name="nome" id="nome" class="input-nome" placeholder="Nome" required autofocus>
          <label for="nome" class="label-nome">Nome</label>
        </div>

        <div class="meu-box">
          <input type="email" name="email" id="email" class="input-nome" placeholder="Email" required>
          <label for="email" class="label-nome">Email</label>
        </div>

        <div class="meu-box">
          <input type="text" name="celular" id="celular" class="input-nome" placeholder="Celular" required>
          <label for="celular" class="label-nome">Celular</label>
        </div>

        <div class="meu-box">
          <input type="password" name="senha" id="senha" class="input-nome" placeholder="Senha" required onclick="document.getElementById('demo').innerHTML = 'A Senha deve ser composta por Seis Números'">
          <label for="senha" class="label-nome">Senha</label>
        </div>

        <p id="demo" style="font-size: 11px;color: red"></p>

        <button class="button" type="submit">Cadastrar</button></br>

        <button class="button"><a href="index.php" class= "cancelar">Cancelar</a></button>
        
      </form>
    </div>

  </body>
</html>
