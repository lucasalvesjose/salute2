<?php

use chillerlan\QRCode\QROptions;

  session_start();
  include_once('config.php');
  
  // Incluir Composer
  include_once('./vendor/autoload.php');
    
  if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $logado = $_SESSION['email'];

  $sql = "SELECT * FROM atletas WHERE email = '$logado'";
  $result = $conexao->query($sql);

  while($user_data = mysqli_fetch_assoc($result)){
    $nome = $user_data['nome'];
  }

  //Criar a variável com a URL para o código QR
  $url = 'http://localhost:8080/salute/codigoQR.php?email='.$logado;

  // Imprimir o título
  //echo "<h2>Gerar código QR da URL: $url</h2>";

  // Instanciar a classe para enviar os parâmetros para o QRCode
  $options = new QROptions([
    // Número da versão do código QRCode
    'version'     => 4,
    // Alterar para base64
    'imageBase64' => true,
    // Tamanho do QRCode
    'scale'       => 2,
  ]);
  
  // Gerar código QR: instanciar a classe QRCODE e enviar os dados para o render gerar o código QR
  $qrcode = (new \chillerlan\QRCode\QRCode($options))->render($url);
  //var_dump($qrcode);

  // Imprimir o QRCode
  

  //echo $qrcode. "<br>";
  $imagem = str_replace('data:image/svg+xml;base64,','',$qrcode);
  //echo $imagem;

  $arquivo_imagen = base64_decode($imagem);

  $destino_arquivo= 'images/'.'qrcode'.'.svg';

  file_put_contents($destino_arquivo, $arquivo_imagen);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Código QR</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/index.css" />
    <style>
      #qrContainer{
        margin-top: 1rem;
        gap: 1rem;
        background-color: white;
        padding: 1rem;
        border-radius: 1rem;
        width: 100%;
        position: relative;
        max-width: 500px;      
      }
      .btn_pdf {
        background-color: #1275bb;
        color: white;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 10px;
        padding: 15px;
        font-size: 15px;
        cursor: pointer;
        max-width: 500px;
      }
    </style>
  </head>
  <body>
    <header>
      <div id="container">
        <div id="logoContainer">
          <img id="logo" src="./images/logo.png" alt="Logo" />
        </div>
        <nav id="navContainer">
          <a href="./index.php">Início<span class="bar"></span></a>
          <a href="./sobre.html">Sobre<span class="bar"></span></a>
          <a href="./sair.php">Sair<span class="bar"></span></a>
        </nav>
      </div>
    </header>
    <main>
      <form>
        <h1>Código QR do Atleta:</h1>
        <div id="qrContainer">
          <?php echo "<p>$nome</p>"?>
          <?php echo "<p>$logado</p>"?>
          <img src="./images/qrcode.svg" alt="QRCode do Atleta"> 
        </div><br>
      </form>
      <input type="button" class= 'btn_pdf' onclick="cont();" value="Imprimir">
      <script>
      function cont(){
        var conteudo = document.getElementById('qrContainer').innerHTML;
        tela_impressao = window.open('about:blank');
        tela_impressao.document.write(conteudo);
        tela_impressao.window.print();
        tela_impressao.window.close();
      }
      </script> 
    </main>
    <footer></footer>
  </body>
</html>
