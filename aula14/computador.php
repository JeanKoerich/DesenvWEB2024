<?php 

    class computador {
        private $status;
        public function ligar() {
            $this->status = "Ligado";
            return $this->getStatus();
        }
        public function desligar() {
            $this->status = "Desligado";
            return $this->getStatus();
        }
        
        public function getStatus() {
            return $this->status;
        }

    }

?>