<?php
    include_once "manipulacao_dados.php";

    $id     = $_POST["id"];
    $camp  = $_POST["camp"];

    $con = new data_Manipulation();

    //INSERT
    $con->set_table("plataforma");
    $con->set_fields($camp);
    $con->set_table_value("plataforma");
    $con->set_search_value($id);
    $con->update();

    header("Location: http://localhost/Game_Zone/adimin/?link=6");
?>