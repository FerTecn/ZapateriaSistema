<?php
    function consultarZapatos(){
        include '../Conexiones/ConexionBdZapateria.php';
        $consulta = mysqli_query($conexion, "SELECT * FROM Zapato");

        return [$consulta, $conexion];
    }
    
    function consultaProveedor($idProveedor, $conexion){
        $nombreProveedor = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM Proveedor WHERE idProveedor='$idProveedor'"));

        return $nombreProveedor;
    }

    function consultaCategoria($idCategoria, $conexion){
        $nombreCategoria = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM Categoria WHERE idCategoria='$idCategoria'"));

        return $nombreCategoria;
    }

    function consultaColor($idColor, $conexion){
        $nombreColor = mysqli_fetch_array(
            mysqli_query(
                $conexion,"SELECT * FROM Color WHERE idColor='$idColor'"));

        return $nombreColor;
    }
?>