<?php
    $host="localhost";
    $usuario_bd="root";
    $pass_bd="";
    $nombre_bd="tienda";
    
    $base_datos = new mysqli($host, $usuario_bd, $pass_bd, $nombre_bd);
    
    // Verificar conexión
    if ($base_datos->connect_error) {
        die("Error en la conexión: " . $mysqli->connect_error); 
    }
?>