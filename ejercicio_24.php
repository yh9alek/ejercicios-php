<?php
    $server = 'localhost';
    $db = 'login';
    $user = 'root';
    $pass = '';

    try{
        $conexion = new PDO("mysql:host=$server;dbname=$db;", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Insertar Datos en Login
        $sql = "INSERT INTO users (email, password) VALUES ('yh9dev@gmail.com', 'El marciano');";
        $conexion->exec($sql);
        echo "Se insertó con éxito";
    }
    catch(PDOException $error) {
        echo "Ocurrió un error: $error";
    }
    

?>