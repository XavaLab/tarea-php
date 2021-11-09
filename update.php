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

$sql="UPDATE tabla SET Nombre='$Nombre',Apellidos='$Apellidos',Sexo='$Sexo',Direccion='$Direccion',Edad='$Edad',FNacimiento='$FNacimiento' WHERE RUT='$RUT'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro.php");
}else{

}
?>