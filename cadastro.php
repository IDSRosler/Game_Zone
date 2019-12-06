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
            <aside class="banner">
                <img src="imagens/banner.jpg" width="100%">
            </aside>
            <section class="cad_banner"></section>
            <div id="lado_direito">
                <section class="vitrine_cad">
                    <form action="cadastro/cadastro_cliente.php" method="POST">
                        <div class="linha"></div>
                        <h2>Dados Pessoais</h2>
                        <div class="linha"></div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" required>
                            </div>
                            <div class="col-md-6 mb-4">
                            <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="email">@</span>
                                    </div>
                                    <input type="email'" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                             <div class="col-md-6 mb-4">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="ex: 999.999.999-99" name="cpf" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="tel">Telefone</label>
                                <input type="text" class="form-control" id="tel" placeholder="ex: (DDD)99999-9999" name="tel" required>
                            </div>
                        </div>
                        <div class="linha"></div>
                        <h2>Dados de Localização</h2>
                        <div class="linha"></div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" id="rua" placeholder="Informe sua rua" name="rua" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="cid">Cidade</label>
                                <input type="text" class="form-control" id="cid" placeholder="Informe sua cidade" name="cid" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="comp">Complemento</label>
                                <input type="text" class="form-control" id="comp" placeholder="Complemento" name="comp">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="est">Estado</label>
                                <select id="est" class="form-control" name="est">
                                    <option selected>AC</option>
                                    <option>AL</option>
                                    <option>AP</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>MG</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PR</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>SC</option>
                                    <option>SP</option>
                                    <option>SE</option>
                                    <option>TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="linha"></div>
                        <h2>Dados de acesso</h2>
                        <div class="linha"></div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="user">Usuário</label>
                                <input type="text" class="form-control" id="user" placeholder="Usuário" name="user" required>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
                            </div>
                        </div>
                        <div class="linha"></div>
                        <button class="btn btn-primary" type="submit">Cadastrar </button>
                    </form>
                </section>
            </div>
		</section> <!--	fim div corpo -->

		<footer id="rodape" class="baixo ajuste_padding">
			<?php include_once("rodape.php"); ?>
		</footer> <!--	fim div rodape -->

	</div> <!--	fim div principal -->
</body>
</html>