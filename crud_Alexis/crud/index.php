
<html>
<head>
	<title>Lista de alumnos</title>
</head>
<body>

<?php

include("conexion.php");
//select * from alumnos
$sql="select * from alumno";
$resultado=mysqli_query($conexion,$sql);

?>


<h1>Lista de alumnos</h1>
<a href="agregar.php">Nuevo Alumno</a><br><br>
<table>
	<thead>
		<tr>
			<th>No.</th>
			<th>Nombre</th>
			<th>No. Control</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php
           while ($filas=mysqli_fetch_assoc($resultado)) {
           	
		?>
		<tr>
			<td><?php  echo $filas['id'] ?></td>
			<td><?php  echo $filas['nombre'] ?></td>
			<td><?php  echo $filas['nocontrol'] ?></td>
			<td>
				
              <?php echo "<a href=''>EDITAR</a>"; ?>
              -
              <?php echo "<a href=''>ELIMINAR</a>"; ?>

			</td>
		</tr>
		<?php
           }
		?>
	</tbody>
</table>
<?php
mysqli_close($conexion);
?>
</body>
</html>