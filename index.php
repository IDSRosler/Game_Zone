<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GameZone</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/abas.js"></script>
</head>
<body>
	<div id="principal">

		<section id="cabecalho">
			<?php include_once("cabecalho.php"); ?>
		</section> <!--	fim div cabecalho -->

		<section id="corpo">
			<?php
				$link = (isset($_GET["jogo"])) ? true : false;

				if($link){
					include_once "detalhes.php";
				}
				else{
					include_once "home.php";
				}
			?>
		</section> <!--	fim div corpo -->

		<footer id="rodape">
			<?php include_once("rodape.php"); ?>
		</footer> <!--	fim div rodape -->

	</div> <!--	fim div principal -->
</body>
</html>