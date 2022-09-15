<?php
include("conexion.php");
$nombre=$_POST["nombre"];
$contraseña=$_POST["password"];
$direc=$_POST["direccion"];
$cedula=$_POST["cedula"];
$insert="INSERT INTO usuarios(nombre, contraseña, direccion, cedula) VALUES('{$nombre}', '{$contraseña}', '{$direc}', {$cedula}' )";
id($conexion->query($insert)===TRUE){
    header("Location: index.php");
}else{
    echo "no hay conexion"
}
?>

