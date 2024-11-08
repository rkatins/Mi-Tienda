<?php
    require_once("../BBDD/conexion_bd.php");

    $resultado = $base_datos->query('SELECT * FROM categorias', MYSQLI_USE_RESULT);
    while ($fila = $resultado->fetch_assoc()) {
        // Respuesta para consumir la API
        $categoria[] = [
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'descripcion' => $fila['descripcion'],
        ];
    }

    // Encabezado para permitir el acceso desde otros origenes 
    // (Evitar error por CORS)
    header('Access-Control-Allow-Origin: *');

    // si se pone 'echo' delante de la siguiente instruccion 
    // el JSON que se recibe con el fetch lo mostraria por 
    // pantalla, de la forma que esta puesto solo se 
    // mostrara por consola
    // echo json_encode(['permiso' => 'denegado']);
    echo json_encode($categoria);
    // Por algun casual, no sirve poner `./` para inddicar el directorio actual en el caso de que el mismo archivo se encuentre en le propio directorios
    require_once("../BBDD/desconectar_bd.php");
?>