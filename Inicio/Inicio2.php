<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            include '../Login/Menu.php';
        ?>
    </div>

    <div>
    <h1>El usuario que ingresó es: <?php echo $_SESSION['usuario']; ?></h1>
    <h1>La contraseña es: </h1>
    </div>
</body>
</html>