<?php

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = 'usuarios';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Erro aaoo essttaabelleccer ccoonexão com o baancco dded daddos");
    }