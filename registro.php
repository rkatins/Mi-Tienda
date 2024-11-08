<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./asset/CSS/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/CSS/formulario.css">
    <link rel="stylesheet" href="./asset/CSS/productos.css">

    <title>Registrarse</title>
</head>
<body>
    <div class="formulario">
        <h1>Registrarse</h1>
        <form action="./asset/php/btn_registro.php" method="post">
            <div class="etiquetasForm">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            <div class="etiquetasForm">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" class="btn btn-success" value="Registrarse">
        </form>
    </div>
</body>
</html>
