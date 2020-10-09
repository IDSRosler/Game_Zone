<div id="cadastro_jogo">
    <div id="form">
    <form action="classes/cad-plataforma.php" method="POST">

        <label for="plat">Plataforma</label>
        <input type="text" class="form-control" id="plat" placeholder="Titulo" name="plat" required>

        <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" id="ativo" name="ativo">
                <option>Ativo</option>
                <option>Não ativo</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="desc">Descrição</label>
            <textarea class="form-control" id="desc" placeholder="Descrição" name="desc" required></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Cadastar</button>

    </form>
    </div>
</div>