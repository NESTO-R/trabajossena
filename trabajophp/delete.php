<?php
incluede("conexion.php");
$del="DELETE FROM usurios WHERE id=1";
mysqli_query($conexion,$del);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function alerta(){
            alerta("seguro que de sea abndonar la cuenta?");
        }
    </script>
    <title>banco</title>
</head>
<body>
    <input type="subimit" onclick="alerta();" value="eliminar">
</body>
</html>


