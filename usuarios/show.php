<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<style>
	td{
		padding: 0;
		margin: 0;
		align-items: center;
		vertical-align: middle;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="text-muted text-center"> <i class="fa fa-search"></i> Consultar Empleado </h1>
			<hr>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			  	<li class="breadcrumb-item"><a href="index.php" class="text-purple">Módulo Empleados</a></li>
			    <li class="breadcrumb-item active">Consultar Empleado</li>
			  </ol>
			</nav>
			<?php $usu = mostrarUsuario($con, $_GET['id']); ?>
			<table class="table table-striped table-hover" style="font-size: 15px;">
			<?php foreach ($usu as $urow): ?>	
				<h3 colspan="12" class="text-center" style="background-color: lightslategray;">PERFIL DEL EMPLEADO</h3>
				<tr>
					<td rowspan="100%"> 
						<img class="border rounded-circle" src="../<?php echo $urow['foto']; ?>" width="200px" data-img="<?php echo $urow['foto']; ?>" style="cursor: zoom-in;"><br>
					<h3 class="text-center"><?php echo $urow['nombres']; ?> &nbsp; <?php echo $urow['apellidos']; ?></h3>
					<hr><h5 class="text-center"><?php echo $urow['puesto']; ?></h5> </td>
				</tr>
				
				<tr>
					<th> Identificación: </th>
					<td> <?php echo $urow['documento']; ?> </td>
					<th>Género:</th>
					<td>
						<?php 
							if($urow['genero'] == 'Femenino')
								echo "Femenino <i class='fa fa-venus'></i>";
							else if($urow['genero'] == 'Masculino')
								echo "Masculino <i class='fa fa-mars'></i>";
							else if($urow['genero'] == 'Transgenero')
								echo "Transgenero <i class='fa fa-transgender'></i>";
						?>
					</td>
				</tr>
				<tr>
					<th> Nacido: </th>
					<td> <?php echo $urow['fnacimiento']; ?> </td>
					<th>Edad: </th>
					<td>
						<?php  
							$cumpleanos = new DateTime($urow['fnacimiento']); 
							$hoy = new DateTime(); 
							$annos = $hoy->diff($cumpleanos); 
							echo $annos->y; 
						?>
					</td>
				</tr>
					<th> Nacionalidad: </th>
					<td> <?php echo $urow['nacionalidad']; ?> </td>
					<th> Código Postal: </th>
					<td> <?php echo $urow['codpostal']; ?> </td>
				</tr>

				<tr>
					<th> Dirección: </th>
					<td colspan="3"> <?php echo $urow['direccion']; ?> </td>
				</tr>

				<tr>
					<th> Móvil: </th>
					<td> <?php echo $urow['telefono']; ?> </td>
					<th> Correo: </th>
					<td> <?php echo $urow['correo']; ?> </td>
				</tr>

			<tbody style="font-family: sans-serif; font-size: 16px;">

				<tr>
					<th> Nivel Académico: </th>
					<td colspan="4"> <?php echo $urow['escolaridad']; ?> </td>
				</tr>

				<tr>
					<th> Titulación: </th>
					<td colspan="4"> <?php echo $urow['titulos']; ?> </td>
				</tr>

				<tr>
					<th> Experiencia Laboral: </th>
					<td colspan="4"> <?php echo $urow['experiencia']; ?> </td>
				</tr>

				<tr>
					<th> Lengua: </th>
					<td colspan="4"> <?php echo $urow['idiomas']; ?> </td>
				</tr>
			</tbody>
			<?php endforeach ?>
			</table>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>