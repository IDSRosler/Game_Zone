<?php
    include_once "manipulacao_dados.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $senha = password_hash("$senha", PASSWORD_BCRYPT);

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("administrador");
    $con->set_fields("nome, email, senha");
    $con->set_data("'$nome', '$email', '$senha'");
    $con->insert();
?>