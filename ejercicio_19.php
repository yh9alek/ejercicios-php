<?php
    class Vehiculo {
        private $marca;
        private $modelo;
        private $color;

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        public function getColor() {
            return $this->color;
        }

        public function setColor($color) {
            $this->color = $color;
        }

        public function mostrarVehiculo() {
            return "Marca: ".$this->marca."<br>"."Modelo: ".$this->modelo."<br>"."Color: ".$this->color."<br>";
        }
    }

    $obj = new Vehiculo();
    $obj->setMarca('Chervrolet');
    $obj->setModelo('2024');
    $obj->setColor('NEGRO');
    echo $obj->mostrarVehiculo(); // Mostrar atributos
    echo $obj->getColor(); // Obtener un atributo privado
?>