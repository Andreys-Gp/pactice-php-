<!DOCTYPE html>
<html>
<head>
  <title>Login alumnos</title>
  <link rel="stylesheet" type="text/css" href="css/stilos.css">
</head>
<body>
<?php
  if(isset($_POST ['enviar'])){
    if (empty($_POST['nombre']) || empty($_POST['nocontrol'])){
      echo "<script language='JavaScript'> 
            alert('el nombre o el numero de control no han sido ingresados');
            location.assign('login.php');</script>";
        }else{
          include("conexion.php");
        $nombre=$_POST['nombre'];
        $nocontrol=$_POST['nocontrol'];
        $sql="select * from alumnos where nombre='".$nombre."' and nocontrol='".$nocontrol."'";
        $resultado=mysqli_query($conexion,$sql);
        if ($fila=mysqli_fetch_assoc($resultado)){
          echo "<script language='JavaScript'> 
            alert('bienvendio');
            location.assign('index.php');</script>";
        }else{
          echo "<script language='JavaScript'> 
            alert('el nombre o numero de control son erroneos');
            location.assign('login.php');</script>";
        }
    }  

  }else{

?>
  <center>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <br>
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
      <br>
          <label>No. Control</label>
          <input type="text" name="nocontrol"/>
      <br>
      <input type="submit" name="enviar" value="INGRESAR"/>
    </form>
  </center>
<?php
    }
?>

</body>
</html>