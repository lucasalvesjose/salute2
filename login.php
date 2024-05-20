<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Login</title>
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
          <a href="./sobre.html">Sobre<span class="bar"></span></a>
          <a href="./cadastro.php">Cadastre-se<span class="bar"></span></a> 
        </nav>
      </div>
    </header>
    <main id="mainContato">
      <h1>Login</h1>
      <form id="containerContato" action="testLogin.php" method="post">
        <input type="text" placeholder="E-mail" id="email" name="email" required />
        <input type="password" placeholder="Senha" id="senha" name="senha" required />
        <input type="submit" id="submit" name="submit" value="Entrar"/>
        <p>WhatsApp: (11) 91234-5678</p>
        <p>E-mail: contato@salute.com</p>
      </form>
    </main>
    <footer></footer>
  </body>
</html>
