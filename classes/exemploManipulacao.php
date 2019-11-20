<?php
    include_once "manipulacao_dados.php";

    $con = new data_Manipulation();

    $con->set_table("pessoa");

    // INSERT BEGIN
    $con->set_fields("Id_pessoa, nome, email");
    $con->set_data("4, 'Lucas', 'lucas@gmail.com'");
    $con->insert();
    // INSERT END

    // DELETE BEGIN
    $con->set_table_value("email");
    $con->set_search_value("joao@gmail.com");
    //$con->delete();
    // DELETE END

    // UPDATE BEGIN
    $con->set_fields("nome = 'Eduardo', email = 'eduardo@gmail.com'");
    $con->set_table_value("Id_pessoa");
    $con->set_search_value("3");
    //$con->update();
    // UPDATE END

    echo $con->get_msg();

?>