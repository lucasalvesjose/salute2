<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //ACESSA
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('E-mail: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM atletas WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        $sql2 = "SELECT * FROM perguntas WHERE email = '$email'";

        $result2 = $conexao->query($sql2);

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1) {
            //print_r('Usuário ou senha inválidos!');
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');

        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            if(mysqli_num_rows($result2) < 1){
                header('Location: sistema.php');
            }
            else{
                header('Location: painelAtleta.php');
            }
            
        }
    }
    else{
        //NÃO ACESSA
        header('Location: login.php');
    }
?>