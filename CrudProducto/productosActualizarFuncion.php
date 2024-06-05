<?php
    // SESIONES
    include '../Sesiones/MantenerSesion.php';
    $usuario = mantenerSesion();

    require 'productosActualizarAction.php';
    $idZapato = $_GET['id'];

    list($filas, $conexion) = recuperarDatos($idZapato); 
    list($consultaProveedor, $consultaClasificacion, $consultaCategoria, $consultaColor) = consultas();
?>
<html>
    <head></head>
    <body>
    <?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>
        <div class="formulario">
            <form method="POST" action="actualizar.php">
            <label class="etiquetaFormulario">Editar</label><br>
            <!-- Opcional si mostrar o no, pero no se puede eliminar -->
            <input name="id" type="hidden" value="<?php echo $filas['idZapato']?>"><br>

            <font color="black"><label>Marca: </label></font>
            <select name="proveedor">
                <?php
                while($valores = mysqli_fetch_array($consultaProveedor)){
                    if($valores['idProveedor'] == $filas['idProveedor']){
                        echo '<option value="'.$valores['idProveedor'].'"selected="selected">'.$valores['nombreProveedor'].'</option>';
                    }else{
                        echo '<option value="'.$valores['idProveedor'].'">'.$valores['nombreProveedor'].'</option>';
                    }
                } ?>
            </select><br>
            <font color="black"><label>Clasificación: </label></font>
            <select name="clasificacion">
                <?php
                while($valores = mysqli_fetch_array($consultaClasificacion)){
                    if($valores['idClasificacion'] == $filas['idClasificacion']){
                        echo '<option value="'.$valores['idClasificacion'].'"selected="selected">'.$valores['nombreClasificacion'].'</option>';
                    }else{
                        echo '<option value="'.$valores['idClasificacion'].'">'.$valores['nombreClasificacion'].'</option>';
                    }
                } ?>
            </select><br>
            <font color="black"><label>Categoría: </label>
            <select name="categoria">
                <?php
                while($valores = mysqli_fetch_array($consultaCategoria)){
                    if($valores['idCategoria'] == $filas['idCategoria']){
                        echo '<option value="'.$valores['idCategoria'].'"selected="selected">'.$valores['nombreCategoria'].'</option>';
                    }else{
                        echo '<option value="'.$valores['idCategoria'].'">'.$valores['nombreCategoria'].'</option>';
                    }
                } ?>
            </select><br>
            <font color="black"><label>Color: </label></font>
            <select name="color">
                <?php
                while($valores = mysqli_fetch_array($consultaColor)){
                    if($valores['idColor'] == $filas['idColor']){
                        echo '<option value="'.$valores['idColor'].'"selected="selected">'.$valores['nombreColor'].'</option>';
                    }else{
                        echo '<option value="'.$valores['idColor'].'">'.$valores['nombreColor'].'</option>';
                    }
                } ?>
            </select><br>
            <font color="black"><label>Descripción: </label></font>
            <textarea name="descripcion" rows="3" cols="40"><?php echo $filas['Descripcion']?></textarea><br>
            <font color="black"><label>Costo: </label></font>
            <input name="costo" type="int" value="<?php echo $filas['Costo']?>"><br><br>
                
            <button class="custom-btn btn-11 enlace"> Actualizar </button> 
            </form>
        </div>
    </body>
</html>