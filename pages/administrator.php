<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 text-center">
			<h1 class="text-muted"> Administración de empleados </h1>
			<hr>
			<div class="btn-group-vertical">
				<a href="../usuarios/" class="btn btn-outline-success btn-lg text-left"> 
					<i class="fa fa-users"></i>
				 	Talento Humano 
				</a>
				<a href="#" class="btn btn-outline-success btn-lg text-left"> 
				 	<i class="fa fa-book"></i>
				 	Horarios laborales 
				</a>
				<a href="#" class="btn btn-outline-success btn-lg text-left"> 
				 	<i class="fa fa-clipboard"></i>
				 	Módulo Vacaciones 
				</a>
				<br>
          		<a href="<?php echo $url_site.'pages/close.php'; ?>" class="btn btn-outline-danger btn-lg text-left">
          			<i class="fa fa-times"></i> 
          			Cerrar Sesión
          		</a>
			</div>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>
