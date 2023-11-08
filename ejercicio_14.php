<?php
    if($_POST) $iteraciones = intval($_POST['iteraciones']);
    $i = 0;
    while($i < $iteraciones) {
        echo "Número: ".($i + 1)."<br>";
        $i++;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 14</title>
    </head>
    <body>
        <form action="ejercicio_14.php" method="post">
            <label for="iteraciones">Número de iteraciones a realizar: </label>
            <input type="number" name="iteraciones">
            <input type="submit" value="Send">
        </form>
    </body>
</html>