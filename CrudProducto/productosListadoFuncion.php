<?php
    // SESIONES
    include '../Sesiones/MantenerSesion.php';
    $usuario = mantenerSesion();
    
    include 'productosListadoAction.php';
    list ($consulta, $conexion) = consultarZapatos();
    
?>

<html>
    <head></head>
    <body>
    <?php include "../Funciones/funciones.php"; 
        banner();
        menu();
        ?>
        <div>
            <a href="productosNuevoFuncion.php" class="custom-btn2 btn-11 enlace">Nuevo registro</a>
            <a href="../FPDF/reporte.php" class="custom-btn2 btn-11 enlace">Generar PDF</a>
            <a href="../PhpExcel/phpExcel.php" class="custom-btn2 btn-11 enlace">Generar Excel</a>            
        </div>
       <div class="tablaCRUD" id="tablaCRUD">
            <table>
                <thead>
                    <tr>
                        <th> Número </th>
                        <th> Marca </th>
                        <th> Categoria </th>
                        <th> Color </th>
                        <th colspan="3"></th> <!-- Columnas que abarca una celda -->
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $contador = 1;
                        while( $fila = mysqli_fetch_array($consulta)){  
                            // $idCategoria = $fila['idCategoria'];
                            $nombreProveedor = consultaProveedor($fila['idProveedor'], $conexion);
                            $nombreCategoria = consultaCategoria($fila['idCategoria'], $conexion);
                            $nombreColor = consultaColor($fila['idColor'], $conexion);
                    ?>
                    <tr>
                        <td> <?php echo $contador ?> </td>
                        <td> <?php echo $nombreProveedor['nombreProveedor']?> </td>
                        <td> <?php echo $nombreCategoria['nombreCategoria']?> </td>
                        <td> <?php echo $nombreColor['nombreColor']?> </td>

                        <th><a href="productosVerFuncion.php?id=<?php echo $fila['idZapato'] ?>" class="custom-btn btn-11 enlace">Ver</a></th>
                        <th><a href="productosActualizarFuncion.php?id=<?php echo $fila['idZapato'] ?>" class="custom-btn btn-11 enlace">Editar</a></th>
                        <th><a onclick="return Confirm()" href="productosBorrarAction.php?id=<?php echo $fila['idZapato'] ?>" class="custom-btn btn-11 enlace">Eliminar</a></th>
                        <td><a href="../FPDF/reporteCalzado.php?id=<?php echo $fila['idZapato']?>" class="custom-btn btn-11 enlace">PDF</a></td>
                    </tr>
                    <?php $contador += 1; } ?>
                </tbody>
            </table>
       </div>

    </body>
</html>

<script>
    function Confirm(){
        var respuesta = confirm ("¿Estás seguro que deseas eliminar este registro?");
        if (respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>