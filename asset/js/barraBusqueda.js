function fBarraBusqueda() {
    var nombreProducto = document.getElementById("nombreProducto");
    
    var xhr = new XMLHttpRequest();

    // Debemos tener en cuenta el fichero desde donde ha sido llamado la funcion
    xhr.open('POST', './asset/BBDD/bd_fAgregarProducto.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send('inProducto=' + encodeURIComponent(nombreProducto));
}