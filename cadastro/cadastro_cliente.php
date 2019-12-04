<?php
    include_once "../classes/manipulacao_dados.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $tel = $_POST["tel"];

    $rua = $_POST["rua"];
    $cid = $_POST["cid"];
    $comp = $_POST["comp"];
    $est = $_POST["est"];

    $user = $_POST["user"];
    $senha = $_POST["senha"];  

    $senha = password_hash("$senha", PASSWORD_BCRYPT);
    $flag = 0;

    $con = new data_Manipulation();

    $con->set_table("clientes");
    $con->set_fields("cpf");
    $cpft = $con->select_from_table();
    while ($cpfs = mysqli_fetch_assoc($cpft))
    {
        if(!strcmp($cpf, $cpfs["cpf"]))
        {
            $flag = 1;
        }
    }
    if ($flag == 0){
        $con->set_table("clientes");
        $con->set_fields("cpf, nome_cliente, email, telefone, rua, cidade, complemento, estado, login, senha");
        $con->set_data("'$cpf','$nome','$email','$tel','$rua','$cid','$comp','$est','$user','$senha'");
        $con->insert();
        echo "<script type=\"text/javascript\">alert(\"Registro gravado com sucesso.\");history.go(-1);</script>\n";
        header("Location: http://localhost/Game_Zone/");
    }   
    else
    {
        echo "<script type=\"text/javascript\">alert(\"Erro ao gravar o registro, CPF já cadastrado.\");history.go(-1);</script>\n";
    }
?>