<table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">id_admin</th>
        <th scope="col">nome</th>
        <th scope="col">email</th>
        <th scope="col">login</th>
        <th scope="col">senha</th>

    </tr>
  </thead>
  <tbody>
        <?php
            include_once "classes/dados-banco.php";
            $con = new dados();
            $select = $con->list_admin();
            while ($list = mysqli_fetch_assoc($select)){
                echo "
                    <tr>
                        <th> $list[id_admin] </th>
                        <td> $list[nome] </td>
                        <td> $list[email] </td>
                        <td> $list[login] </td>
                        <td> $list[senha] </td>
                    </tr>
                ";
            }
        ?>
  </tbody>
</table>
<div id="atualizar">
    <form action="classes/edit-admin.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="id">id_admin</label>
            <input type="text" class="form-control" id="id" placeholder="ex:1" name="id" required>
            </div>
            <div class="form-group col-md-6">
            <label for="camp ">campos</label>
            <input type="text" class="form-control" id="camp" placeholder="ex:nome = 'Admin', login = 'Admin'" name="camp" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>