<?php
    $numero1 = null;
    $numero2 = null;
    if($_POST) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        // Suma
        $suma = $numero1 + $numero2;
        // Resta
        $resta = $numero1 - $numero2;
        // Multiplicación
        $multi = $numero1 * $numero2;
        // División
        $division = $numero1 / $numero2;

        echo "<br>Suma: ".$suma;
        echo "<br>Resta: ".$resta;
        echo "<br>Multiplicación: ".$multi;
        echo "<br>División: ".$division."<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <form action="ejercicio7.php" method="post">
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