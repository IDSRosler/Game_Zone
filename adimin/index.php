<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GameZone</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
                    //$link = $_GET["link"];

                    $pag[0] = "home.php";
                    $pag[1] = "#";

                    if(!empty($link))
                    {
                        if(file_exists($pag[$link]))
                        {
                            include $pag[$link];
                        }
                        else
                        {
                            include "home.php";
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