<?php

function connection(){
    $host       = "localhost/3000";
    $password   = "gamezone";
    $bank       = "gamezone";
    $user       = "root";
    $conn       = mysql_connect($host, $user, $password);
    mysql_select_db($bank);
}

connection();
    
?>