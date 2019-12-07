<?php
    include_once "classes/manipulacao_dados.php";

    $nome = (isset($_GET["nome"])) ? $_GET["nome"] : false;
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
        $con->set_fields("id_jogo");
        $con->set_table_value("id_cliente");
        $con->set_search_value("$id_cliente[cpf]");
        $if_jogos = $con->select_from_table_search();

        while ($if_jogo = mysqli_fetch_assoc($if_jogos))
        {
            $cont++;
        }
    }
?>