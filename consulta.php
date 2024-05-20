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

  $sql = "SELECT * FROM perguntas WHERE email = '$logado'";
  $sql2 = "SELECT * FROM atletas WHERE email = '$logado'";
  $result = $conexao->query($sql);
  $result2 = $conexao->query($sql2);

  while($user_data = mysqli_fetch_assoc($result)){
    $pgt1 = $user_data['pgt1'];
    $pgt2 = $user_data['pgt2'];
    $pgt3 = $user_data['pgt3'];
    $pgt4 = $user_data['pgt4'];
    $pgt5 = $user_data['pgt5'];
    $pgt6 = $user_data['pgt6'];
    $pgt7 = $user_data['pgt7'];
    $pgt8 = $user_data['pgt8'];
    $pgt9 = $user_data['pgt9'];
    $pgt10 = $user_data['pgt10'];
    $pgt11 = $user_data['pgt11'];
    $pgt12 = $user_data['pgt12'];
    $pgt13 = $user_data['pgt13'];
    $pgt14 = $user_data['pgt14'];
    $pgt15 = $user_data['pgt15'];
    $pgt16 = $user_data['pgt16'];
    $pgt17 = $user_data['pgt17'];
    $pgt18 = $user_data['pgt18'];
    $pgt19 = $user_data['pgt19'];
    $pgt20 = $user_data['pgt20'];
  }
  
  while($user_data2 = mysqli_fetch_assoc($result2)){
    $nome = $user_data2['nome'];
    $telefone = $user_data2['telefone'];
    $genero = $user_data2['genero'];
    $data_nasc = $user_data2['data_nasc'];
    $cidade = $user_data2['cidade'];
    $estado = $user_data2['estado'];
    $endereco = $user_data2['endereco'];
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
?>  
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Área do Atleta</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/index.css" />
    <style>
      #update {
        background-color: #1275bb;
        color: white;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 10px;
        padding: 15px;
        font-size: 15px;
        cursor: pointer;
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
          <?php echo "<p>$bem_vind $nome</p>" ?>
          <a href="./index.php">Início<span class="bar"></span></a>
          <a href="./sobre.html">Sobre<span class="bar"></span></a>
          <a href="./sair.php">Sair<span class="bar"></span></a>
        </nav>
      </div>
    </header>
    <main>
      <h1>Consulta de informações</h1>
      <form action="saveEdit.php" method="POST">
        <h2>Informações pessoais:</h2>
        <div id="resultadoContainer">
          <label for="nome"><b>Nome Completo:</b></label><br>
          <input type="text" name="nome" id="nome" class="inputPerguntas" value= "<?php echo $nome ?>" required>
        </div>
        <div id="resultadoContainer"> 
          <label for="telefone"><b>Telefone:</b></label><br>
          <input type="tel" name="telefone" id="telefone" class="inputPerguntas" value= "<?php echo $telefone ?>" required>
        </div>
        <div id="resultadoContainer">
          <b>Gênero:</b><br>
          <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $genero == 'feminino' ? 'checked' : ''?> required>
          <label for="feminino">Feminino</label><br>
          <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $genero == 'masculino' ? 'checked' : ''?> required>
          <label for="masculino">Masculino</label><br>
          <input type="radio" id="outro" name="genero" value="outro" <?php echo $genero == 'outro' ? 'checked' : ''?> required>
          <label for="outro">Outro</label>
        </div>
        <div id="resultadoContainer">
          <label for="data_nascimento"><b>Data de Nascimento:</b></label><br>
          <input type="date" name="data_nascimento" id="data_nascimento" value= "<?php echo $data_nasc ?>" required>
        </div>
        <div id="resultadoContainer">
          <label for="cidade">Cidade</label><br>
          <input type="text" name="cidade" id="cidade" class="inputPerguntas" value= "<?php echo $cidade ?>" required> 
        </div>
        <div id="resultadoContainer">
          <label for="estado">Estado</label><br>
          <input type="text" name="estado" id="estado" class="inputPerguntas" value= "<?php echo $estado ?>" required>
        </div>
        <div id="resultadoContainer">
          <label for="endereco">Endereço</label><br>
          <input type="text" name="endereco" id="endereco" class="inputPerguntas" value= "<?php echo $endereco ?>" required>
        </div><br>
        <h2>Informações de saúde:</h2>
        <div id="resultadoContainer">
          <b>01. O seu médico já lhe disse alguma vez que você tem um problema cardíaco?</b><br>
          <input type="radio" id="pgt1_sim" name="pgt1" value="sim" <?php echo $pgt1 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt1_sim">Sim</label><br>
          <input type="radio" id="pgt1_nao" name="pgt1" value="nao" <?php echo $pgt1 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt1_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>02. Você tem dores no peito com freqüência?</b><br>
          <input type="radio" id="pgt2_sim" name="pgt2" value="sim" <?php echo $pgt2 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt2_sim">Sim</label><br>
          <input type="radio" id="pgt2_nao" name="pgt2" value="nao" <?php echo $pgt2 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt2_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>03. Você desmaia com freqüência ou tem episódios importantes de vertigem?</b><br>
          <input type="radio" id="pgt3_sim" name="pgt3" value="sim" <?php echo $pgt3 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt3_sim">Sim</label><br>
          <input type="radio" id="pgt3_nao" name="pgt3" value="nao" <?php echo $pgt3 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt3_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>04. Algum médico já lhe disse que a sua pressão arterial estava muito alta?</b><br>
          <input type="radio" id="pgt4_sim" name="pgt4" value="sim" <?php echo $pgt4 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt4_sim">Sim</label><br>
          <input type="radio" id="pgt4_nao" name="pgt4" value="nao" <?php echo $pgt4 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt4_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>05. Algum médico já lhe disse que você tem um problema ósseo ou articular, como, por exemplo, artrite, que se tenha agravado com o exercício ou que possa piorar com ele?</b><br>
          <input type="radio" id="pgt5_sim" name="pgt5" value="sim" <?php echo $pgt5 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt5_sim">Sim</label><br>
          <input type="radio" id="pgt5_nao" name="pgt5" value="nao" <?php echo $pgt5 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt5_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>06. Existe alguma boa razão física, não mencionada aqui, para que você não siga um programa de atividade física, mesmo que você queira?</b><br>
          <input type="radio" id="pgt6_sim" name="pgt6" value="sim" <?php echo $pgt6 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt6_sim">Sim</label><br>
          <input type="radio" id="pgt6_nao" name="pgt6" value="nao" <?php echo $pgt6 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt6_nao">Não</label>
        </div>
        <div id="resultadoContainer">
          <b>07. Você tem mais de 65 anos de idade e não está acostumado a exercícios intensos?</b><br>
          <input type="radio" id="pgt7_sim" name="pgt7" value="sim" <?php echo $pgt7 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt7_sim">Sim</label><br>
          <input type="radio" id="pgt7_nao" name="pgt7" value="nao" <?php echo $pgt7 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt7_nao">Não</label>
        </div>
        <div id="resultadoContainer">  
          <label for="pgt8"><b>08. Qual seu objetivo com a pratica de atividade física?</b></label><br>
          <input type="text" name="pgt8" id="pgt8" class="inputPerguntas" value= "<?php echo $pgt8 ?>" required>
        </div>
        <div id="resultadoContainer">
          <b>09. Pratica alguma Atividade Física?</b><br>
          <input type="radio" id="pgt9_sim" name="pgt9" value="sim" <?php echo $pgt9 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt9_sim">Sim</label><br>
          <input type="radio" id="pgt9_nao" name="pgt9" value="nao" <?php echo $pgt9 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt9_nao">Não</label><br><br>
          <label for="pgt10"><b>10. Qual(is) e a quanto tempo?</b></label><br>
          <input type="text" name="pgt10" id="pgt10" class="inputPerguntas" value= "<?php echo $pgt10 ?>">
        </div>
        <div id="resultadoContainer">
          <b>11. Se não pratica, já praticou?</b><br>
          <input type="radio" id="pgt11_sim" name="pgt11" value="sim" <?php echo $pgt11 == 'sim' ? 'checked' : ''?>>
          <label for="pgt11_sim">Sim</label><br>
          <input type="radio" id="pgt11_nao" name="pgt11" value="nao" <?php echo $pgt11 == 'nao' ? 'checked' : ''?>>
          <label for="pgt11_nao">Não</label><br>
          <input type="radio" id="pgt11_pratico" name="pgt11" value="pratico" <?php echo $pgt11 == 'pratico' ? 'checked' : ''?>>
          <label for="pgt11_pratico">Eu Pratico</label><br><br>
          <label for="pgt12"><b>12. Qual(is) e por quanto tempo?</b></label><br>
          <input type="text" name="pgt12" id="pgt12" class="inputPerguntas" value= "<?php echo $pgt12 ?>"><br><br>
          <label for="pgt13"><b>13. E a quanto tempo deixou de praticar?</b></label><br>
          <input type="text" name="pgt13" id="pgt13" class="inputPerguntas" value= "<?php echo $pgt13 ?>">
        </div>
        <div id="resultadoContainer">
          <b>14. Faz quantas refeições por dia?</b><br>
          <input type="radio" id="pgt14_opt1" name="pgt14" value="1" <?php echo $pgt14 == '1' ? 'checked' : ''?> required>
          <label for="pgt14_opt1">1</label><br>
          <input type="radio" id="pgt14_opt2" name="pgt14" value="2" <?php echo $pgt14 == '2' ? 'checked' : ''?> required>
          <label for="pgt14_opt2">2</label><br>
          <input type="radio" id="pgt14_opt3" name="pgt14" value="3" <?php echo $pgt14 == '3' ? 'checked' : ''?> required>
          <label for="pgt14_opt3">3</label><br>
          <input type="radio" id="pgt14_opt4" name="pgt14" value="4" <?php echo $pgt14 == '4' ? 'checked' : ''?> required>
          <label for="pgt14_opt4">4</label><br>
          <input type="radio" id="pgt14_opt5" name="pgt14" value="5" <?php echo $pgt14 == '5' ? 'checked' : ''?> required>
          <label for="pgt14_opt5">5</label><br>
          <input type="radio" id="pgt14_opt6" name="pgt14" value="6" <?php echo $pgt14 == '6' ? 'checked' : ''?> required>
          <label for="pgt14_opt6">6 ou mais</label>
        </div>
        <div id="resultadoContainer">
          <b>15. Faz dieta ou suplementação alimentar?</b><br>
          <input type="radio" id="pgt15_sim" name="pgt15" value="sim" <?php echo $pgt15 == 'sim' ? 'checked' : ''?> required>
          <label for="pgt15_sim">Sim</label><br>
          <input type="radio" id="pgt15_nao" name="pgt15" value="nao" <?php echo $pgt15 == 'nao' ? 'checked' : ''?> required>
          <label for="pgt15_nao">Não</label>
        </div>
        <div id="resultadoContainer">  
          <label for="pgt16"><b>16. Dorme quantas horas por noite?</b></label><br>
          <input type="text" name="pgt16" id="pgt16" class="inputPerguntas" value= "<?php echo $pgt16 ?>" required>
        </div>
        <div id="resultadoContainer">
          <b>17. Nível de treinamento:</b><br>
          <input type="radio" id="pgt17_opt1" name="pgt17" value="1" <?php echo $pgt17 == '1' ? 'checked' : ''?> required>
          <label for="pgt17_opt1">Já treinei a (s) modalidades individualmente</label><br>
          <input type="radio" id="pgt17_opt2" name="pgt17" value="2" <?php echo $pgt17 == '2' ? 'checked' : ''?> required>
          <label for="pgt17_opt2">Nunca competi, mas gosto do treinamento regular</label><br>
          <input type="radio" id="pgt17_opt3" name="pgt17" value="3" <?php echo $pgt17 == '3' ? 'checked' : ''?> required>
          <label for="pgt17_opt3">Nunca competi, mas gosto do treinamento intenso</label><br>
          <input type="radio" id="pgt17_opt4" name="pgt17" value="4" <?php echo $pgt17 == '4' ? 'checked' : ''?> required>
          <label for="pgt17_opt4">Já competi poucas vezes, mas pequenas distâncias</label><br>
          <input type="radio" id="pgt17_opt5" name="pgt17" value="5" <?php echo $pgt17 == '5' ? 'checked' : ''?> required>
          <label for="pgt17_opt5">Já competi acima de três vezes ou já cheguei a fazer distâncias maiores</label><br>
          <input type="radio" id="pgt17_opt6" name="pgt17" value="6" <?php echo $pgt17 == '6' ? 'checked' : ''?> required>
          <label for="pgt17_opt6">Tenho competido frequentemente (até 3X no ano)</label><br>
          <input type="radio" id="pgt17_opt7" name="pgt17" value="7" <?php echo $pgt17 == '7' ? 'checked' : ''?> required>
          <label for="pgt17_opt7"> Tenho competido constantemente (+ de 3 vezes no ano)</label><br>
          <input type="radio" id="pgt17_opt8" name="pgt17" value="8" <?php echo $pgt17 == '8' ? 'checked' : ''?> required>
          <label for="pgt17_opt8">Sempre estou competindo e normalmente obtenho resultados acima da média</label>
        </div>
        <div id="resultadoContainer">  
          <b>Em casos de emergência, quem devemos avisar?</b><br>
          <label for="pgt18"><b>Nome:</b></label>
          <input type="text" name="pgt18" id="pgt18" class="inputPerguntas" value= "<?php echo $pgt18 ?>" required><br>
          <label for="pgt19"><b>Telefone 1:</b></label>
          <input type="text" name="pgt19" id="pgt19" class="inputPerguntas" value= "<?php echo $pgt19 ?>" required><br>
          <label for="pgt20"><b>Telefone 2:</b></label>
          <input type="text" name="pgt20" id="pgt20" class="inputPerguntas" value= "<?php echo $pgt20 ?>" required>
        </div>
        <div>
          <input type="submit" name="update" id="update" value="Confirmar">
        </div>
      </form>
    </main>
    <footer></footer>
  </body>
</html>
