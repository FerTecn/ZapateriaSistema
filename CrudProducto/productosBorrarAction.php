<?php
    include '../Conexiones/ConexionBdZapateria.php';
    $datoEliminar = $_GET['id'];

    $consulta = "DELETE FROM Zapato WHERE idZapato = '$datoEliminar'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'productosListadoFuncion.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos eliminados");
            window.location = "productosListadoFuncion.php";
            } </script>';
    }else{
        echo "error";
    }
?>