<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo2.css">
    <title>Cadastro</title>
</head>
<body>

<div>
    <main>

        <form action="salvar.php">

            <header><h1>Cadastro</h1></header>

            <div>
                <label for="username">Nome: </label>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>

            <div>
                <label for="password">Senha: </label>
                <input type="password" name="password" id="password">
            </div>

            <div id="btn">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

    </main>

</div>
    
</body>
</html>