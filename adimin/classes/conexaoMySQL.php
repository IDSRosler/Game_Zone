<?php
    class connectionMySQL
    {
        protected $host;
        protected $user;
        protected $password;
        protected $database;
        protected $link;
        protected $query;
        protected $data;

        public function __construct()
        {
            $this->host     = "localhost";
            $this->user     = "root";
            $this->password = "";
            $this->database = "gamezone";
            self::connection();
        }

        function connection()
        {
            $this->link = @mysqli_connect($this->host,$this->user, $this->password) or die("Não foi possivel conectar com o servidor do banco de dados".mysql_error());
            $this->database = @mysqli_select_db($this->link,$this->database) or die("Não foi possivel conectar a base de dados".mysql_error());
        }

        function execute($comand){
            $this->query = @mysqli_query($this->link,$comand) or die("Erro ao executar o comando SQL: $comand <br>".mysql_error());
            return $this->query;
        }

        function list($query)
        {
            $this->data = @mysqli_fetch_assoc($this->query);
            return $this->data;
        }
    }
?>