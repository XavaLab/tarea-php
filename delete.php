<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM tabla WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro.php");
    }
?>