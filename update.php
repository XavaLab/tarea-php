<?php
include("conexion.php");
$con=conectar();


$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$Sexo=$_POST['Sexo'];
$Direccion=$_POST['Direccion'];
$FNacimiento=$_POST['FNacimiento'];
$RUT=$_POST['RUT'];
$id=$_POST['id'];

$sql="UPDATE tabla SET Nombre='$Nombre',Apellidos='$Apellidos',RUT='$RUT',Sexo='$Sexo',Direccion='$Direccion',FNacimiento='$FNacimiento' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>