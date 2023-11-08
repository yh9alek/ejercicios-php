<?php
    if($_POST) $iteraciones = $_POST['iteraciones'];
    for($indice = 0; $indice < $iteraciones; $indice++) {
        echo "Número: ".($indice + 1)."<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
    </head>
    <body>
        <form action="ejercicio_12.php" method="post">
            <label for="iteraciones">Número de iteraciones a realizar: </label>
            <input type="number" name="iteraciones">
            <input type="submit" value="Send">
        </form>
    </body>
</html>