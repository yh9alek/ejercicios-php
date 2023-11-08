<?php
    if($_POST) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
                                                            // > Mayor
        if($numero1 > $numero2) {                           // < Menor
            echo "Numero 1 mayor a Numero 2";               // >= Mayor o Igual
            return;                                         // <= Menor o Igual
        }                                                   // == Igual
        if($numero1 < $numero2) {                           // != Diferente
            echo "Numero 1 menor a Numero 2";               // <> Diferente
            return;
        }                                                   // === Exacto (PHP no convertirá los operandos)
        if($numero1 >= $numero2) {                          // !== No es exacto (Lo mismo que exacto)
            echo "Numero 1 mayor o igual a Numero 2";       // <=> Devuelve un número entero menor, igual o mayor
            return;                                         //     que 0 si es que el primer operando cumple esta
        }                                                   //     misma condición.  Introducido en PHP 7
        if($numero1 <= $numero2) {
            echo "Numero 1 menor o igual a Numero 2";
            return;
        }
        if($numero1 == $numero2) {
            echo "Numero 1 igual a Numero 2";
            return;
        }
        if($numero1 != $numero2) {
            echo "Numero 1 diferente a Numero 2";
            return;
        }
        if($numero1 <> $numero2) {
            echo "Numero 1 diferente a Numero 2";
            return;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <form action="ejercicio8.php" method="post">
        <label for="numero1">Numero 1:</label>
            <input type="text" name="numero1">
            <br>
            <label for="numero2">Numero 2:</label>
            <input type="text" name="numero2">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>