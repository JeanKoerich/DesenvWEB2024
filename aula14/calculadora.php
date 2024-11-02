<?php 

    class Calculadora {
        private $operador1;
        private $operador2;
        private $valorMemoria;
        private $operando;

        public function setOperador1($valor) {
            $this->operador1 = $valor;
        }        
        public function setOperador2($valor) {
            $this->operador2 = $valor;
        }
        public function setOperando($operando) {
            $this->operando = $operando;
        }
        public function calcula() {
            switch ($this->operando) {
                case '+':
                    $this->valorMemoria = $this->soma();
                    break;                
                case '-':
                    $this->valorMemoria = $this->subtrai();
                    break;
            };
        }
        private function soma() {
            return $this->operador1 + $this->operador2;
        }
        private function subtrai() {
            return $this->operador1 - $this->operador2;
        }

        public function escreveResultado() {
            return "Resultado = " . $this->valorMemoria;
        }
        
    }

?>