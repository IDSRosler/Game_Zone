<table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">plataforma</th>
        <th scope="col">ativo_plataforma</th>
        <th scope="col">descrição_plataforma</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include_once "classes/dados-banco.php";
            $con = new dados();
            $select = $con->list_plataforma();
            while ($list = mysqli_fetch_assoc($select)){
                echo "
                    <tr>
                        <th> $list[plataforma] </th>
                        <td> $list[ativo_plataforma] </td>
                        <td> $list[descricao_plataforma] </td>
                    </tr>
                ";
            }
        ?>
  </tbody>
</table>
<div id="atualizar">
    <form action="classes/edit-plataforma.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="id">plataforma</label>
            <input type="text" class="form-control" id="id" placeholder="ex:XBox" name="id" required>
            </div>
            <div class="form-group col-md-6">
            <label for="camp ">campos</label>
            <input type="text" class="form-control" id="camp" placeholder="ex:ativo_plataforma = '1', descricao_plataforma = 'Nova descrição ...'" name="camp" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>