<?php
    //Cadastrar
    require_once("..\\Assets\\conection.php");
    include_once("..\\Assets\\functions.php");
    
    $conc = new Conexao();
    $nameErr = $usernameErr = $senhaErr = $genderErr = $idadeErr = "";
    $name = $username = $senha = $gender = $idade = "";

    $msg = Cadastro($conc);

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
        <?php
            echo $msg;
            
            //Codigo de redirecionamento
            //header("Location: ..//painel.php");
            //die();
        ?>
    </main>
</body>

</html>