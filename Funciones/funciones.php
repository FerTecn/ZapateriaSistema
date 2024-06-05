<?php
function menu(){
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <nav>
        <p class="logo-danicodex">Zapatería </p>
        <ul class="cont-ul">
            <li class="develop"><a href="../Inicio/Inicio.php" class="enlace">Inicio</a></li>
            <li class="develop"><a href="../CrudProducto/productosListadoFuncion.php" class="enlace">Calzado</a></li>
            <li class="develop">
                Crud
                <ul class="ul-second">
                    <li class="back"><a href="../CrudMarcas/Ver.php" class="enlace">Marcas</a></li>
                </ul>
            </li>
            <li class="develop">
                Marca
            <ul class="ul-second">
                    <li class="back"><a href="../Catalogos/marcaListado.php" class="enlace">Listado</a></li>
                    <li class="back"><a href="../Catalogos/marcaBuscarVerFormulario.php" class="enlace">Buscar</a></li>
                    <li class="back"><a href="../Catalogos/marcaBuscarActualizar.php" class="enlace">Actualizar</a></li>
                    <li class="back"><a href="../Catalogos/marcaBuscarEliminar.php" class="enlace">Eliminar</a></li>
            </ul>
            </li> 
            <li><a href="../Sesiones/CerrarSesion.php">Cerrar sesión/a></li>
        </ul>
    </nav>
</body>
<?php
}
?>

<?php
function banner(){
    ?>
    <div class="banner">
        <img src="../Imagenes/Banner.png" alt="">
    </div>     
<?php
}
?>

<?php
function pie(){
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="piePagina.css">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="piePagina.css">
    <title>Document</title>
</head>
<body>
    <div class = "footer">
    <footer>
    <img src="../Imagenes/pie.png" alt="">
    </footer>
    </div>
</body>
<?php
}
?>