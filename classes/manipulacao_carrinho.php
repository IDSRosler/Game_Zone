<?php 
    include_once "classes/manipulacao_dados.php";

    $nome = (isset($_GET["nome"])) ? $_GET["nome"] : false;
    $flag = false; 
    $cont = 0;

    $con = new data_Manipulation();

    if ($nome)
    {
        $con->set_table("clientes");
        $con->set_fields("cpf");
        $con->set_table_value("login");
        $con->set_search_value("$nome");
        $id_cliente = $con->select_from_table_search();
        $id_cliente = mysqli_fetch_assoc($id_cliente);

        $con->set_table("carrinho");
        $con->set_fields("id_jogo, data_compra");
        $con->set_table_value("id_cliente");
        $con->set_search_value("$id_cliente[cpf]");
        $if_jogos = $con->select_from_table_search();

        while ($if_jogo = mysqli_fetch_assoc($if_jogos))
        {
            $con->set_table("jogo");
            $con->set_fields("*");
            $con->set_table_value("id_jogo");
            $con->set_search_value("$if_jogo[id_jogo]");
            $jogos = $con->select_from_table_search();
            $jogo = mysqli_fetch_assoc($jogos);
            $data = date('d/m/Y', strtotime($if_jogo["data_compra"]));
            $cont++;
            head();
            body($jogo, $data);
        }
        if ($cont == 0)
        {
            body_empty();
            $flag=true;
        }
    }
    else
    {
        body_empty();
        $flag=true;
    }

    function head()
    {
        echo "
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'></th>
                    <th scope='col'>Nome do jogo</th>
                    <th scope='col'>Plataforma</th>
                    <th scope='col'>Categoria</th>
                    <th scope='col'>Preço</th>
                    <th scope='col'>Data da compra</th>
                </tr>
            </thead>
        ";
    }
    function body($jogo, $data)
    {
        echo "
            <tbody>
                <tr>
                    <td scope='row'>
                        <figure  class='img_size'>
                            <img src='$jogo[imagem_produto]' alt='$jogo[titulo_jogo]'>
                        </figure>
                    </td>
                    <td><h5>$jogo[titulo_jogo]</h5></td>
                    <td><h5>$jogo[id_plataforma]</h5></td>
                    <td><h5>$jogo[id_categoria]</h5></td>
                    <td><h5>R$ $jogo[preco]</h5></td>
                    <td><h5>$data</h5></td>
                </tr>
            </tbody>
        ";
    }
    function body_empty()
    {
        echo "
            <div class=color>
                <tbody>
                    <tr>
                        <td><h4>Seu carrinho está vazio</h4></td>
                    </tr>
                </tbody>
            </div>
        ";
    }
    function img_carrinho()
    {
        echo "
            <img class=img_carrinho src='imagens/sonic.png' alt='Sonic'>
            <div class=footer_position></div>
        ";
    }
?>