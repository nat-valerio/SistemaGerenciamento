<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo3.css">
    <title>Login</title>
</head>
<body>

    <div>
        <header><h1>Login</h1></header>

        <main>
            <form action="verifica.php" method="post">
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email">
                </div>

                <div>
                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password">
                </div>

                <div id="btnLog">
                    <input type="submit" value="Logar">
                </div>
            </form>

        </main>
    </div>
    
</body>
</html>