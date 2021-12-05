<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Sexo=$_POST['Sexo'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Direccion=$_POST['Direccion'];
$FNacimiento=$_POST['FNacimiento'];
$RUT=$_POST['RUT'];
$id=$_POST['id'];

$sql="INSERT INTO tabla VALUES ('$Nombre','$Apellidos','$Sexo','$Email','$Password','$Direccion','$FNacimiento','$RUT','$id')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>