<?php
include("conexion.php");
$con=conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="Busqueda">
        <input type="submit" name="enviar" value="Busqueda">
    </form>
</body>
</html>

<?php

if(isset($_GET['enviar'])){
    $Busqueda = $_GET['Busqueda'];

    $consulta = $con->query("SELECT * FROM tarea WHERE Nombre LIKE '$Busqueda'");

    while ($row = $consulta->fetch_array()){
        echo $row['Nombre'];
    }
}

?>