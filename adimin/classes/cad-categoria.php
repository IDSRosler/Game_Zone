<?php
    include_once "manipulacao_dados.php";

    $categoria = $_POST["cat"];
    $url = $_POST["url"];

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("categoria");
    $con->set_fields("categoria, url");
    $con->set_data("'$categoria', '$url'");
    $con->insert();
?>
