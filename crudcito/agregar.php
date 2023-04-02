<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar']))
        {
            $nombre=$_POST['Nombre'];
            $NoControl=$_POST['NoControl'];
            include("conexion.php"); // incluye la conexion a bd
            $sql="insert into alumnos(Nombre,NoControl)
            values('".$nombre."', '".$NoControl."')";
            
            $resultado=mysqli_query($conexion, $sql);

            if($resultado){
                echo "<script language='JavaScript'>
                alert('Los Datos Fueron Ingresados
                correctamente a la BD');
                location.assign('index.php');
                </script>";
            }else{
                echo" <script language='JavaScript'>
                alert('ERROR: Los datos fueron ingresados
                correctamente a la BD');
                location.assign('index.php');
                </script>";
            }
            mysqli_close($conexion);
        }else{}
    ?>

    <h1>Agregar nuevo alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre</label>
        <input type="text" name="Nombre"><br>
        <label>N° Control</label>|
        <input type="text" name="NoControl"><br>
        <input type="submit" name="enviar" value="agregar">
        <a href="index.php">Regresar</a>
    </form>
</body>
</html>