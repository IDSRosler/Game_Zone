<div id="cabecalho_superior">
	<nav id="menu_cima">
		<?php if ($user){ echo "<h5> | </h5><h4>$user </h4><h5> | </h5><a class=sair href=http://localhost/Game_Zone/>Sair</a>";} ?>
		<ul>
			<li><a href="carrinho.php<?php if (isset($_GET["nome"])){ echo "?nome=$_GET[nome]"; } ?>"> Meu carrinho</a></li>
			<li><a href="login.php"> Logar</a></li>
			<li><a href="cadastro.php"> Cadastrar</a></li>
		</ul>
	</nav>
</div>
<div id="cabecalho_meio" class="fundo_cinza">
	<h1> GameZone </h1>
	<?php include_once "classes/cont_itens.php"; ?>
	<p class="sacola"> <?php echo "$cont"; ?> Itens</p>
	<section class="busca">
		<form action="http://localhost/Game_Zone/" method="GET">
			<?php if (isset($_GET["nome"])){ echo "<input type=hidden name=nome value=$user>";} ?>
			<label>
				<input type="search" name="pesquisa" id="pesquisa" placeholder="Pesquisar">
				<input type="submit" value="">
			</label>
		</form>
	</section>
</div>
<div id="cabecalho_inferior">
	<nav id="menu_principal">
		<ul>
			<li class="linha_vertical"><a href="http://localhost/Game_Zone/<?php if (isset($_GET["nome"])){echo "?nome=$user";}?>"> Home </a></li>
			<li><a href="#"> Quem Somos </a></li>
		</ul>
	</nav>
</div>