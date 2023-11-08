<?php
    if($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
        if($valorA == $valorB) echo "Valor A es igual a Valor B";
        else if($valorA != $valorB) echo "Valor A es diferente a Valor B";
        else echo "Ahí si ya no se crack :p";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <form action="ejercicio10.php" method="post">
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