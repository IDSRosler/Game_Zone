<table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">categoria</th>
        <th scope="col">ativo_categoria</th>
        <th scope="col">descrição_categoria</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include_once "classes/dados-banco.php";
            $con = new dados();
            $select = $con->list_categoria();
            while ($list = mysqli_fetch_assoc($select)){
                echo "
                    <tr>
                        <th> $list[categoria] </th>
                        <td> $list[ativo_categoria] </td>
                        <td> $list[descricao_categoria] </td>
                    </tr>
                ";
            }
        ?>
  </tbody>
</table>
<div id="atualizar">
    <form action="classes/edit-categoria.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="id">categoria</label>
            <input type="text" class="form-control" id="id" placeholder="ex:Arcade" name="id" required>
            </div>
            <div class="form-group col-md-6">
            <label for="camp ">campos</label>
            <input type="text" class="form-control" id="camp" placeholder="ex:ativo_categoria = '1', descricao_categoria = 'Nova descrição ...'" name="camp" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>