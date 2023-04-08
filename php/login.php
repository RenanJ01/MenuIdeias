<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css" />
    <title>Login</title>
</head>

<body>

    <!-- Principal - Formulario -->
    <main>
    <form action="painel.php" method="post">
        <fieldset class="fld_form">

            <h1>Login</h1><br>

            <label for="fuser">Username:</label><br>
            <input type="text" id="fuser" name="fuser" required><br><br>
            
            <label for="fpass">Senha:</label><br>
            <input type="password" id="fpass" name="fpass" required><br><br>

            <input class="btn_action" type="submit" value="Entrar"><br>
        </fieldset>
    </form>
    </main>

    <!-- Rodapé -->
    <footer>

    </footer>
</body>

</html>