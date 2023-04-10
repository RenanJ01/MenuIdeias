<?php
    include './Assets/conection.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastrar.css"/>
    <title>Cadastrar</title>
</head>

<body>
    <main>
    <form action="\php/painel.php" method="post">
        <fieldset class="fld_form">
            <h1>Cadastrar</h1><br>

            <label for="fname">Nome:</label><br>
            <input type="text" id="fname" name="fname" required><br><br>
    
            <label for="fuser">Nome:</label><br>
            <input type="text" id="fuser" name="fuser" required><br><br>

            <label for="fgenero">Genero:</label><br>
            <input type="radio" id="fgenero" name="fgenero" checked="true" value="Masculino" required><label for="mas">Masculino</label><br>
            <input type="radio" id="fgenero" name="fgenero" value="Feminino"><label for="fem">Feminino</label><br>
            <input type="radio" id="fgenero" name="fgenero" value="Outro"><label for="out">Outro</label><br><br>

            <label for="fpass">Senha:</label><br>
            <input type="password" id="fpass" name="fpass" required><br><br>

            <label for="fidade">Idade:</label><br>
            <input type="number" id="fidade" name="fidade" value="1" min="1" max="200" required><br><br>

            <input class="btn_action" type="submit" value="Cadastrar"> 
            <input class="btn_action" type="reset" value="Redefinir"><br>
        </fieldset>
    </form>
    </main>
</body>

</html>