<?php

    class conexaoBd{
        private $host;
        private $porta;
        private $userName;
        private $password;
        private $database;
        private $dbconn;

        public function setHost($host){
            $this -> host = $host;
        }
        public function setPorta($porta){
            $this -> porta = $porta;
        }
        public function setUserName($userName){
            $this -> userName = $userName;
        }
        public function setDatabase($database){
            $this -> database = $database;
        }
        public function setPassword($password){
            $this -> password = $password;
        }
        public function conectar(){
            try {
                $this -> dbconn = pg_connect($this -> getConnectionsString());
                if($this -> dbconn){
                    return true;
                }
            } catch (Exception $e) {
                //$this -> setStatus('Erro: ') . $e -> getMenssage();
            }
        }
        private function getConnectionsString(){
            return  "host=". $this -> host .
                    " port=". $this -> porta .
                    " dbname=". $this -> database .
                    " user=". $this -> userName .
                    " password=". $this -> password;
        }
        public function getInternalConnection(){
            return $this-> dbconn;
        }
    }    

?>