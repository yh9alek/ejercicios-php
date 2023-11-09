<?php
    $server = 'localhost';
    $db = 'login';
    $user = 'root';
    $pass = '';

    try{
        $conexion = new PDO("mysql:host=$server;dbname=$db;", $user, $pass);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM users;';
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        foreach($resultado as $arr) {
            echo $arr['email']."<br>";
        }
        echo "Se consultó con éxito";
    }
    catch(PDOException $error) {
        echo "Ocurrió un error: $error";
    }
?>