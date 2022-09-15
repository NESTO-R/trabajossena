<?php
include("conexion.php");
$CC_usuarios=$_POST["usurios"];
$saldo=$_POST["slado cuenta"];
$insert="INSERT INTO usurios(id_usuarios, saldo VALUES ('{$CC
_usurios}','{$saldo}' )";
if("$conexion"->query("$insert")===TRUE){
    header('Location: index.php');
}else{
    echo"desea cerrar la cuenta";
}
?>


