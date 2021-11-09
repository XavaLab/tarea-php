<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Sexo=$_POST['Sexo'];
$Direccion=$_POST['Direccion'];
$Edad=$_POST['Edad'];
$FNacimiento=$_POST['FNacimiento'];
$RUT=$_POST['RUT'];

$sql="INSERT INTO tabla VALUES ('$Nombre','$Apellidos','$Sexo','$Direccion','$Edad','$FNacimiento','$RUT')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>