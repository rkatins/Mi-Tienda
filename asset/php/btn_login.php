<?php
    require_once("../BBDD/conexion_bd.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        include("./asset/BBDD/tienda-usuario_bd.php");


    }

    require_once("../BBDD/desconectar_bd.php");
?>