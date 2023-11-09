<?php
    $frutas = array('🍐', '🍎', '🍇', '🥥');  // Array Común
    print_r($frutas);
    echo "<br>";

    $carros = array('m' => 'Mercedes', 'ch' => 'Chervrolet', 'h' => 'Hundai'); // Array Asociativo
    print($carros['m']);

    foreach($carros as $carro => $nombre) {   // Podemos iterar con foreach siguiedo esta estructura
        echo $nombre."<br>";
    }

    $arreglo = array('mango' => '🥭', '🚙', true, 'ferrari' => '🛒', 4 => 50, null);
    print_r($arreglo);                        /* Array con elementos asociados y no asociados (Asociativo común)
                                                 Por defecto los indices de los elementos que no tienen alguna
                                                 asociación comenzarán a partir del último indice numérico
                                                 asignado. En este caso null adquiere como indice '5' ya que
                                                 el último indice númerico asignado hasta ese momento fue el 4
                                                 y el carrito verde comienza en 0, puesto que aún no se había
                                                 asignado ningún indice númerico y por defecto es 0.*/
    /*
    FUNCIONES PARA ARRAYS
    
    asort(<array>): Ordenar un array por orden alfabético. [A~Z]
    arsort(<array>): Ordenar un array por orden alfabético inverso. [Z~A]
    sort(<array>): Ordenar un array por orden alfabético y además ordenar numéricamente.

    $arrayejemplo[] = <valor>: Añadir un elemento a un array.
    array_push(<array>, <valor>): Añadir un elemento a un array.
    array_pop(<array>): Eliminar el último elemento de un array.
    Se puede usar unset() para eliminar cualquier elemento de un array.
    array_rand(<array>): Devuelve un elemento aleatorio de un array.
    array_reverse(<array>): Devuelve un array invertido.
    array_search(<valor>, <array>): Buscar un elemento dentro de un array Devuelve
    un booleano.
    count(<array>): Contar número de elementos de un array.
    */
?>