<?php
    include_once "conexaoMySQL.php";

    class data_Manipulation extends connectionMySQL
    {
        protected $command;
        protected $table;
        protected $fields;
        protected $data;
        protected $msg;
        protected $table_value;
        protected $search_value;

        public function set_table($table)
        {
            $this->table = $table;
        }

        public function set_fields($fields)
        {
            $this->fields = $fields;
        }

        public function set_data($data)
        {
            $this->data = $data;
        }

        public function set_table_value($table_value)
        {
            $this->table_value = $table_value;
        }

        public function set_search_value($search_value)
        {
            $this->search_value = $search_value;
        }

        public function get_msg()
        {
            return $this->msg;
        }

        public function insert()
        {
            $this->command = "INSERT INTO $this->table ($this->fields) VALUES ($this->data)";
            if(self::execute($this->command))
            {
                $this->msg = "Registro gravado com sucesso!";
                return true;
            }
            return false;
        }

        public function delete()
        {
            $this->command = "DELETE FROM $this->table WHERE $this->table_value = '$this->search_value'";
            if(self::execute($this->command))
            {
                $this->msg = "Registro deletado com sucesso";
            }
        }

        public function update()
        {
            $this->command = "UPDATE $this->table SET $this->fields WHERE $this->table_value = '$this->search_value'";
            if(self::execute($this->command))
            {
                $this->msg = "Registro atualizado com sucesso";
            }
        }

        public function select_from_table()
        {
            $this->command = "SELECT $this->fields FROM $this->table";
            return self::execute($this->command);
        }

        public function select_from_table_search()
        {
            $this->command = "SELECT $this->fields FROM $this->table WHERE $this->table_value = '$this->search_value'";
            return self::execute($this->command);
        }

        public function select_from_table_count()
        {
            $this->command = "SELECT COUNT($this->fields) AS cont FROM $this->table WHERE $this->table_value = '$this->search_value'";
            return self::execute($this->command);
        }
    }
?>1