<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
    include("conexion.php");
    $con=conectar();
    
if ($con -> connect_errno)
{
	die("Fallo la conexion:(".$con -> mysqli_connect_errno().")".$con-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$table="";
$query="SELECT * FROM tabla ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['tabla']))
{
	$q=$con->real_escape_string($_POST['tabla']);
	$query="SELECT * FROM tabla WHERE 
		id LIKE '%".$q."%' OR
		Nombre LIKE '%".$q."%' OR
		Apellidos LIKE '%".$q."%' OR
		Sexo LIKE '%".$q."%' OR
		Direccion LIKE '%".$q."%' OR
		RUT LIKE '%".$q."%' OR
		Edad LIKE '%".$q."%' OR
		FNacimiento LIKE '%".$q."%'";
}

$buscarTabla=$con->query($query);
if ($buscarTabla->num_rows > 0)
{
	$table.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Sexo</td>
			<td>Direccion</td>
			<td>RUT</td>
			<td>Edad</td>
			<td>Fecha de Nacimiento</td>
		</tr>';

	while($filaTabla= $buscarTabla->fetch_assoc())
	{
		$table.=
		'<tr>
			<td>'.$filaTabla['id'].'</td>
			<td>'.$filaTabla['Nombre'].'</td>
			<td>'.$filaTabla['Apellidos'].'</td>
			<td>'.$filaTabla['Sexo'].'</td>
			<td>'.$filaTabla['Direccion'].'</td>
			<td>'.$filaTabla['RUT'].'</td>
			<td>'.$filaTabla['Edad'].'</td>
			<td>'.$filaTabla['FNacimiento'].'</td>
		 </tr>
		';
	}

	$table.='</table>';
} else
	{
		$table="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $table;

?>
