<?php
    include '../Conexiones/ConexionBdZapateria.php';

    $idProveedor= $_POST['idProveedor'];
    $nombreProveedor= $_POST['nombreProveedor'];

    $consulta = "INSERT INTO Proveedor VALUES (null, '$idProveedor', '$nombreProveedor')";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado)
    {
        include 'marcaListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos guardados");
            window.location = "marcaListado.php";
            } </script>';
    }else{
        echo "Error <br>";
    }
?>