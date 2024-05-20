<?php
  if(!empty($_GET['email'])){

    include_once('config.php');

    $email = $_GET['email'];

    $sqlSelect = "SELECT * FROM perguntas WHERE email = '$email'";
    $sqlSelect2 = "SELECT * FROM atletas WHERE email = '$email'";
    $result = $conexao->query($sqlSelect);
    $result2 = $conexao->query($sqlSelect2);

    if($result->num_rows >0){

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
    }
    else{
      header('Location: index.php');
    }

  }   
      

?>  
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SALUTE - Informações do Atleta</title>
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
        </nav>
      </div>
    </header>
    <main>
      <h2>Informações pessoais:</h2>
      <div id="resultadoContainer">
        <b>Nome Completo:</b><br>
        <?php echo "$nome" ?>
      </div>
      <div id="resultadoContainer"> 
        <b>Telefone:</b><br>
        <?php echo "$telefone" ?>
      </div>
      <div id="resultadoContainer">
        <b>Gênero:</b><br>
        <?php echo $genero == 'feminino' ? 'Feminino' : ''?>
        <?php echo $genero == 'masculino' ? 'Masculino' : ''?>
        <?php echo $genero == 'outro' ? 'Outro' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>Data de Nascimento:</b><br>
        <?php echo "$data_nasc" ?>
      </div>
      <div id="resultadoContainer">
        <b>Cidade:</b><br>
        <?php echo "$cidade" ?> 
      </div>
      <div id="resultadoContainer">
        <b>Estado:</b><br>
        <?php echo "$estado" ?>
      </div>
      <div id="resultadoContainer">
        <b>Endereço:</b><br>
        <?php echo "$endereco" ?>
      </div><br>
      <h2>Informações de saúde:</h2>
      <div id="resultadoContainer">
        <b>01. O seu médico já lhe disse alguma vez que você tem um problema cardíaco?</b><br>
        <?php echo $pgt1 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt1 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>02. Você tem dores no peito com freqüência?</b><br>
        <?php echo $pgt2 == 'sgim' ? 'Sim' : ''?>
        <?php echo $pgt2 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>03. Você desmaia com freqüência ou tem episódios importantes de vertigem?</b><br>
        <?php echo $pgt3 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt3 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>04. Algum médico já lhe disse que a sua pressão arterial estava muito alta?</b><br>
        <?php echo $pgt4 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt4 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>05. Algum médico já lhe disse que você tem um problema ósseo ou articular, como, por exemplo, artrite, que se tenha agravado com o exercício ou que possa piorar com ele?</b><br>
        <?php echo $pgt5 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt5 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>06. Existe alguma boa razão física, não mencionada aqui, para que você não siga um programa de atividade física, mesmo que você queira?</b><br>
        <?php echo $pgt6 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt6 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>07. Você tem mais de 65 anos de idade e não está acostumado a exercícios intensos?</b><br>
        <?php echo $pgt7 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt7 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">  
        <b>08. Qual seu objetivo com a pratica de atividade física?</b><br>
        <?php echo "$pgt8" ?>
      </div>
      <div id="resultadoContainer">
        <b>09. Pratica alguma Atividade Física?</b><br>
        <?php echo $pgt9 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt9 == 'nao' ? 'Não' : ''?><br><br>
        <b>10. Qual(is) e a quanto tempo?</b><br>
        <?php echo "$pgt10" ?>
      </div>
      <div id="resultadoContainer">
        <b>11. Se não pratica, já praticou?</b><br>
        <?php echo $pgt11 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt11 == 'nao' ? 'Não' : ''?>
        <?php echo $pgt11 == 'pratico' ? 'Eu pratico' : ''?><br><br>
        <b>12. Qual(is) e por quanto tempo?</b><br>
        <?php echo "$pgt12" ?><br><br>
        <b>13. E a quanto tempo deixou de praticar?</b><br>
        <?php echo "$pgt13" ?>
      </div>
      <div id="resultadoContainer">
        <b>14. Faz quantas refeições por dia?</b><br>
        <?php echo $pgt14 == '1' ? 'Uma' : ''?>
        <?php echo $pgt14 == '2' ? 'Duas' : ''?>
        <?php echo $pgt14 == '3' ? 'Três' : ''?>
        <?php echo $pgt14 == '4' ? 'Quatro' : ''?>
        <?php echo $pgt14 == '5' ? 'Cinco' : ''?>
        <?php echo $pgt14 == '6' ? 'Seis ou mais' : ''?>
      </div>
      <div id="resultadoContainer">
        <b>15. Faz dieta ou suplementação alimentar?</b><br>
        <?php echo $pgt15 == 'sim' ? 'Sim' : ''?>
        <?php echo $pgt15 == 'nao' ? 'Não' : ''?>
      </div>
      <div id="resultadoContainer">  
        <b>16. Dorme quantas horas por noite?</b><br>
        <?php echo "$pgt16" ?>
      </div>
      <div id="resultadoContainer">
        <b>17. Nível de treinamento:</b><br>
        <?php echo $pgt17 == '1' ? 'Já treinei a (s) modalidades individualmente' : ''?>
        <?php echo $pgt17 == '2' ? 'Nunca competi, mas gosto do treinamento regular' : ''?>
        <?php echo $pgt17 == '3' ? 'Nunca competi, mas gosto do treinamento intenso' : ''?>
        <?php echo $pgt17 == '4' ? 'Já competi poucas vezes, mas pequenas distâncias' : ''?>
        <?php echo $pgt17 == '5' ? 'Já competi acima de três vezes ou já cheguei a fazer distâncias maiores' : ''?>
        <?php echo $pgt17 == '6' ? 'Tenho competido frequentemente (até 3X no ano)' : ''?>
        <?php echo $pgt17 == '7' ? 'Tenho competido constantemente (+ de 3 vezes no ano)' : ''?>
        <?php echo $pgt17 == '8' ? 'Sempre estou competindo e normalmente obtenho resultados acima da média' : ''?>
      </div>
      <div id="resultadoContainer">  
        <b>Em casos de emergência, quem devemos avisar?</b><br>
        <b>Nome:</b>
        <?php echo "$pgt18" ?><br>
        <b>Telefone 1:</b>
        <?php echo "$pgt19" ?><br>
        <b>Telefone 2:</b>
        <?php echo "$pgt20" ?>
      </div><br>
    </main>
    <footer></footer>
  </body>
</html>
