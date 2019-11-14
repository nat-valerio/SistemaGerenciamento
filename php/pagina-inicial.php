<?php
    session_start();

    if(!isset($_SESSION['login'])){
        $_SESSION['login'] = "false";
    }

    if($_SESSION['login'] == "false"){
        $login = "Deslogado";
    }
    else{
        $login = "Logado";
    }

    $login = $_SESSION['login'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Blog</title>
</head>
<body>
    <div>
        <header>    
            <h1>Seja bem vindo!</h1>
            <h3>Situação: <?php $_SESSION ? "Logado" : "Deslogado" ?></h3>
        </header>

        <nav>
            <a href="cadastro.php">Cadastre-se</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    
</body>
</html>