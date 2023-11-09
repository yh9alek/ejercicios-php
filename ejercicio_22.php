<?php
    class MiClase { 
        public static $atributoDeClase;
        public static function metodoDeClase() {
            echo "Hola desde esta clase";
        }
    }
    $obj = new MiClase();
    MiClase::$atributoDeClase = 50;
    $obj->metodoDeClase();
    $obj::$atributoDeClase = 100;
    // $obj->$atributoDeClase = 0; ERROR
    echo MiClase::$atributoDeClase;
    MiClase::metodoDeClase();
    /* Dato curioso: en PHP las instancias pueden acceder al contexto estatico (Apesar de que no debería ser así)
       al igual que la clase lo pueden hacer con el operador '::', en el caso de los metodos se pueden acceder
       desde una instancia ya sea con '::' o con '->' pero no con los atributos estaticos, estos solo con '::'*/
?>