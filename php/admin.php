<?php

    session-start();

    include('conn.php');

    $usuario = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuarios='$usuario'";

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
}