<?php
    include_once "classes/manipulacao_dados.php";
    // Dados da tabela categoria
    class dados
    {
        private $con;

        public function __construct()
        {
            $this->con = new data_Manipulation();
        }

        public function get_categoria()
        {
            $this->con->set_table("categoria");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }

        public function get_plataforma()
        {
            $this->con->set_table("plataforma");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }

        public function list_jogo()
        {
            $this->con->set_table("jogo");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }

        public function list_categoria()
        {
            $this->con->set_table("categoria");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }

        public function list_plataforma()
        {
            $this->con->set_table("plataforma");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }

        public function list_admin()
        {
            $this->con->set_table("administracao");
            $this->con->set_fields("*");
            return $this->con->select_from_table();
        }
    }
?>