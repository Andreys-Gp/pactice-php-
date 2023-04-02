<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
</head>
<body>

    <?php
    include("conexion.php");
    //select * from alumnos
    $sql="select * from alumnos";
    $resultado = mysqli_query($conexion, $sql);
    
    ?>

    <h1>Lista de Alumnos</h1>
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
                while ($filas=mysqli_fetch_assoc($resultado)){ 
            ?>
            <tr>
                <td><?php echo $filas['ID'] ?></td>
                <td><?php echo $filas['Nombre'] ?></td>
                <td><?php echo $filas['NoControl'] ?></td>
                <td>
                     <?php echo "<a href=''>Editar</a>";?>
                     <?php echo "<a href=''>Eliminar</a>"; ?>
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