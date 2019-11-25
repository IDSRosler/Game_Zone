<div id="corpo_loja">
	<aside class="banner">
		<img src="imagens/banner.jpg" width="100%">
	</aside>
	<section class="categorias">
		<form action="http://localhost/Game_Zone/" method="GET">	
			<h2 class="fundo_cinza"> Plataformas </h2>
			<nav>
				<ul>
					<li><input type="checkbox" name="playstation"> PlayStation </li>
					<li><input type="checkbox" name="xbox"> XBox </li>
					<li><input type="checkbox" name="computador"> Computador </li>
				</ul>
			</nav>
			<h2 class="fundo_cinza"> Categorias </h2>
			<nav>
				<ul>
						<li><input type="checkbox" name="acao" href="acao" autofocus> Ação </li>
						<li><input type="checkbox" name="aventura"> Aventura </li>
						<li><input type="checkbox" name="sporte"> Esportes </li>
				</ul>
			</nav>
			<input type="submit" value="Pesquisar"/>
		</form>
	</section>
	<div id="lado_direito">
		<h3 class="titulo fundo_cinza"> Lista de jogos </h3>
		<section class="vitrine">
			<ul>
				<?php

				//CONTINUAR AQUI

					include_once "classes/dados-banco.php";
					$con 	  = new dados();
					$detalhes = $con->list_jogo();
					if (isset($_GET["pesquisa"])){
						$pesquisa = $_GET["pesquisa"];
						$lpesq = strtolower($pesquisa);
						while ($jogo = mysqli_fetch_assoc($detalhes))
						{
							$ljogo = strtolower($jogo['titulo_jogo']);
							if (!(strcmp($lpesq, $ljogo)) and !(strcmp($jogo['ativo_jogo'], "1")))
							{
								list_game($jogo);
							}
						}
					}
					else {
						while ($jogo = mysqli_fetch_assoc($detalhes))
						{
							if (!(strcmp($jogo['ativo_jogo'], "1")))
							{
								list_game($jogo);
							}
						}
					}

					function list_game($jogo)
					{
						echo "
									<li>	
										<a href='#'>		
											<figure>
												<img src=$jogo[imagem_produto] alt=$jogo[titulo_jogo]>
												<figcaption>$jogo[titulo_jogo]</figcaption>
											</figure>
											<h4> Categoria: $jogo[id_categoria] </h4>
											<h4> Platafoema: $jogo[id_plataforma] </h4><br>
											<span> RS $jogo[preco] </span>
											<form action=''>
												<input type='submit' value=''>
											</form>
										</a>
									</li>	
								";
					}
				?>
			</ul>
		</section>
	</div>
</div>