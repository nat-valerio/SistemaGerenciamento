<?php
    
    include('conn_noticias.php');

    $id = $_POST['id'];
    $texto = $_POST['texto'];

    $sql= "INSERT INTO usuarios (id, texto) 
            VALUES ('$id', '$texto')";

    $conn->query($sql);
