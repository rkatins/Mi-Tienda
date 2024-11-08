<?php
    function fTarjetasProductos() {
        // Por algun casual, no sirve poner `./` para inddicar el directorio actual en el caso de que el mismo archivo se encuentre en le propio directorios
        require_once("conexion_bd.php");

        $resultado = $base_datos->query('SELECT * FROM productos', MYSQLI_USE_RESULT);
        while ($fila = $resultado->fetch_assoc()) {
            echo '
                <div class="tarjeta_producto">
                    <img src="' . $fila['imagen'] . '" alt="">
                    <div class="info_producto">
                        <label value="'. $fila['id'] .'">ID del producto: '. $fila['id'] .'</label>
                        <label value="'. $fila['descripcion'] .'">Descripción: '. $fila['descripcion'] .'</label>
                        <label value="'. $fila['categoria_id'] .'">Categoría: '. $fila['categoria_id'] .'</label>
                        <label value="'. $fila['precio'] .'">Precio: '. $fila['precio'] .'</label>
                        <label value="'. $fila['stock'] .'">Stock: '. $fila['stock'] .'</label>
                    </div>
                    <button class="btn btn-primary">Agregar al carrito</button>
                </div>';
        }

        // Por algun casual, no sirve poner `./` para inddicar el directorio actual en el caso de que el mismo archivo se encuentre en le propio directorios
        require_once("desconectar_bd.php");
    }
?>