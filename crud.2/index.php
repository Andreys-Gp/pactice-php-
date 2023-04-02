<html>
<head>
   <title> alumnos </title>
   </head>
   <body>

<?php
   include("registro.php");
   //select * from alumnos
   $sql="select * from alumnos";
   $resultado=mysqli_query($registro,$sql);
?>
   <h1>alumnos</h1>
    <a href =""> alumnos</a><br><br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>nombre</th>
                <th>nocontrol</th>
                <th>Acciones</th>   

            </tr>
        </thead>
        <tbody>
            <?php
            
             

             while ($filas=mysqli_fecth_assoc($resultado)) {
           
             ?> 
            <tr>
                <td><?php echo $filas['ID']; ?></td>
                <td><?php echo $filas['nombre'] ;?></td> 
                <td><?php echo $filas['nocontrol'] ;?></td>
                <td> 

                    <?php echo "<a href=''> EDITAR </a>"; ?>
                    - 
                    <?php echo "<a href=''> ELIMINAR </a>"; ?>   
                    
                </td>

              </tr>
            <?php 
                }
              ?>
        </tbody>
    </table>
    <?php 
        mysql_close($registro);
    ?>
   </body>
   </html>}