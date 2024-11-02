<?php

    class Query{
        private $sql;
        private $registros;
        private $connection;

        private $lastQuery;

    public function getSql() {
        return $this->sql;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }

    public function getRegistros() {
        return $this->registros;
    }

    public function setRegistros($registros) {
        $this->registros = $registros;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function setConnection($connection) {
        $this->connection = $connection;
    }

    public function getLastQuery() {
        return $this->lastQuery;
    }

    public function setLastQuery($lastQuery) {
        $this->lastQuery = $lastQuery;
    }

        public function Open(){
            $this-> lastQuery = pg_query($this->connection->getInternalConnection());
            if($this->lastQuery){
                //returna a quantidade de linhas da query
                $this->registros = pg_num_rows($this->lastQuery);
                return true;
            }
            return false;
        }

        public function getNextRow(){
            $row = pg_fetch_assoc($this->lastQuery);
            if($row){
                return $row;
            }
            return false;
        }


    }

?>