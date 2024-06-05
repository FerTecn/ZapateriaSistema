<?php
    include '../Sesiones/MantenerSesion.php';
    $usuario = mantenerSesion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php include "../Funciones/funciones.php"; 
        banner();
        menu();
        ?>
    </div>
    <div>
    <font size=30> 
    <br><font color="black"><center>Bienvenido</center></font>
    <font color="black"><center>Sistema "Zapateria FERCH"</center></font>
    <br><font color="red" size="4"><center> USUARIO ACTIVO: <?php echo $usuario; ?></center></font><br>
    </div>
    <?php 
        pie();
    ?>
</body>
</html>