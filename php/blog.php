<?php 
    include('conn_noticias.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM  noticias WHERE id='$id'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linhas = true;
        $linha = $resultado->fetch_assoc();
    }
    else{
        $linhas = false;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo4.css">
    <title>Blog</title>
</head>
<body>
    <main>
    <form action="salvar_noticias.php?id=<?php echo $linha['id'] ?>"></form>
        <?php
            if(isset($_SESSION['logado']) && $_SESSION['logado']){
                echo "<div>";
                    echo "<label>'Texto: '</label>";
                    echo "<textarea name='textoform' id='texto'></textarea>";
                    echo "<input type='submit' value='Enviar'>";
                echo "</div>";
            }else{
                echo "<header><h1>Últimas postagens</h1></header>";
                echo url("mostrar_noticias.php?id=<?php echo $linha['id'] ?>");
            }
      
        ?>
    </main>
    
</body>
</html>