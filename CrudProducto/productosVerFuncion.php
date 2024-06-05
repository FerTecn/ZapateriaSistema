<?php
    // SESIONES
    include '../Sesiones/MantenerSesion.php';
    $usuario = mantenerSesion();
    
    include 'productosActualizarAction.php';
    include 'productosVerAction.php';
    $idZapato = $_GET['id'];
    list($filas, $conexion) = recuperarDatos($idZapato);

    list($nomProveedor, $nomClasif, $nomCat, $nomColor) = recuperarNombres($conexion, $filas['idProveedor'],$filas['idClasificacion'],$filas['idCategoria'],$filas['idColor']);
?>
<html>
    <head></head>
    <body>
    <?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>
    
    <div class="formulario">
        <label class="etiquetaFormulario">Calzado</label><br><br>

        <font color="black"><label>Marca: </label><label> <?php echo $nomProveedor['nombreProveedor']; ?></label></font><br>
        <font color="black"><label>Clasificación: </label><?php echo $nomClasif['nombreClasificacion']; ?></label></font><br>
        <font color="black"><label>Categoria: </label><label><?php echo $nomCat['nombreCategoria']; ?></label></font><br>
        <font color="black"><label>Color: </label><label><?php echo $nomColor['nombreColor']; ?></label></font><br>
        <font color="black"><label>Descripción: </label><?php echo $filas['Descripcion']; ?></label></font><br>
        <font color="black"><label>Costo: </label><label><?php echo $filas['Costo']; ?></label></font><br><br>
       
        <a href="productosListadoFuncion.php" class="custom-btn2 btn-11 enlace">Regresar</a>
    </div>
    <?php 
    //pie();
    ?>
    </body>
</html>