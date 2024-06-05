<html> 
    <head> 
    </head>
    <body>
        <?php include "../Funciones/funciones.php"; 
        banner();
        menu();
        ?>
        <a href="marcaNuevoFormulario.php" class="custom-btn2 btn-11 enlace">Nuevo registro</a>
        <a href="marcaBuscarVerFormulario.php" class="custom-btn2 btn-11 enlace">Buscar</a>
        <a href="../FPDF/reporteMarcasCompletas.php" class="custom-btn2 btn-11 enlace">Generar PDF</a>
        <a href="../PhpExcel/phpExcelMarcasCompletas.php" class="custom-btn2 btn-11 enlace">Generar un Excel</a>
    
        <div class="tablaCRUD" id="tablaCRUD">
            <table>
                <thead>
                    <tr>
                        <th> Clave Marca </th>
                        <th> Nombre Marca </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include '../Conexiones/ConexionBdZapateria.php';
                        $consulta = "SELECT * FROM Proveedor";
                        $resultado=mysqli_query($conexion,$consulta);

                        $contarRegistro = 1;

                        while ( $filas = mysqli_fetch_array ($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $contarRegistro?></td>
                        <td><?php echo $filas['nombreProveedor']?></td>
                        <td><a href="marcaVerAccion.php?id=<?php echo $filas['idProveedor'] ?>" class="custom-btn btn-11 enlace">Ver</a></td>
                        <td><a href="marcaModificarFormulario.php?id=<?php echo $filas['idProveedor'] ?>" class="custom-btn btn-11 enlace">Editar</a></td>
                        <td><a onclick="return Confirm()" href="marcaEliminarAccion.php?id=<?php echo $filas['idProveedor'] ?>" class="custom-btn btn-11 enlace">Eliminar</a></td>
                        <td><a href="../FPDF/reporteMarcaProducto.php?id=<?php echo $filas['idProveedor'] ?>" class="custom-btn btn-11 enlace">PDF</a></td>
                        
                    </tr>
                </tbody>
                    <?php
                    $contarRegistro  += 1;
                    } 
                    ?>
                
            </table>
        </div>
        <?php 
    //pie();
    ?>
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