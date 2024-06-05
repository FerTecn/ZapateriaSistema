<?php
    function recuperarDatos($idZapato){
        include '../Conexiones/ConexionBdZapateria.php';
        $datos = mysqli_query($conexion, "SELECT * FROM Zapato WHERE idZapato = '$idZapato'");
        $filas = mysqli_fetch_array ($datos);

        return [$filas, $conexion];
    }
   
    function consultas(){
        include '../Conexiones/ConexionBdZapateria.php';
        $consultaProveedor = mysqli_query($conexion, "SELECT * FROM Proveedor");
        $consultaClasificacion = mysqli_query($conexion, "SELECT * FROM Clasificacion");
        $consultaCategoria = mysqli_query($conexion, "SELECT * FROM Categoria");
        $consultaColor = mysqli_query($conexion, "SELECT * FROM Color");

        return [$consultaProveedor, $consultaClasificacion, $consultaCategoria, $consultaColor];
    }
?>