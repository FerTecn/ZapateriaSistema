<html>
    <head>
    </head>
    <body>
    <?php include "../Funciones/funciones.php"; 
        //banner();
        menu();
        ?>
        <a href="Ver.php" class="custom-btn btn-11 enlace">Regresar</a>
        <div class="formulario">
            <form method="POST" action="Guardar.php">
                <label class="etiquetaFormulario">Nombre de la nueva marca</label><br>
                <input placeholder="Nombre de la marca" name="nombre" class="cajaTexto">
                <input type="submit" name="submit" class="custom-btn btn-11 enlace">
            </form>
        </div>
    </body>
</html>