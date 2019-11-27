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

    $flag = 0;

    if ($ativo == "Ativo"){
        $ativo = "1";
    }
    else{
        $ativo = "0";
    }

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("jogo");
    $con->set_fields("*");
    $jogos = $con->select_from_table();

    $title = strtolower($titulo);
    $plat = strtolower($plataforma);

    while ($jogo = mysqli_fetch_assoc($jogos))
    {
        $ltitulo = strtolower($jogo["titulo_jogo"]);
        $lplat = strtolower($jogo["id_plataforma"]);
        if(!strcmp($ltitulo,$title) and !strcmp($lplat,$plat)){
            $uni = $jogo["unidades"] + 1;
            $flag = 1;
            $ultimo_jogo = $jogo;
            break;
        }
    }
    if($flag == 0){
        $con->set_fields("id_categoria, id_plataforma, titulo_jogo, preco, descricao, conteudo, ativo_jogo, unidades,imagem_produto");
        $con->set_data("'$categoria', '$plataforma', '$titulo', '$preco', '$desc', '$cont', '$ativo', '1','$url'");
        $con->insert();
    }
    else{
        $con->set_fields("unidades = '$uni'");
        $con->set_table_value("id_jogo");
        $con->set_search_value($ultimo_jogo["id_jogo"]);
        $con->update();
    }

    header("Location: http://localhost/Game_Zone/adimin/?link=1");
?>
