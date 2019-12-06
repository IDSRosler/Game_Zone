<?php
    include_once "manipulacao_dados.php";

    $nome = (isset($_POST["nome"])) ? $_POST["nome"]: false;
    $jogo = (isset($_POST["jogo"])) ? $_POST["jogo"]: false;
    
    $flag = false;

    $time = time();
    $data = date("y/m/d");
    $con = new data_Manipulation();

    // CLIENTES
    if ($nome)
    {
        $con->set_table("clientes");
        $con->set_fields("*");
        $clientes = $con->select_from_table();

        while ($cliente = mysqli_fetch_assoc($clientes))
        {
            if(!strcmp($nome, $cliente["login"]))
            {
                $id_cliente = $cliente["cpf"];
                $flag = true;
                break;
            }
        }
        // JOGOS
        if ($flag)
        {
            $con->set_table("jogo");
            $con->set_fields("*");
            $jogos = $con->select_from_table();

            while ($jg = mysqli_fetch_assoc($jogos))
            {
                if(!strcmp($jogo, $jg["titulo_jogo"]))
                {
                    $id_jogo = $jg["id_jogo"];
                    $cont = $jg["unidades"];
                    if ($cont > 0)
                    {
                        $cont--;
                        $con->set_fields("unidades = '$cont'");
                        $con->set_table_value("id_jogo");
                        $con->set_search_value($jg["id_jogo"]);
                        $con->update();
                        // INSERIR NO CARRINHO
                        $con->set_table("carrinho");
                        $con->set_fields("id_cliente, id_jogo, data_compra");
                        $con->set_data("'$id_cliente','$id_jogo', '$data'");
                        $con->insert();
                        echo "<script type=\"text/javascript\">alert(\"Seu produto foi adicionado ao carrinho, muito obrigado pela compra.\");history.go(-1);</script>\n";
                        break;
                    }
                    else
                    {
                        echo "<script type=\"text/javascript\">alert(\"Desculpe! O jogo está indisponível no momento.\");history.go(-1);</script>\n";
                    }
                }
            }
        }
        else
        {
            echo "<script type=\"text/javascript\">alert(\"Seu nome não consta na lista de login, faça seu cadastro em nossa loja.\");history.go(-1);</script>\n";
        }
    }
    else
    {
        echo "<script type=\"text/javascript\">alert(\"Faça o login em sua conta.\");history.go(-1);</script>\n";
    }
?>