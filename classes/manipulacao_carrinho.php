<?php 
    include_once "classes/manipulacao_dados.php";

    $nome = (isset($_GET["nome"])) ? $_GET["nome"] : false;

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

        if($if_jogos)
        {
            head();
            while ($if_jogo = mysqli_fetch_assoc($if_jogos))
            {
                $con->set_table("jogo");
                $con->set_fields("*");
                $con->set_table_value("id_jogo");
                $con->set_search_value("$if_jogo[id_jogo]");
                $jogos = $con->select_from_table_search();
                
                // CONTINUAR AQUI
            }
        }
        
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
                    <th scope='row'></th>
                    <td></td>
                    <td>$jogo[titulo_jogo]</td>
                    <td>$jogo[id_plataforma]</td>
                    <td>$jogo[id_categoria]</td>
                    <td>$jogo[preco]</td>
                    <td>$data</td>
                </tr>
            </tbody>
        ";
    }
?>