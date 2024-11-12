<?php
    namespace app\model;

    class pessoa{
        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $cpfCnpj;
        private $tipo;
        private $telefone;
        private $endereco;
    
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getNomeCompleto(){
            return $this->nome . " " . $this->sobrenome;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function getCpfCnpj(){
            $this->cpfCnpj;
        }

        public function setCpfCnpj($cpfCnpj){
            $this->cpfCnpj = $cpfCnpj;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getEndereco(){
            return $this->endereco;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getIdade(){
            if(isset($this->dataNascimento)){
                $idade = $this->dataNascimento->;
            }
        }

    }


?>