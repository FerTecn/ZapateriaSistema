<?php
    function recuperarNombres($conexion, $idProveedor, $idClasificacion, $idCategoria, $idColor){
        $consultaProveedor = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM Proveedor WHERE idProveedor = '$idProveedor'"));
        $consultaClasificacion = mysqli_fetch_array( mysqli_query($conexion, "SELECT * FROM Clasificacion WHERE idClasificacion = '$idClasificacion'"));
        $consultaCategoria = mysqli_fetch_array( mysqli_query($conexion, "SELECT * FROM Categoria WHERE idCategoria = '$idCategoria'"));
        $consultaColor = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM Color WHERE idColor = '$idColor'"));

        return [$consultaProveedor, $consultaClasificacion, $consultaCategoria, $consultaColor];
    }
    
?>