<?php
    include_once "manipulacao_dados.php";

    $titulo = $_POST["titulo"];
    $categoria = $_POST["cat"];
    $plataforma = $_POST["plat"];
    $preco = $_POST["preco"];
    $desc = $_POST["desc"];
    $cont = $_POST["cont"];

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("jogo");
    $con->set_fields("titulo, categoria, plataforma, preco, descricao, conteudo");
    $con->set_data("'$titulo', '$categoria', '$plataforma', '$preco', '$desc', '$cont'");
    $con->insert();
?>
