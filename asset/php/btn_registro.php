<?php
    require_once("../BBDD/conexion_bd.php");

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (!empty($_POST["nombre"])  && !empty($_POST["email"]) && !empty($_POST["password"])){
            $resultado = $base_datos->query("INSERT INTO `tienda`.`usuarios`(`nombre`,`email`,`password`) VALUES
            ('" . $_POST["email"] . "', 
            '" . $_POST["password"] . "')");

            if($resultado){
                echo "<div class='alert alert-success'>Usuario agregado con exito</div>";
            }
        }else{
            echo "<div class='alert alert-danger'>Faltan campos por rellenar</div>";
        }
    }

    require_once("../BBDD/desconectar_bd.php");
?>