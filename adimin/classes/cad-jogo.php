<?php
    include_once "manipulacao_dados.php";

    $titulo     = $_POST["titulo"];
    $categoria  = $_POST["cat"];
    $plataforma = $_POST["plat"];
    $preco      = $_POST["preco"];
    $desc       = $_POST["desc"];
    $cont       = $_POST["cont"];
    $url        = $_POST["url"];
    $ativo      = $_POST["ativo"];

    if ($ativo == "Ativo"){
        $ativo = "1";
    }
    else{
        $ativo = "0";
    }

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("jogo");
    $con->set_fields("id_categoria, id_plataforma, titulo_jogo, preco, descricao, conteudo, ativo_jogo, imagem_produto");
    $con->set_data("'$categoria', '$plataforma', '$titulo', '$preco', '$desc', '$cont', '$ativo', '$url'");
    $con->insert();

    header("Location: http://localhost/Game_Zone/adimin/?link=1");
?>
