<?php
    include_once "manipulacao_dados.php";

    $plataforma = $_POST["plat"];
    $desc       = $_POST["desc"];
    $ativo      = $_POST["ativo"];

    if ($ativo == "Ativo"){
        $ativo = "1";
    }
    else{
        $ativo = "0";
    }

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("plataforma");
    $con->set_fields("plataforma, ativo_plataforma, descricao_plataforma");
    $con->set_data("'$plataforma', '$ativo', '$desc'");
    $con->insert();

    header("Location: http://localhost/Game_Zone/adimin/?link=5");
?>