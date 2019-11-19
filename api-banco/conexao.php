<?php
    
    $host     = 'localhost';
    $user     = 'root';
    $password = '';
    $database = 'gamezone';

    $link = mysqli_connect($host,$user,$password,$database) or die('Não foi possível conectar com o banco de dados');
    mysqli_select_db($link, $database) or die('Não foi possível conectar com a base de dados');

?>