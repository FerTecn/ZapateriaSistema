<?php
    include '../Conexiones/ConexionBdZapateria.php';
    $idZapato = $_POST['id'];
    $idProveedor = $_POST['proveedor'];
    $idClasificacion = $_POST['clasificacion'];
    $idCategoria = $_POST['categoria'];
    $idColor = $_POST['color'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];

    $sqlActualizar = "UPDATE Zapato SET idZapato = '$idZapato', idProveedor = '$idProveedor', idClasificacion = '$idClasificacion',
                        idCategoria = '$idCategoria', idColor = '$idColor', Descripcion = '$descripcion', Costo = '$costo' WHERE idZapato = '$idZapato'";
    $ejecucion = mysqli_query ($conexion, $sqlActualizar);
    if ($ejecucion){
        include 'productosListadoFuncion.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos actualizados");
            window.location = "productosListadoFuncion.php";
            } </script>';
    }else{
        echo "Error";
}
?>