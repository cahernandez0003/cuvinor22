<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="text-muted text-center"> <i class="fa fa-edit"></i> Modificar Usuario </h1>
			<hr>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			  	<li class="breadcrumb-item"><a href="index.php" class="text-purple">Módulo Usuarios</a></li>
			    <li class="breadcrumb-item active">Modificar  Usuario</li>
			  </ol>
			</nav>
			<?php $usu = mostrarUsuario($con, $_GET['id']); ?>
			<?php foreach ($usu as $urow): ?>	
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="documento" placeholder="Documento de Identidad" required value="<?php echo $urow['documento']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="Nombres" required value="<?php echo $urow['nombres']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required value="<?php echo $urow['apellidos']; ?>">
					</div>
					<div class="form-group">
						<select name="genero" class="form-control" required>
							<option value="">Seleccione el Genero...</option>
							<option value="Femenino" <?php if($urow['genero'] == "Femenino") echo "selected"; ?> >Femenino</option>
							<option value="Masculino" <?php if($urow['genero'] == "Masculino") echo "selected"; ?> >Masculino</option>
							<option value="Otro" <?php if($urow['genero'] == "Otro") echo "selected"; ?> >Otro</option>
						</select>
					</div>
					<div class="form-group">
						<select name="puesto" class="form-control" required>
							<option value="">Seleccione puesto de trabajo...</option>
							<option value="Vendedor/a" <?php if($urow['puesto'] == "Vendedor/a") echo "selected"; ?> >Vendedor/a</option>
							<option value="Carnicero/a" <?php if($urow['puesto'] == "Carnicero/a") echo "selected"; ?> >Carnicero/a</option>
							<option value="Almacenista" <?php if($urow['puesto'] == "Almacenista") echo "selected"; ?> >Almacen</option>
							<option value="Conductor" <?php if($urow['puesto'] == "Conductor") echo "selected"; ?> >Conductor</option>
							<option value="Administrativo/a" <?php if($urow['puesto'] == "Administrativo/a") echo "selected"; ?> >Administrativo/a</option>
							<option value="Operativo/a" <?php if($urow['puesto'] == "Operativo/a") echo "selected"; ?> >Operativo/a</option>
						</select>
					</div>
					<div class="form-group">
						<label class="form-group">Fecha nacimiento</label>
						<input type="date" class="date" name="fnacimiento" placeholder="Fecha de nacimiento" required value="<?php echo $urow['fnacimiento']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad" required value="<?php echo $urow['nacionalidad']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="direccion" placeholder="Dirección" required value="<?php echo $urow['direccion']; ?>">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="codpostal" placeholder="Código postal" required value="<?php echo $urow['codpostal']; ?>">
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="telefono" placeholder="Número Telefónico" required value="<?php echo $urow['telefono']; ?>">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required value="<?php echo $urow['correo']; ?>">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="clave" placeholder="clave" style="display: none;">
					</div>
					<div class="form-group">
						<select name="escolaridad" class="form-control" required>
							<option value="">Seleccione nivel académico...</option>
							<option value="BASICA PRIMARIA" <?php if($urow['escolaridad'] == "BASICA PRIMARIA") echo "selected"; ?> >BASICA PRIMARIA</option>
							<option value="BACHILLER" <?php if($urow['escolaridad'] == "BACHILLER") echo "selected"; ?> >BACHILLER</option>
							<option value="TECNICO" <?php if($urow['escolaridad'] == "TECNICO") echo "selected"; ?> >TECNICO</option>
							<option value="TECNOLOGO" <?php if($urow['escolaridad'] == "TECNOLOGO") echo "selected"; ?> >TECNOLOGO</option>
							<option value="UNIVERSITARIO" <?php if($urow['escolaridad'] == "UNIVERSITARIO") echo "selected"; ?> >UNIVERSITARIO</option>
							<option value="POSGRADO" <?php if($urow['escolaridad'] == "POSGRADO") echo "selected"; ?> >POSGRADO</option>
							<option value="MAESTRIA" <?php if($urow['escolaridad'] == "MAESTRIA") echo "selected"; ?> >MAESTRIA</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="titulos" placeholder="Título obtenido" value="<?php echo $urow['titulos']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="experiencia" placeholder="Experiencia laboral" required value="<?php echo $urow['experiencia']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="idiomas" placeholder="Idiomas" required value="<?php echo $urow['idiomas']; ?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="rol" placeholder="clave" style="display: none;">
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="foto" accept="image/*">
						<button class="btn btn-default btn-foto"> <i class="fa fa-user"></i> Seleccione Foto de Perfil </button>
						<input type="hidden" name="url_foto" value="<?php echo $urow['foto']; ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Modificar </button>
						<button type="reset" class="btn btn-default"> <i class="fa fa-sync-alt"></i> Limpiar </button>
					</div>
				</form>
			<?php endforeach ?>
			<?php 
				if($_POST) {
					$documento= $_POST['documento'];
					$nombres= $_POST['nombres'];
					$apellidos= $_POST['apellidos'];
					$genero= $_POST['genero'];
					$puesto= $_POST['puesto'];
					$fnacimiento= $_POST['fnacimiento'];
					$nacionalidad= $_POST['nacionalidad'];
					$direccion= $_POST['direccion'];
					$codpostal= $_POST['codpostal'];
					$telefono= $_POST['telefono'];
					$correo= $_POST['correo'];
					$clave= $_POST['clave'];
					$escolaridad= $_POST['escolaridad'];
					$titulos= $_POST['titulos'];
					$experiencia= $_POST['experiencia'];
					$idiomas= $_POST['idiomas'];
					$rol= $_POST['rol'];

					if ($_FILES['foto']['tmp_name']) {
						$url  = 'public/imgs/fotos/';
						$foto = $url.$_FILES['foto']['name'];
						if($_POST['url_foto'] != 'public/imgs/fotos/nofoto.png') {
							unlink('../'.$_POST['url_foto']);
						}
						move_uploaded_file($_FILES['foto']['tmp_name'], '../'.$url.$_FILES['foto']['name']);
					} else {
						$foto = null;
					}

					if (modificarUsuario($con, $documento, $nombres, $apellidos, $genero, $puesto, $fnacimiento, $nacionalidad, $direccion, $codpostal, $telefono, $correo, $clave, $escolaridad, $titulos, $experiencia, $idiomas, $rol, $foto)) {
						$_SESSION['type']    = 'success';
						$_SESSION['message'] = 'El Usuario se Modifico con Exito!';
					} else {
						$_SESSION['type']    = 'danger';
						$_SESSION['message'] = 'El Usuario no se Modifico!';
					}
				}
			?>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>