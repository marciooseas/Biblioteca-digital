<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1) 
        {
            //caso não exista uma conta, ele não avança
            $_SESSION['mensagem'] = 'Tente novamente ';
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
            exit;   
        }
        else
        {
            // Caso exista uma conta ele abre
            $dado = mysqli_fetch_assoc($result);
            $_SESSION['mensagem'] = 'Seja Bem-Vindo/a ' . $email;
            $_SESSION['email'] = $email; 
            $_SESSION['senha'] = $senha;

            echo $dado["nivel"];
            $_SESSION['nivel'] = $dado["nivel"];
            header('Location: index.php');
            exit; 
        }
    } 
?>