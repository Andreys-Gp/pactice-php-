<html>
<head>
	<title>AGREGAR</title>
</head>
<body>

<?php
  if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $nocontrol=$_POST['nocontrol'];

    include ("conexion.php");
    //insert into alumno(nombre,nocontrol)
    //values($nombre,$nocontrol);
    $sql="insert into alumno(nombre,nocontrol) values('".$nombre."','".$nocontrol."')";

    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
      //los datos ingresaron a la bd
    	echo "<script languaje='JavaScript'>
    	alert ('los datos ingresaron correctamente a la BD');
      location.assign('index.php');
    	</script>";

    }else{
      // los datos NO ingresaron a la bd
    	echo "<script languaje='JavaScript'>
    	alert('ERROR:los datos NO ingresaron correctamenta la BD');
      location.assign('index.php');
    	</script>";
    }
    mysqli_close($conexion);
    
  }else{
?>

<h1>Agregar Nuevo Alumno</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<label>Nombre:</label>
	<input type="text" name="nombre"><br>
	<label>No.Control</label>
	<input type="text" name="nocontrol"><br>
	<input type="submit" name="enviar" value="AGREGAR">
	<a href="index.php">Regresar</a>
</form>
<?php
}
?>
</body>
</html>