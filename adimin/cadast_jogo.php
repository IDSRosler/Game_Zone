<?php
    include_once "classes/dados-banco.php";
    $con = new categoria();
    $categoria = $con->get_categoria();
?>
<div id="cadastro_jogo">
    <div id="form">
    <form action="classes/cad-jogo.php" method="POST">

        <label for="titullo">Título</label>
        <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo" required>

        <label for="preco">Preço</label>
        <input type="text" class="form-control" id="preco" placeholder="R$ 0,00" name="preco" required>

        <div class="form-group">
        <label for="cat">Categoria</label>
        <select class="form-control" id="cat" name="cat">
            <option>Ação</option>
            <option>Aventura</option>
            <option>Esporte</option>
        </select>
        </div>

        <div class="form-group">
        <label for="plat">Plataforma</label>
        <select class="form-control" id="plat" name="plat">
            <option>PlayStation</option>
            <option>XBox</option>
            <option>Computador</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="desc">Descrição</label>
            <textarea class="form-control" id="desc" placeholder="Descrição" name="desc" required></textarea>
        </div>

        <div class="mb-3">
            <label for="cont">Conteúdo</label>
            <textarea class="form-control" id="cont" placeholder="Conteúdo" name="cont" required></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Cadastar</button>

    </form>
    </div>
</div>