<?php
    include_once "manipulacao_dados.php";

    $id     = $_POST["id"];
    $camp  = $_POST["camp"];

    $con = new data_Manipulation();

    $con->set_table("jogo");
    $con->set_fields($camp);
    $con->set_table_value("id_jogo");
    $con->set_search_value($id);
    $con->update();

    header("Location: http://localhost/Game_Zone/adimin/?link=2");
?>