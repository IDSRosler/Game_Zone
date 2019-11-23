<?php
    include_once "conexaoMySQL.php";
    // Dados da tabela categoria
    class dados extends connectionMySQL
    {
        private $campo;
        private $tabela;
        private $cmd;


        function get_categoria()
        {
            $this->tabela = "categoria";
            $this->campo = "categoria";
            $this->cmd = "SELECT * FROM categoria";
            return self::execute($this->cmd);
        }

        function get_plataforma()
        {
            $this->tabela = "plataforma";
            $this->campo = "plataforma";
            $this->cmd = "SELECT * FROM plataforma";
            return self::execute($this->cmd);
        }
    }
?>