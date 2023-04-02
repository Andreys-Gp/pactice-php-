<?php include("template/cabecera.php");?>

<?php
include ("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM  libros");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC); 
?>

<?php foreach ($listaLibros as $libro){
	
 ?>
<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php print $libro['imagen'];?>" alt="">
<div class="card-body">
					<h4 class="card-title"><?php print $libro['nombre'];?></h4>
					<a name="" id="" class="btn btn-primary" href="http://catc.unal.edu.co/cursos/programacion" role="button">Ir al sitio</a>
</div>
</div>
</div>
<?php }?>




		
			

<?php include ("template/pie.php");?>	 

