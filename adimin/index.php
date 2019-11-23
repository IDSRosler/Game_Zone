<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GameZone</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/abas.js"></script>
</head>
<body>
	<div id="principal">

		<div id="cabecalho">
			<?php include_once("cabecalho.php"); ?>
        </div> <!--	fim div cabecalho -->
        <div id="corpo">
            <div id="esquerdo">
                <?php include_once("menu.php"); ?>
            </div>
            <div id="direito">
                <?php
                    if($_GET){
                        $link = $_GET["link"];
                    }
                    else{
                        $link = 0;
                    }            

                    $pag[0] = "home.php";
                    $pag[1] = "cadast_jogo.php";
                    $pag[2] = "#";
                    $pag[3] = "cadast_categoria.php";
                    $pag[4] = "#";
                    $pag[5] = "cadast_plataforma.php";
                    $pag[6] = "#";
                    $pag[7] = "cadast_admin.php";
                    $pag[8] = "#";

                    if(!empty($link))
                    {
                        if(file_exists($pag[$link]))
                        {
                            include $pag[$link];
                        }
                        else
                        {
                            include $pag[0];
                        }
                    }
                    else
                    {
                        include "home.php";
                    }
                ?>
            </div>
        </div>

	</div> <!--	fim div principal -->
</body>
</html>