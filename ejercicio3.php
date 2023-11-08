<?php
    $nombre = 'No hay un nombre aún';
    if($_GET) $nombre = $_GET['nombre'];
    echo $nombre;
?>