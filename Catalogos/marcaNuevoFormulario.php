<html>
    <head>
    </head>
    <body>
    <?php include "../Funciones/funciones.php"; 
    banner();
    menu();
    ?>
        <a href="marcaListado.php" class="custom-btn btn-11 enlace">Regresar</a>
        <div class="formulario">
            <form method="POST" action="marcaNuevoAccion.php">
                <label class="etiquetaFormulario">Nombre de la marca</label><br>

                <font color="black"><label type="text">Número </label></font>
                    <input placeholder="Número" name="idProveedor" class="cajaTexto" value=""></label><br>

                <font color="black"><label>Marca </label></font>
                <input placeholder="Nombre de la marca" name="nombreProveedor" class="cajaTexto" value="">
                
                <input type="submit" name="submit" class="custom-btn btn-11 enlace">
                <button type="reset" class="custom-btn btn-11 enlace">Cancelar</button>
            </form>
        </div>
        <?php 
    pie();
    ?>
    </body>
</html>