<?php
     include '../Conexiones/ConexionBdZapateria.php';

     $proveedor = $_POST['proveedor'];
     $clasif = $_POST['clasificacion'];
     $cat = $_POST['categoria'];
     $color = $_POST['color'];
     $descripcion = $_POST['descripcion'];
     $costo = $_POST['costo'];

     $sql = "INSERT INTO Zapato VALUES (null, '$proveedor', '$clasif', '$cat', '$color', '$descripcion', '$costo')";
     $valores = mysqli_query($conexion, $sql);

            if($valores){
                include 'productosListadoFuncion.php';
                echo '<script type="text/javascript">
                    window.onload = function () { alert("Datos correctamente guardados");
                        window.location = "productosListadoFuncion.php"; }
                    </script>';
            }else{
                $error = mysqli_error($conexion);
                echo("Error: ".$error);
                
            }
?>