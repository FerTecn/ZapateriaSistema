<?php
include('../Conexiones/ConexionBdLogin.php');

$usuario=$_GET["nombreUsuario"];
$password=$_GET["password"];

session_start();
$_SESSION['usuario']=$usuario;

$consulta="SELECT*FROM Usuario where nombreUsuario='$usuario' and password=md5('$password')";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location: ../Inicio/Inicio.php");
}else{
    ?>
    <?php
    include("Prueba.php");
  ?>
  <h1 class="bad">No puedes entrar al sistema</h1>
  <?php
}
?>