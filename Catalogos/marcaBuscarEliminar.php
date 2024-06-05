<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>
<?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>

     <a href="marcaListado.php" class="custom-btn btn-11 enlace">Regresar</a>
        <div class="formulario">
           <form method="GET" action="marcaEliminarAccion.php">
                <label class="etiquetaFormulario">Marcas</label><br>

                <font color="black"><label type="text">Clave:</label></font> 
                <input placeholder="Clave" name="id" class="cajaTexto" value="">
                <button onclick="return Confirm()" class="custom-btn btn-11 enlace">Eliminar</button>
                
                <!-- <a href="marcaEliminarAccion.php?id=<?php echo $_GET['id']; ?>" onclick="return Confirm()"  class="custom-btn btn-11 enlace">Eliminar</a> -->

            </form>
        </div>
        <?php 
        //pie();
    ?>
</body>
</html>

