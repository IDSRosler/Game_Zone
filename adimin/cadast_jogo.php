<div id="cadastro_jogo">
    <div id="form">
    <form action="classes/cad-jogo.php" method="POST">

        <label for="titullo">Título</label>
        <input type="text" class="form-control" id="titulo" placeholder="Titulo" name="titulo" required>

        <label for="preco">Preço</label>
        <input type="text" class="form-control" id="preco" placeholder="R$ 0,00" name="preco" required>

        <label for="url">URL da imagem do jogo</label>
        <input type="text" class="form-control" id="url" placeholder="URL" name="url" required>

        <div class="form-group">
            <label for="cat">Categoria</label>
            <select class="form-control" id="cat" name="cat">
                <?php
                    include_once "classes/dados-banco.php";
                    $con = new dados();
                    $categoria = $con->get_categoria();
                    while ($cat = mysqli_fetch_assoc($categoria)){
                        echo "
                            <option> $cat[categoria] </option>
                        ";
                    }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="plat">Plataforma</label>
            <select class="form-control" id="plat" name="plat">
                <?php
                    include_once "classes/dados-banco.php";
                    $con = new dados();
                    $plataforma = $con->get_plataforma();
                    while ($plat = mysqli_fetch_assoc($plataforma)){
                        echo "
                            <option> $plat[plataforma] </option>
                        ";
                    }
                ?>
            </select>
        </div>

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

        <div class="mb-3">
            <label for="cont">Conteúdo</label>
            <textarea class="form-control" id="cont" placeholder="Conteúdo" name="cont" required></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Cadastar</button>

    </form>
    </div>
</div>