<table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">id_Jogo</th>
        <th scope="col">id_categoria</th>
        <th scope="col">id_plataforma</th>
        <th scope="col">titulo_jogo</th>
        <th scope="col">preço</th>
        <th scope="col">descricao</th>
        <th scope="col">conteudo</th>
        <th scope="col">ativo_jogo</th>
        <th scope="col">unidades</th>
        <th scope="col">imagem_produto</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include_once "classes/dados-banco.php";
            $con = new dados();
            $select = $con->list_jogo();
            while ($list = mysqli_fetch_assoc($select)){
                echo "
                    <tr>
                        <th> $list[id_jogo] </th>
                        <td> $list[id_categoria] </td>
                        <td> $list[id_plataforma] </td>
                        <td> $list[titulo_jogo] </td>
                        <td> $list[preco] </td>
                        <td> $list[descricao] </td>
                        <td> $list[conteudo] </td>
                        <td> $list[ativo_jogo] </td>
                        <td> $list[unidades] </td>
                        <td> $list[imagem_produto] </td>
                    </tr>
                ";
            }
        ?>
  </tbody>
</table>
<div id="atualizar">
    <form action="classes/edit-jogo.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="id">id_Jogo</label>
            <input type="text" class="form-control" id="id" placeholder="ex:1" name="id" required>
            </div>
            <div class="form-group col-md-6">
            <label for="camp ">campos</label>
            <input type="text" class="form-control" id="camp" placeholder="ex:id_categoria = 'Esposte', preco = '300,00'" name="camp" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>