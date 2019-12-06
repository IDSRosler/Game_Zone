<div id="corpo_loja">
	<aside class="banner">
		<img src="imagens/banner.jpg" width="100%">
	</aside>
	<section class="cad_banner red"></section>
	</section>
	<div id="lado_direito">
		<?php
			include_once "classes/dados-banco.php";
			$con = new dados();
			$titulo_jogo = (isset($_GET["jogo"])) ? $_GET["jogo"] : false;
			$detalhes = $con->list_jogo();
			while ($del = mysqli_fetch_assoc($detalhes))
			{
				if (!strcmp($del["titulo_jogo"], $titulo_jogo)){
					$jogo = $del;
					break;
				}
			}
		?>
		<section class="vitrine">
			<div id="cx_produto">
				<a href="#"><img src=<?php echo $jogo["imagem_produto"] ?> alt="Uncharted 4" height="100%"></a>
			</div>
			<div id="cx_titulo_produto">
				<h1><a href=""> <?php echo $jogo["titulo_jogo"] ?> </a></h1>
			</div>
			<div id="cx_preco_produto">
				<span> Valor: </span><strong> R$ <?php echo $jogo["preco"] ?> </strong>
			</div>

			<div class="carac_plat_produto space_center">
				<h3> <?php echo $jogo["id_categoria"] ?> </h3>
			</div>
			<div class="carac_plat_produto">
				<h4> <?php echo $jogo["id_plataforma"] ?> </h4>
			</div>
			<div id="descricao_produto">
				<h2> Descrição do jogo </h2>
				<?php echo $jogo["descricao"] ?>
			</div>
			<div id="comprar_produto">
				<form action="classes/comprar.php" method="POST">
					<input type='hidden' name='nome' value='<?php echo "$user"; ?>' >
                    <input type='hidden' name='jogo' value='<?php echo "$jogo[titulo_jogo]" ?>'>
					<input type="submit" value="">
				</form>
			</div>
			<section id="abas-geral">
				<ul class="menu">
					<li><a href="#aba01"> Descrição </a></li>
					<li><a href="#aba02"> Conteúdo </a></li>
				</ul>
				<section id="box">
					<div id="aba01" class="conteudo">
						<article id="descricao">
							<h2> Descrição </h2>
							<p>
								<?php echo $jogo["descricao"] ?>
							</p>
						</article>
					</div>
					<div id="aba02" class="conteudo">
						<article id="descricao">
							<h2> Conteudo </h2>
							<p>
								<?php echo $jogo["conteudo"] ?>
							</p>
						</article>
					</div>
				</section>
			</section>
		</section>
	</div>
</div>