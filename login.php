<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./asset/CSS/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/CSS/formulario.css">
    <link rel="stylesheet" href="./asset/CSS/productos.css">
    <link rel="stylesheet" href="styles.css"></head>
<body>
    <div class="formulario">
        <h1>Iniciar Sesión</h1>
        <br>

        <form class="formulario" action="./asset/php/btn_registro.php" method="POST">
            <div class="etiquetasForm">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="etiquetasForm">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <input type="submit" class="btn btn-success" value="Iniciar Sesión">
        </form>
    </div> 
</body>
</html>