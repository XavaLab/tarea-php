<?php

include("conexion.php");
$con=conectar();

$RUT=$_GET['id'];


$sql="DELETE FROM formulario  WHERE RUT='$RUT'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>