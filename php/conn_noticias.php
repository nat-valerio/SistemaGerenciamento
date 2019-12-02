<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = 'sist-gerencia';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Erro ao estabeleccer conexão com o banco de dados");
    }