<?php
    include_once "manipulacao_dados.php";

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $con = new data_Manipulation();

    // Clientes
    $con->set_table("clientes");
    $con->set_fields("*");
    $clientes = $con->select_from_table();

    while ($cliente = mysqli_fetch_assoc($clientes))
    {
        if (!strcmp($cliente["login"], $nome) and password_verify($senha, $cliente["senha"])){
            header("Location: http://localhost/Game_Zone/");
            exit;
        }
    }
    // Admnistradores
    $con->set_table("administracao");
    $con->set_fields("*");
    $admin = $con->select_from_table();

    while ($adm = mysqli_fetch_assoc($admin))
    {
        if (!strcmp($adm["login"], $nome) and password_verify($senha, $adm["senha"])){
            header("Location: http://localhost/Game_Zone/adimin/");
            exit;
        }
    }
    echo "<script type=\"text/javascript\">alert(\"Não foi possível fazer o login, verifique seu nome de usuário e senha.\");history.go(-1);</script>\n";
?>