<?php
    class Animal {
        private $tipo;
        private $peso;
        private $altura;

        public function __construct($tipo, $peso, $altura)
        {
            $this->tipo = $tipo;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function mostrarAnimal() {
            return "Tipo: ".$this->tipo.", Peso: ".$this->peso.", Altura: ".$this->altura."<br>";
        }
    }

    $obj = new Animal('Mamifero', '50kg.', 1.76);
    echo $obj->mostrarAnimal();
?>