<?php
    $host = 'localhost';
    $db = 'login';
    $user = 'root';
    $pass = '';

    try
    {
        $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión Exitosa";
    }
    catch(PDOException $error) {
        echo "Ocurrió un error: $error";
    }
?>