<?php
    class Persona {
        protected $nombre;

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    }

    class Trabajador extends Persona {
        private $puesto;

        public function getPuesto() {
            return $this->puesto;
        }

        public function setPuesto($puesto) {
            $this->puesto = $puesto;
        }

        public function mostrarTrabajador() {
            return "Nombre: ".$this->nombre.", Puesto: ".$this->puesto."<br>";
        }
    }

    $obj = new Trabajador();
    $obj->setNombre('Yohan');
    $obj->setPuesto('Programador');
    echo $obj->mostrarTrabajador();
    
?>