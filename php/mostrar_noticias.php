<?php
    include('conn_noticias.php');

    $sql = "SELECT * FROM noticias";
    $resultado = $conn->query($sql);

?>