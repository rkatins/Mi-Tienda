<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/fuente.css">
    <link rel="stylesheet" href="./asset/css/formulario.css">
    <link rel="stylesheet" href="./asset/css/centrar.css">
    <link rel="stylesheet" href="./asset/css/boton.css">
    <link rel="stylesheet" href="./asset/css/producto.css">
    <link rel="stylesheet" href="./asset/css/navBar.css">

    <script src="./asset/js/barraBusqueda.js"></script>

    <title>Tienda RKD</title>
</head>
<body>
    <?php
        include('./asset/html/barraBusqueda.php')
    ?>

    <div class="lista_productos">
        <?php 
            include('./asset/bd/tarjetaProducto.php');
            fTarjetasProductos();
        ?>
    </div>
</body>
</html>