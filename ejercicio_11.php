<?php
    if($_POST) {
        $opcion = $_POST['opcion'];
        switch($opcion) {
            case 1:
                echo "Se ingresó un 1";
                break;
            case 2:
                echo "Se ingresó un 2";
                break;
            case 3:
                echo "Se ingresó un 3";
                break;
            default:
                echo "No se ingreso ninguno de las opciones";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 11</title>
    </head>
    <body>
        <form action="ejercicio_11.php" method="post">
            <label>Ingresa una opción</label>
            <input type="submit" name="opcion" value="1">
            <input type="submit" name="opcion" value="2">
            <input type="submit" name="opcion" value="3">
        </form>
    </body>
</html>