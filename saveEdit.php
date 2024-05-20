<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
      
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    include_once('config.php');

    if(isset($_POST['update'])){
   
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
      $nome = $_POST['nome'];
      $telefone = $_POST['telefone'];
      $genero = $_POST['genero'];
      $data_nasc = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $sqlUpdate = "UPDATE perguntas SET pgt1='$pgt1',pgt2='$pgt2',pgt3='$pgt3',pgt4='$pgt4',pgt5='$pgt5',pgt6='$pgt6',pgt7='$pgt7',pgt8='$pgt8',pgt9='$pgt9',pgt10='$pgt10',pgt11='$pgt11',pgt12='$pgt12',pgt13='$pgt13',pgt14='$pgt14',pgt15='$pgt15',pgt16='$pgt16',pgt17='$pgt17',pgt18='$pgt18',pgt19='$pgt19',pgt20='$pgt20' WHERE email='$logado'";
      
      $result = $conexao->query($sqlUpdate);

      $sqlUpdate2 = "UPDATE atletas SET nome='$nome',telefone='$telefone',genero='$genero',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE email='$logado'";

      $result2 = $conexao->query($sqlUpdate2);

    }
    header('Location: painelAtleta.php');
?>