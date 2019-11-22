<?php
    include_once "conexaoMySQL.php";
    // Dados da tabela categoria
    class categoria extends connectionMySQL
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
    }
?>