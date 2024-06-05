<?php
     include '../Conexiones/ConexionBdZapateria.php';
     $datoActualizar = $_GET['id'];
 
    $consulta = "SELECT * FROM Proveedor WHERE idProveedor = '$datoActualizar'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas = mysqli_fetch_array ($resultado)
?>
<html>
    <body>
    <?php include "../Funciones/funciones.php"; 
        //banner();
        menu();
        ?> 
        <a href="Ver.php" class="custom-btn btn-11 enlace">Regresar</a>
        <div class="formulario">
            <form method="POST" action="Actualizar.php">
                <input name="id" type="hidden" value="<?php echo $filas['idProveedor']?>">
                
                <label class="etiquetaFormulario">Nombre de la marca a modificar</label><br>
                <input type="text" name="nombre" value="<?php echo $filas['nombreProveedor']?>" class="cajaTexto">

                <button onclick="return Confirm()" class="custom-btn btn-11 enlace"> Actualizar</button>
            </form>
        </div>
    </body>
</html>
<script>
    function Confirm(){
        var respuesta = confirm ("¿Estás seguro que deseas modificar este registro?");
        if (respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>