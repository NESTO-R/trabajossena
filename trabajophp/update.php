<?php
include("conexion.php");
$id=$_POST("id")
$nombre=$_POST["nombre"];
$contraseña=$_POST["password"];
$direc=$_POST["direccion"];
$cedula=$_POST["cedula"];
$CC_usurios=$_POST["usurios"];
$saldo=$_POST["saldo"];
$upd="UPDATE usurios SET id='{$id}', nombre='{'$nombre}',contraseña='{$password}',direc='{$direccion}',cedula='{$cedula}',CC_usurios'{$CC_usurios}',saldo='{$saldo}' WHERE id={$id}";
mysqli_query($conexion,$upd);
header('Location: index.php')
?>
