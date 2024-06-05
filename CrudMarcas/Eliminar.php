<?php
    include '../Conexiones/ConexionBdZapateria.php';
    $datoEliminar = $_GET['id'];

    $consulta = "DELETE FROM Proveedor WHERE idProveedor = '$datoEliminar'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'Ver.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "Ver.php";
            } </script>';
    }else{
        echo "error";
    }
?>