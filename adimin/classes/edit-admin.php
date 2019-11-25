<?php
    include_once "manipulacao_dados.php";

    $id     = $_POST["id"];
    $camp  = $_POST["camp"];

    $exp = explode(' ', $camp);
    $flag = 0;
    foreach ($exp as $palavra)
    {
        if ($palavra == "senha"){
            $flag = 1;
        }
    }
    if ($flag == 1){
        $flag = 0;
        header("Location: http://localhost/Game_Zone/adimin/?link=8");
    }
    else{
        $con = new data_Manipulation();

        //INSERT
        $con->set_table("administracao");
        $con->set_fields($camp);
        $con->set_table_value("id_admin");
        $con->set_search_value($id);
        $con->update();

        header("Location: http://localhost/Game_Zone/adimin/?link=8");
    }
?>