<?php
    class Persona {
        public $nombre;

        public function asignarNombre($nuevo) {
            $this->nombre = $nuevo;
        }

        public function obtenerNombre() {
            return $this->nombre;
        }
    }

    $obj1 = new Persona();
    $obj1->asignarNombre('Yohan');
    echo $obj1->obtenerNombre()."<br>";

    $obj2 = new Persona();
    $obj2->asignarNombre($obj1->obtenerNombre()." Alek");
    echo $obj2->obtenerNombre();
?>