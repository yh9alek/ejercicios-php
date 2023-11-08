<?php
    $nombre = 'Sin nombre ';
    $apellido = 'sin apellido';
    if($_POST) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
    }
    echo $nombre." ".$apellido;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <form action="ejercicio4.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>