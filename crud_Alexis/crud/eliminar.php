<?php
$id=$_GET['id'];
include("conexion.php");
$sql="delete from alumnos where id ='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if ($resultado) {
	echo "<script language='JavaScript'>
			alert('los datos fueron eliminados correctamente');
			location.assign('index.php');
			</script>";

}else{
	echo "<script language='JavaScript'>
			alert('los datos no fueron eliminados correctamente');
			location.assign('index.php');
			</script>";
}


?>