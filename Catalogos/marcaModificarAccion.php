<?php
     include '../Conexiones/ConexionBdZapateria.php';

     $idProveedor = $_POST['id'];
     $nombreProveedor = $_POST['nombre'];

    $consulta="UPDATE Proveedor SET nombreProveedor = '$nombreProveedor' WHERE idProveedor='$idProveedor'";
    $resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        include 'marcaListado.php';
        echo '<script type="text/javascript">
            window.onload = function () { alert("Datos actualizados");
            window.location = "marcaListado.php";
            } </script>';
        
    }else{
        echo "error";
    }