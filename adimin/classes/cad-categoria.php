<?php
    include_once "manipulacao_dados.php";

    $categoria = $_POST["cat"];
    $ativo     = $_POST["ativo"];
    $desc      = $_POST["desc"];

    if ($ativo == "Ativo"){
        $ativo = "1";
    }
    else{
        $ativo = "0";
    }

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("categoria");
    $con->set_fields("categoria, ativo_categoria, descricao_categoria");
    $con->set_data("'$categoria', '$ativo', '$desc'");
    $con->insert();

    header("Location: http://localhost/Game_Zone/adimin/?link=3");
?>
