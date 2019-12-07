<?php
	include_once "classes/manipulacao_dados.php";
	$user = (isset($_GET["nome"])) ? $_GET["nome"] : false;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GameZone</title>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="js/abas.js"></script>
    <script type="text/javascript" src="js/alert.js"></script>
</head>
<body>
	<div id="principal">

		<section id="cabecalho" class="alin">
			<?php include_once("cabecalho.php"); ?>
        </section> <!--	fim div cabecalho -->

        <section id="corpo">
			<div class="carrinho">
				<table class="table">
					<?php include_once "classes/manipulacao_carrinho.php"; ?>
				</table>
			</div>
			<?php if($flag){ img_carrinho(); } ?>
		</section> <!-- fim div corpo -->

        <footer id="rodape">
			<?php include_once("rodape.php"); ?>
		</footer> <!--	fim div rodape -->
	</div> <!--	fim div principal -->
</body>
</html>