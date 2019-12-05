<?php
    include_once "classes/dados-banco.php";
    $con 	  = new dados();
    $detalhes = $con->list_jogo();

    $check[0] = (isset($_GET["playstation"])) ? "playstation" : false;
    $check[1] = (isset($_GET["xbox"])) ? "xbox" : false;
    $check[2] = (isset($_GET["computador"])) ? "computador" : false;
    $check[3] = (isset($_GET["acao"])) ? "ação" : false;
    $check[4] = (isset($_GET["aventura"])) ? "aventura" : false;
    $check[5] = (isset($_GET["esporte"])) ? "esporte" : false;

    $user = (isset($_GET["nome"]))  ? $_GET["nome"] : false;

    $i = 0;
    foreach ($check as $teste){
        if($teste != false){
            $sel[$i] = $teste;
            $i++;
        }
    }
    if(!empty($sel)){
        while ($jogo = mysqli_fetch_assoc($detalhes))
        {
            $lcat = strtolower($jogo['id_categoria']);
            $lplat = strtolower($jogo['id_plataforma']);
            foreach ($sel as $busca){
                if ((!(strcmp($lcat, $busca)) xor !(strcmp($lplat, $busca))) and !(strcmp($jogo['ativo_jogo'], "1")))
                {
                    list_game($user,$jogo);
                    break;
                }
            }
        }
    }
    elseif (isset($_GET["pesquisa"])){
        $pesquisa = $_GET["pesquisa"];
        $lpesq = strtolower($pesquisa);
        while ($jogo = mysqli_fetch_assoc($detalhes))
        {
            $ljogo = strtolower($jogo['titulo_jogo']);
            if (!(strcmp($lpesq, $ljogo)) and !(strcmp($jogo['ativo_jogo'], "1")))
            {
                list_game($user,$jogo);
            }
        }
    }
    else {
        while ($jogo = mysqli_fetch_assoc($detalhes))
        {
            if (!(strcmp($jogo['ativo_jogo'], "1")))
            {
                list_game($user,$jogo);
            }
        }
    }

    function list_game($user,$jogo)
    {
        if ($user)
        {
            echo "
                <li>
                    <a href='?nome=$user&jogo=$jogo[titulo_jogo]'>
                        <figure>
                            <img src=$jogo[imagem_produto] alt=$jogo[titulo_jogo]>
                            <figcaption>$jogo[titulo_jogo]</figcaption>
                        </figure>
                        <h4> Categoria: $jogo[id_categoria] </h4>
                        <h4> Platafoema: $jogo[id_plataforma] </h4>
                        <h4> Unidades: $jogo[unidades] </h4><br>
                        <span> RS $jogo[preco] </span>
                        <form action=''>
                            <input type='submit' value=''>
                        </form>
                    </a>
                </li>
            ";
        }
        else
        {
            echo "
                <li>
                    <a href='?jogo=$jogo[titulo_jogo]'>
                        <figure>
                            <img src=$jogo[imagem_produto] alt=$jogo[titulo_jogo]>
                            <figcaption>$jogo[titulo_jogo]</figcaption>
                        </figure>
                        <h4> Categoria: $jogo[id_categoria] </h4>
                        <h4> Platafoema: $jogo[id_plataforma] </h4>
                        <h4> Unidades: $jogo[unidades] </h4><br>
                        <span> RS $jogo[preco] </span>
                        <form action=''>
                            <input type='submit' value=''>
                        </form>
                    </a>
                </li>
            ";
        }
    }
?>