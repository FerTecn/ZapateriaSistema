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
        <div class="formulario">
           <form method="REQUEST" action="marcaModificarFormulario.php">
                <label class="etiquetaFormulario">Marcas</label><br>

                <font color="black"><label type="text">Clave:</label></font> 
                <input placeholder="Clave" name="id" class="cajaTexto" value="">
                
                <a href="marcaModificarFormulario.php?id=<?php echo !isset($_GET['id']); ?>" class="custom-btn btn-11 enlace">Buscar</a>
                <a href="marcaListado.php" class="custom-btn btn-11 enlace">Regresar</a>
            </form>
        </div>
        <?php 
        //pie();
    ?>
</body>
</html>