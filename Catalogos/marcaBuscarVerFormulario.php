<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>
    <?php
echo "<font color='black'>";
echo 'Hola estás en: ' . basename($_SERVER['SCRIPT_FILENAME']);
?>
        <div class="formulario">
           <form method="REQUEST" action="marcaVerAccion.php">
                <label class="etiquetaFormulario">Marcas</label><br>

                <font color="black"><label type="text">Clave:</label></font> 
                <input placeholder="Clave" name="id" class="cajaTexto" value="">
                
                <a href="marcaVerAccion.php?id=<?php echo !isset($_GET['id']); ?>" class="custom-btn btn-11 enlace">Buscar</a>
                <a href="marcaListado.php" class="custom-btn btn-11 enlace">Regresar</a>
            </form>
        </div>
        <?php 
        //pie();
    ?>
</body>
</html>