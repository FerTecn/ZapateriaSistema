<?php
    include '../Conexiones/ConexionBdZapateria.php';
    $datoEliminar = $_GET['id'];

    $consulta = "DELETE FROM Proveedor WHERE idProveedor = '$datoEliminar'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        // include 'marcaListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "marcaListado.php";
            } </script>';
    }else{
        echo "error";
    }
?>