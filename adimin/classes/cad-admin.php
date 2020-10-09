<?php
    include_once "manipulacao_dados.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $senha = password_hash("$senha", PASSWORD_BCRYPT);

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("administracao");
    $con->set_fields("nome, email, login, senha");
    $con->set_data("'$nome', '$email', '$login', '$senha'");
    $con->insert();

    header("Location: http://localhost/Game_Zone/adimin/?link=7");
?>