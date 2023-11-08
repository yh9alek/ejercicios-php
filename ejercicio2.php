<?php
    $nombre = 'No hay un nombre aún';
    if($_POST) $nombre = $_POST['nombre'];
    echo $nombre;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <form action="ejercicio2.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>