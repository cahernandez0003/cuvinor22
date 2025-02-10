<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-muted text-center"> <i class="fa fa-users"></i> Módulo Empleados </h1>
			<hr>
			<a href="add.php" class="btn btn-outline-success"> <i class="fa fa-plus"></i> Empleado </a>
			<hr>
			<table class="table table-striped table-hover" style="font-size: 14px;">
				<thead>
					<tr>

						<th> Imagen</th>
						<th> Nombre Completo</th>
						<th> Puesto de trabajo</th>
						<th> Teléfono</th>
						<th> Correo</th>
						<th> Acciones </th>
					</tr>
				</thead>
				<tbody>
					<?php $lstu = listaUsuarios($con);  ?>
					<?php foreach ($lstu as $urow): ?>
						<tr>

							<td> <img src="../<?php echo $urow['foto']; ?>" width="50px" data-img="<?php echo $urow['foto']; ?>" style="cursor: zoom-in;">
							</td>
							<td> <?php echo $urow['nombres']; ?> &nbsp;<?php echo $urow['apellidos']; ?></td>
							<td> <?php echo $urow['puesto']; ?></td>
							<td> <?php echo $urow['telefono']; ?></td>
							<td> <?php echo $urow['correo']; ?></td>

							<td>
								<a href="show.php?id=<?php echo $urow['documento']; ?>" class="btn btn-outline-success"> 
									<i class="fa fa-search"></i> 
								</a>
								<a href="edit.php?id=<?php echo $urow['documento']; ?>" class="btn btn-outline-success"> 
									<i class="fa fa-edit"></i> 
								</a>
								<a href="javascript:;" class="btn btn-outline-danger btn-delete" data-id="<?php echo $urow['documento']; ?>"> 
									<i class="fa fa-trash"></i> 
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>