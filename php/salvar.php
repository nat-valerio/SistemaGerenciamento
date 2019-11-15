<?php
    
    include('conn.php');

    $usuario = $_POST['username'];
    $email = $_POST['email'];
    $senha = $_POST['password'];
    $senha = md5($senha);

    $sql= "INSERT INTO usuarios (usuario, email, senha) 
            VALUES ('$usuario', '$email', '$senha')";

    $conn->query($sql);
