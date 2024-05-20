<?php
 include_once('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Erro</title>
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
          <a href="./cadastro.php">Cadastre-se<span class="bar"></span></a>
        </nav>
      </div>
    </header>
    <main>
      <h1>E-mail inválido!</h1>
      <div id="exameContainer">
        <p>O e-mail informado já está em uso, por favor utilize outro endereço de e-mail.</p>
      </div>
    </main>
    <footer></footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#carousel").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 4000,
          arrows: false,
        });
      });
    </script>

  </body>
</html>
