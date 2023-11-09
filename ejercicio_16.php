<?php
    $numeroAleatorio = rand(1, 10);
    echo $numeroAleatorio;

    $nombre = 'Yohan';
    $minus = strtolower($nombre);

    $hoy = date('y - m - d');
    echo $hoy;

    /*
    FUNCIONES DE PHP
    
    gettype(<variable>): Obtener tipo de dato

    is_dato(<variable>): Comprobar si es ese tipo de dato. Ejemplo:
                - is_string()
                - is_float()
                - is_integer()
                - is_nan()
                - is_null()
                - etc. Hay de todo xd.

    isset(<variable>): Comprobar si existe la definición de la variable en cuestión.

    unset(<variable>): Eliminar una variable de la memoria y su definición el el código.

    trim(<string>): Limpiar espacios en blanco de un string.

    empty(<variable>): Comprobar si la variable está vacía.

    strlen(<string>): Obtener el tamaño de una cadena.

    strpos(<string>, <string>): Obtener la posición de origen de un caracter o un
    conjunto de caracteres dentro de un string.

    str_replace(<string>, <string>, <string>): Remplaza un caracter o un conjunto
    de caracteres encontrados en el tercer parametro por el segundo parametro.

    strtolower(<string>): Convertir un string a minúsculas.
    strtoupper(<string>): Convertir un string a mayúsculas.
    */
?>