<?php 
    // SESIONES
    include '../Sesiones/MantenerSesion.php';
    $usuario = mantenerSesion();

    require 'productosActualizarAction.php';
    list($consultaProveedor, $consultaClasificacion, $consultaCategoria, $consultaColor) = consultas();
?>
<html>
    <body>
    <?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>

<a href="productosListadoFuncion.php" class="custom-btn btn-11 enlace">Regresar</a>
        <div class="formulario">
            <form action="productosNuevoAction.php" method="POST">

            <label class="etiquetaFormulario">Nuevo registro</label><br><br>
            <font color="black"><label>Marca:</label></font>
                <select name="proveedor" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultaProveedor)){
                            echo '<option value="'.$datos[idProveedor].'">'.$datos[nombreProveedor].'</option>';
                        }   
                    ?>
                </select><br>

                <font color="black"><label>Clasificacion:</label></font>
                <select name="clasificacion" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultaClasificacion)){
                            echo '<option value="'.$datos[idClasificacion].'">'.$datos[nombreClasificacion].'</option>';
                        }   
                    ?>
                </select><br>
                
                <font color="black"><label>Categoría</label></font>
                <select name="categoria" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultaCategoria)){
                            echo '<option value="'.$datos[idCategoria].'">'.$datos[nombreCategoria].'</option>';
                        }   
                    ?>
                </select><br>
                <font color="black"><label>Color</label></font>
                <select name="color" required>
                    <option value="" selected="selected">- Selecciona -</option>
                    <?php
                        while ($datos = mysqli_fetch_array($consultaColor)){
                            echo '<option value="'.$datos[idColor].'">'.$datos[nombreColor].'</option>';
                        }   
                    ?>
                </select><br>
                <font color="black"><label>Descripción</label></font>
                <textarea name="descripcion" rows="3" cols="40" required></textarea><br>
                <font color="black"><label>Costo</label><br>
                <input name="costo" type="int" required></font><br><br>

                <button class="custom-btn btn-11 enlace">Agregar</button>
            </form>
        </div>
    </body>
</html>