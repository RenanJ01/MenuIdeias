<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Login</title>
</head>

<body>
    <form action="resultado.php" method="post">
        <fieldset class="fld_form">
            <label for="fuser">Username:</label><br>
            <input type="text" id="fuser" name="fuser" required><br><br>
            
            <label for="fpass">Senha:</label><br>
            <input type="password" id="fpass" name="fpass" required><br><br>

            <input type="submit" value="Enviar"> <input type="reset" value="Redefinir"><br>
        </fieldset>
    </form>
</body>

</html>