<?php
session_start();
include_once('config.php');
  //print_r($_SESSION);
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
    $genero = $user_data['genero'];
  }
  
  if($genero == "feminino"){
    $bem_vind = "Bem vinda, ";
  }
  elseif ($genero == "masculino") {
    $bem_vind = "Bem vindo, ";
  }
  else{
    $bem_vind = "Bem vinde, ";
  }

  if(isset($_POST['submit'])){

    $pgt1 = $_POST['pgt1'];
    $pgt2 = $_POST['pgt2'];
    $pgt3 = $_POST['pgt3'];
    $pgt4 = $_POST['pgt4'];
    $pgt5 = $_POST['pgt5'];
    $pgt6 = $_POST['pgt6'];
    $pgt7 = $_POST['pgt7'];
    $pgt8 = $_POST['pgt8'];
    $pgt9 = $_POST['pgt9'];
    $pgt10 = $_POST['pgt10'];
    $pgt11 = $_POST['pgt11'];
    $pgt12 = $_POST['pgt12'];
    $pgt13 = $_POST['pgt13'];
    $pgt14 = $_POST['pgt14'];
    $pgt15 = $_POST['pgt15'];
    $pgt16 = $_POST['pgt16'];
    $pgt17 = $_POST['pgt17'];
    $pgt18 = $_POST['pgt18'];
    $pgt19 = $_POST['pgt19'];
    $pgt20 = $_POST['pgt20'];
    
    mysqli_query($conexao, "INSERT INTO perguntas(email,pgt1,pgt2,pgt3,pgt4,pgt5,pgt6,pgt7,pgt8,pgt9,pgt10,pgt11,pgt12,pgt13,pgt14,pgt15,pgt16,pgt17,pgt18,pgt19,pgt20) VALUES('$logado','$pgt1','$pgt2','$pgt3','$pgt4','$pgt5','$pgt6','$pgt7','$pgt8','$pgt9','$pgt10','$pgt11','$pgt12','$pgt13','$pgt14','$pgt15','$pgt16','$pgt17','$pgt18','$pgt19','$pgt20')");

    header('Location: painelAtleta.php');
  }

  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Área do Atleta</title>
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
          <?php echo "<p>$bem_vind $nome</p>" ?>
          <a href="./index.php">Início<span class="bar"></span></a>
          <a href="./sobre.html">Sobre<span class="bar"></span></a>
          <a href="./sair.php">Sair<span class="bar"></span></a>
         </nav>
      </div>
    </header>
    <main>
      <h1>Informações de Saúde</h1>
        <form action="sistema.php" method="POST">
          <div id="resultadoContainer">
            <b>01. O seu médico já lhe disse alguma vez que você tem um problema cardíaco?</b><br>
            <input type="radio" id="pgt1_sim" name="pgt1" value="sim" required>
            <label for="pgt1_sim">Sim</label><br>
            <input type="radio" id="pgt1_nao" name="pgt1" value="nao" required>
            <label for="pgt1_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>02. Você tem dores no peito com freqüência?</b><br>
            <input type="radio" id="pgt2_sim" name="pgt2" value="sim" required>
            <label for="pgt2_sim">Sim</label><br>
            <input type="radio" id="pgt2_nao" name="pgt2" value="nao" required>
            <label for="pgt2_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>03. Você desmaia com freqüência ou tem episódios importantes de vertigem?</b><br>
            <input type="radio" id="pgt3_sim" name="pgt3" value="sim" required>
            <label for="pgt3_sim">Sim</label><br>
            <input type="radio" id="pgt3_nao" name="pgt3" value="nao" required>
            <label for="pgt3_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>04. Algum médico já lhe disse que a sua pressão arterial estava muito alta?</b><br>
            <input type="radio" id="pgt4_sim" name="pgt4" value="sim" required>
            <label for="pgt4_sim">Sim</label><br>
            <input type="radio" id="pgt4_nao" name="pgt4" value="nao" required>
            <label for="pgt4_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>05. Algum médico já lhe disse que você tem um problema ósseo ou articular, como, por exemplo, artrite, que se tenha agravado com o exercício ou que possa piorar com ele?</b><br>
            <input type="radio" id="pgt5_sim" name="pgt5" value="sim" required>
            <label for="pgt5_sim">Sim</label><br>
            <input type="radio" id="pgt5_nao" name="pgt5" value="nao" required>
            <label for="pgt5_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>06. Existe alguma boa razão física, não mencionada aqui, para que você não siga um programa de atividade física, mesmo que você queira?</b><br>
            <input type="radio" id="pgt6_sim" name="pgt6" value="sim" required>
            <label for="pgt6_sim">Sim</label><br>
            <input type="radio" id="pgt6_nao" name="pgt6" value="nao" required>
            <label for="pgt6_nao">Não</label>
          </div>
          <div id="resultadoContainer">
            <b>07. Você tem mais de 65 anos de idade e não está acostumado a exercícios intensos?</b><br>
            <input type="radio" id="pgt7_sim" name="pgt7" value="sim" required>
            <label for="pgt7_sim">Sim</label><br>
            <input type="radio" id="pgt7_nao" name="pgt7" value="nao" required>
            <label for="pgt7_nao">Não</label>
          </div>
          <div id="resultadoContainer">  
            <label for="pgt8"><b>08. Qual seu objetivo com a pratica de atividade física?</b></label><br>
            <input type="text" name="pgt8" id="pgt8" class="inputPerguntas" required>
          </div>
          <div id="resultadoContainer">
            <b>09. Pratica alguma Atividade Física?</b><br>
            <input type="radio" id="pgt9_sim" name="pgt9" value="sim" required>
            <label for="pgt9_sim">Sim</label><br>
            <input type="radio" id="pgt9_nao" name="pgt9" value="nao" required>
            <label for="pgt9_nao">Não</label><br><br>
            <label for="pgt10"><b>10. Qual(is) e a quanto tempo?</b></label><br>
            <input type="text" name="pgt10" id="pgt10" class="inputPerguntas">
          </div>
          <div id="resultadoContainer">
            <b>11. Se não pratica, já praticou?</b><br>
            <input type="radio" id="pgt11_sim" name="pgt11" value="sim">
            <label for="pgt11_sim">Sim</label><br>
            <input type="radio" id="pgt11_nao" name="pgt11" value="nao">
            <label for="pgt11_nao">Não</label><br>
            <input type="radio" id="pgt11_pratico" name="pgt11" value="pratico">
            <label for="pgt11_pratico">Eu Pratico</label><br><br>  
            <label for="pgt12"><b>12. Qual(is) e por quanto tempo?</b></label><br>
            <input type="text" name="pgt12" id="pgt12" class="inputPerguntas"><br><br>
            <label for="pgt13"><b>13. E a quanto tempo deixou de praticar?</b></label><br>
            <input type="text" name="pgt13" id="pgt13" class="inputPerguntas">
          </div>
          <div id="resultadoContainer">
            <b>14. Faz quantas refeições por dia?</b><br>
            <input type="radio" id="pgt14_opt1" name="pgt14" value="1" required>
            <label for="pgt14_opt1">1</label><br>
            <input type="radio" id="pgt14_opt2" name="pgt14" value="2" required>
            <label for="pgt14_opt2">2</label><br>
            <input type="radio" id="pgt14_opt3" name="pgt14" value="3" required>
            <label for="pgt14_opt3">3</label><br>
            <input type="radio" id="pgt14_opt4" name="pgt14" value="4" required>
            <label for="pgt14_opt4">4</label><br>
            <input type="radio" id="pgt14_opt5" name="pgt14" value="5" required>
            <label for="pgt14_opt5">5</label><br>
            <input type="radio" id="pgt14_opt6" name="pgt14" value="6" required>
            <label for="pgt14_opt6">6 ou mais</label>
          </div>
          <div id="resultadoContainer">
            <b>15. Faz dieta ou suplementação alimentar?</b><br>
            <input type="radio" id="pgt15_sim" name="pgt15" value="sim" required>
            <label for="pgt15_sim">Sim</label><br>
            <input type="radio" id="pgt15_nao" name="pgt15" value="nao" required>
            <label for="pgt15_nao">Não</label>
          </div>
          <div id="resultadoContainer">  
            <label for="pgt16"><b>16. Dorme quantas horas por noite?</b></label><br>
            <input type="text" name="pgt16" id="pgt16" class="inputPerguntas" required>
          </div>
          <div id="resultadoContainer">
            <b>17. Nível de treinamento:</b><br>
            <input type="radio" id="pgt17_opt1" name="pgt17" value="1" required>
            <label for="pgt17_opt1">Já treinei a (s) modalidades individualmente</label><br>
            <input type="radio" id="pgt17_opt2" name="pgt17" value="2" required>
            <label for="pgt17_opt2">Nunca competi, mas gosto do treinamento regular</label><br>
            <input type="radio" id="pgt17_opt3" name="pgt17" value="3" required>
            <label for="pgt17_opt3">Nunca competi, mas gosto do treinamento intenso</label><br>
            <input type="radio" id="pgt17_opt4" name="pgt17" value="4" required>
            <label for="pgt17_opt4">Já competi poucas vezes, mas pequenas distâncias</label><br>
            <input type="radio" id="pgt17_opt5" name="pgt17" value="5" required>
            <label for="pgt17_opt5">Já competi acima de três vezes ou já cheguei a fazer distâncias maiores</label><br>
            <input type="radio" id="pgt17_opt6" name="pgt17" value="6" required>
            <label for="pgt17_opt6">Tenho competido frequentemente (até 3X no ano)</label><br>
            <input type="radio" id="pgt17_opt7" name="pgt17" value="7" required>
            <label for="pgt17_opt7"> Tenho competido constantemente (+ de 3 vezes no ano)</label><br>
            <input type="radio" id="pgt17_opt8" name="pgt17" value="8" required>
            <label for="pgt17_opt8">Sempre estou competindo e normalmente obtenho resultados acima da média</label>
          </div>
          <div id="resultadoContainer">  
            <b>Em casos de emergência, quem devemos avisar?</b><br>
            <label for="pgt18"><b>Nome:</b></label>
            <input type="text" name="pgt18" id="pgt18" class="inputPerguntas" required><br>
            <label for="pgt19"><b>Telefone 1:</b></label>
            <input type="text" name="pgt19" id="pgt19" class="inputPerguntas" required><br>
            <label for="pgt20"><b>Telefone 2:</b></label>
            <input type="text" name="pgt20" id="pgt20" class="inputPerguntas" required>
          </div>
          <div>
            <input type="submit" name="submit" id="submit" value="Enviar">
          </div>
      </form>
    </main>
    <footer></footer>
  </body>
</html>