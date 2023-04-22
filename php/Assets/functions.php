<?php
//Login//
function Login(){
    
}

//Logoff//
function Logoff(){
    session_start();
    session_destroy();
    header("Location: '..//index.php'"); exit;
}

//Cadastro//

/*Verificação dos Valores das variaveis*/
function Verif_var($data)
{
    if (is_string($data)) {
        if (($data == "") || ($data == null)) {
            $data = "Desconhecido";
        }
    } else if (is_int($data)) {
        if (($data == "") || ($data == null)) {
            $data = 0;
        }
    }
}

// Funções de Segurança na Inserção
function tratar_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inserção das variaveis
function Cadastro($conc)
{
    //$name = $username = $senha = $idade = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $nameErr = "Nome é requisitada.";
        } else {
            $name = tratar_input($_POST["fname"]);
        }
        if (empty($_POST["fuser"])) {
            $usernameErr = "Username é requisitada.";
        } else {
            $username = tratar_input($_POST["fuser"]);
        }
        if (empty($_POST["fpass"])) {
            $senhaErr = "Senha é requisitada.";
        } else {
            $senha = tratar_input($_POST["fpass"]);
        }
        if (empty($_POST["fidade"])) {
            $idadeErr = "Idade é requisitada.";
        } else {
            $idade = tratar_input($_POST["fidade"]);
        }
        if (empty($_POST["fgenero"])) {
            $genderErr = "Genero é requisitada.";
        } else {
            $gender = tratar_input($_POST["fgenero"]);
        }
    }

    Verif_var($name);
    Verif_var($username);
    Verif_var($senha);
    Verif_var($idade);
    Verif_var($gender);

    $res = $conc->Con_Insert_cadastro($name, $username, $senha, $gender, $idade);

    if ($res) {
        return $res = "bem Sucedido";
    }
}
