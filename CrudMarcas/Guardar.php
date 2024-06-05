+<?php
    include '../Conexiones/ConexionBdZapateria.php';
    $nombreNuevo = $_POST['nombre'];

    $consulta = "INSERT INTO Proveedor VALUES (null, '$nombreNuevo')";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'Ver.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos guardados");
            window.location = "Ver.php";
            } </script>';
    }else{
        echo "error";
    }
?>