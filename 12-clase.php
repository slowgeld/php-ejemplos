<?php
 class calculadora {
        public $primerNumero;
        public $segundoNumero;

        public function __construct($num1 = 0, $num2 = 0) {
            $this->primerNumero = $num1;
            $this->segundoNumero = $num2;
        }

        public function sumar() {
            return $this->primerNumero + $this->segundoNumero;
        }
        
        public function restar() {
            return $this->primerNumero - $this->segundoNumero;
        }

        public function multiplicar() {
            return $this->primerNumero / $this->segundoNumero;
        }
        
        public function dividir() {
            if ($this->segundoNumero != 0) {
                return $this->primerNumero / $this->segundoNumero;
            } else {
                return "Error: División por cero";
            }
        }
        
        public function potencia() {
            return pow($this->primerNumero, $this->segundoNumero);
        }

        public function raiz() {
            if ($this->primerNumero >= 0) {
                return sqrt($this->primerNumero);
            } else {
                return "Error: Raíz cuadrada de un número negativo";
            }
        }    
    }
?>