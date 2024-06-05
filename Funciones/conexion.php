<?php
function conexion(){
    $conexion = mysqli_connect("localhost","root","","ZAPATERIA"); 
    return $conexion;
}