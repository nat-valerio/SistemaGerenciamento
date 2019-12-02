<?php

    session_start();

    include('conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE usuarios='$email'";

    if($resultado->num_rows > 0){
        $linha = $resultado->fetch_assoc();
        if($linha["senha"] == md5($senha)){
            echo "Login efetuado com sucesso";
            $_SESSION['login'] = "true";
            header('Location: index.php');
        } 
        else{
            echo "Usuário ou senha inválido";
        }
    }
    else{
        echo "Usuário ou senha inválido";
    }
?>