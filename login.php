<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameZone - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="principal">
        <div class="corpo_login">
            <div class="login">
                <div class="login_preencher">
                    <form action="classes/manipula_login.php" method="POST">
                    <div class="form-group">
                            <label for="nome">Nome de Usuário</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome de usuário" required>
                            <small id="emailHelp" class="form-text text-muted">Nome de usuário cadastrado na loja</small>
                    </div>
                    <div class="form-group">
                            <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <a href="cadastro.php">Não possuo uma cadastro</a>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>