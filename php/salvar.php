<?php
    
    include('conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    $sql= "INSERT INTO Usuarios (nome, email, senha) 
            VALUES ('$nome', '$email', '$senha')";
        
    if($conn->query($sql) == TRUE){
       echo "Dado inserido com sucesso!";
       header('Location: blog.php');
    }
    else{
       echo "Erro: ". $conn->error;
    }        
    $conn->close();
