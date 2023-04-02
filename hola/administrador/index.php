<?php
session_start();
if ($_POST){
	if (($_POST['usuario']=="develoteca") && ($_POST['contraseña']=="sistema")){
		$_SESSION['usuario']="ok";
		$_SESSION['nombreUsuario']="develoteca";
		header('Location:Inicio.php');
	}else{
		$mensaje="Error: El usuario o contraseña son incorrectos";
	}

	
	
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Administrador</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
	</head>
	<body>
		
		<div class="container">
			<div class="row">

		<div class="col-md-4">
		</div>
				
		<div class="col-md-4">
<br/><br/><br/><br/><br/><br/><br/><br/>						

							<div class="card-header">
								Login
							</div>

							<div class="card-body">
								<?php if (isset($mensaje)){?>
								<div class="alert alert-danger" role="alert">
									<?php print $mensaje; ?>
								</div>
							<?php } ?>
								<form method="POST">
								  <div class="form-group">
								    <label >USUARIO:</label>

								    <input type="text" class="form-control" name="usuario"   placeholder="Ingresa tu usuario">

								    <small id="emailHelp" class="form-text text-muted">No compartas esta informacion con otras personas.</small>
								  </div>

								  <div class="form-group">
								    <label >CONTRASEÑA:</label>
								    <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña">
								  </div>

								  

								  <button type="submit" class="btn btn-primary">INGRESAR AL SISTEMA</button>
								</form>
				
						</div>
						
				</div>


					
				</div>
		
			</div>
		</div>
	
	</body>
</html>