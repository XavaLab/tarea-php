<?php
	include("conexion.php");
	$con=conectar();

	$sql="SELECT * FROM tabla";
	$query=mysqli_query($con,$sql);

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="..." type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <title>&#129386 Datos Usuarios</title>
  </head>

<body>
    
    <div style="margin-top:10px"></div>
    <h1 class="display-1 text-dark text-center">Tabla de Usuarios</h1>
    <div style="margin-top:10px"></div>

    <div class="col-md-12">
			<table class="table" >
				<thead class="table-success table-striped" >
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Género</th>
						<th>Dirección</th>
						<th>Fecha de Nacimiento</th>
						<th>RUT</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
						<?php
							while($row=mysqli_fetch_array($query)){
						?>
							<tr>
								<th><?php  echo $row['Nombre']?></th>
								<th><?php  echo $row['Apellidos']?></th>
								<th><?php  echo $row['Sexo']?></th>
                                <th><?php  echo $row['Direccion']?></th>
								<th><?php  echo $row['FNacimiento']?></th>
                                <th><?php  echo $row['RUT']?></th>
								<th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
								<th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
							</tr>
						<?php 
							}
						?>
				</tbody>
			</table>
		</div>

</body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>