<div id="corpo_loja">
	<aside class="banner">
		<img src="imagens/banner.jpg" width="100%">
	</aside>
	<section class="categorias">
		<form action="http://localhost/Game_Zone/" method="GET">
			<?php if (isset($_GET["nome"])){ echo "<input type=hidden name=nome value=$user>";} ?>
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
						<li><input type="checkbox" name="esporte"> Esportes </li>
				</ul>
			</nav>
			<input type="submit" value="Pesquisar"/>
		</form>
	</section>
	<div id="lado_direito">
		<h3 class="titulo fundo_cinza"> Lista de jogos </h3>
		<section class="vitrine">
			<ul>
				<?php include_once "listar_jogos.php"; ?>
			</ul>
		</section>
	</div>
</div>