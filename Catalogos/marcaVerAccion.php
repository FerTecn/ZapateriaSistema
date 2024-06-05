<?php
    $dato = $_GET['id'];
    include '../Conexiones/ConexionBdZapateria.php';
        $consulta = "SELECT * FROM Proveedor WHERE idProveedor = '$dato'";
        $resultado=mysqli_query($conexion,$consulta);
        $nombre = mysqli_fetch_array($resultado);
?>
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
            <form method="REQUEST" action="">
                <label class="etiquetaFormulario">Marcas</label><br><br>
                
                <font color="black"><label type="text">Clave: </label></font>
                <font color="black"><label> <?php echo $dato; ?></font><br>

                <font color="black"><label>Nombre: </label></font>
                <font color="black"><label> <?php echo $nombre['nombreProveedor']; ?></font><br><br>
                
                <a href="marcaListado.php" class="custom-btn btn-11 enlace">Regresar</a>
            </form>
        </div>
        <?php 
    pie();
    ?>
</body>
</html>