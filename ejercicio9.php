<?php
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        if(($valorA != $valorB) && ($valorA > $valorB)) {
            echo "ValorA es diferente a ValorB y además es Mayor";
        }
    }
    // && - and   AND Devuelve true si ambos operandos son verdaderos
    // || - or    OR  Devuelve true si alguno de los operandos es verdadero
    // !          NOT Niega un operando (invierte) o niega el valor de una comparación
    // xor        XOR Devuelve true si alguno de los operandos es verdadero pero no si ambos lo son
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <form action="ejercicio9.php" method="post">
        <label for="valorA">Numero 1:</label>
            <input type="text" name="valorA">
            <br>
            <label for="valorB">Numero 2:</label>
            <input type="text" name="valorB">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>