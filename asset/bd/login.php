<?php
    require_once("../BBDD/conexion_bd.php");

    $inEmail = $_POST["email"];
    $inPassword = $_POST["password"];

    $password = $base_datos->query('SELECT password FROM usuarios WHERE email = ' . $inEmail . '', MYSQLI_USE_RESULT);

    if ($inPassword != $password) {
        echo "<div>Contraseña erronenea</iv>";
    }

    require_once("../BBDD/desconectar_bd.php");
?>