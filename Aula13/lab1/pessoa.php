<?php

    class pessoa{
        private $nome;
        private $sobrenome;
        private $idade;

        public function __construct() {
            $this->idade = 0;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getNomeCompleto(){
            return $this->nome . " " . $this->sobrenome;
        }

        public function getIdade(){
            return $this->idade = 0;
        }

    }


?>