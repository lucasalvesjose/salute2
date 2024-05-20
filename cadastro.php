<?php
  if(isset($_POST['submit'])){
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Gênero: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);

    include_once('config.php');
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];


    $sql = "SELECT * FROM atletas WHERE email = '$email'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1 ) {
      mysqli_query($conexao, "INSERT INTO atletas(nome,senha,email,telefone,genero,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");
      header('Location: login.php');
    }
    else{
      header('Location: erroCadastro.php');
    }

      
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Cadastro</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/index.css" />
  </head>
  <body>
    <header>
      <div id="container">
        <div id="logoContainer">
          <img id="logo" src="./images/logo.png" alt="Logo" />
        </div>
        <nav id="navContainer">
          <a href="./index.php">Início<span class="bar"></span></a>
          <a href="./login.php">Login<span class="bar"></span></a>
          <a href="./sobre.html">Sobre<span class="bar"></span></a>
        </nav>
      </div>
    </header>
    <main>
      <h1>Cadastro</h1>
      <div id="exameContainer">
        <form action="cadastro.php" method="POST">
            <div class="inputBox">
              <input type="text" name="nome" id="nome" class="inputClient" required>
              <label for="nome" class="labelInput">Nome completo</label>
            </div>
            <div class="inputBox">
              <input type="password" name="senha" id="senha" class="inputClient" required>
              <label for="senha" class="labelInput">Senha</label>
            </div>
            <div class="inputBox">
              <input type="email" name="email" id="email" class="inputClient" required>
              <label for="email" class="labelInput">E-mail</label>
            </div>
            <div class="inputBox"> 
              <input type="tel" name="telefone" id="telefone" class="inputClient" required>
              <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <div class="inputBox">
              <b>Gênero:</b><br>
              <input type="radio" id="feminino" name="genero" value="feminino" required>
              <label for="feminino">Feminino</label><br>
              <input type="radio" id="masculino" name="genero" value="masculino" required>
              <label for="masculino">Masculino</label><br>
              <input type="radio" id="outro" name="genero" value="outro" required>
              <label for="outro">Outro</label>
            </div>
            <div>
              <label for="data_nascimento"><b>Data de Nascimento:</b></label>
              <input type="date" name="data_nascimento" id="data_nascimento" required>
            </div>
            <div class="inputBox">
              <input type="text" name="cidade" id="cidade" class="inputClient" required>
              <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <div class="inputBox">
              <input type="text" name="estado" id="estado" class="inputClient" required>
              <label for="estado" class="labelInput">Estado</label>
            </div>
            <div class="inputBox">
              <input type="text" name="endereco" id="endereco" class="inputClient" required>
              <label for="endereco" class="labelInput">Endereço</label>
            </div>
            <div><input type="submit" name="submit" id="submit" value="Enviar">
            </div>
        </form>
      </div>
    </main>
    <footer></footer>
  </body>
</html>