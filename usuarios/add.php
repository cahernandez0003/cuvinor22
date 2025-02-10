<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<h1 class="text-muted text-center"> <i class="fa fa-plus"></i> Adicionar Empleado </h1>
			<hr>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			  	<li class="breadcrumb-item"><a href="index.php" class="text-purple">Módulo Empleados</a></li>
			    <li class="breadcrumb-item active">Adicionar Empleado</li>
			  </ol>
			</nav>
			<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" class="form-control" name="documento" placeholder="Documento de Identidad" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
					</div>
					<div class="form-group">
						<select name="genero" class="form-control" required>
							<option value="">Seleccione el Genero...</option>
							<option value="Femenino">Femenino</option>
							<option value="Masculino">Masculino</option>
							<option value="Otro">Otro</option>
						</select>
					</div>
					<div class="form-group">
						<select name="puesto" class="form-control" required>
							<option value="">Seleccione el puesto de trabajo...</option>
							<option value="Vendedor/a">Vendedor/a</option>
							<option value="Carnicero/a">Carnicero/a</option>
							<option value="Almacenista">Almacen</option>
							<option value="Conductor">Conductor</option>
							<option value="Administrativo/a">Administrativo/a</option>
							<option value="Operativo/a">Operativo/a</option>
						</select>
					</div>
					<div class="form-group">
						<label class="form-group">Fecha nacimiento</label>
						<input type="date" class="date" name="fnacimiento" placeholder="Fecha de nacimiento" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="direccion" placeholder="Dirección de residencia" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="codpostal" placeholder="Código Postal" required>
					</div>
					<div class="form-group">
						<input id="telefono" type="number" class="form-control" name="telefono" placeholder="Número Telefónico" maxlength="9" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="clave" placeholder="clave" style="display: none;">
					</div>
					<div class="form-group">
						<select name="escolaridad" class="form-control" required>
							<option value="">Seleccione nivel académico...</option>
							<option value="BASICA PRIMARIA">Básica Primaria</option>
							<option value="BACHILLER">Bachiller/a</option>
							<option value="TECNICO">Técnico</option>
							<option value="TECNOLOGO">Tecnólogo</option>
							<option value="UNIVERSITARIO">Universitario</option>
							<option value="POSGRADO">Posgrado</option>
							<option value="MAESTRIA">Maestría</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="titulos" placeholder="Título obtenido">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="experiencia" placeholder="Experiencia laboral" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="idiomas" placeholder="Idiomas" required>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="foto" accept="image/*">
						<button class="btn btn-default btn-foto"> <i class="fa fa-user"></i> Seleccione Foto de Perfil </button>
					</div>
					<div class="form-group" style="display: none;">
						<select name="rol" class="form-control">
							<option value="">Seleccione el Rol...</option>
							<option value="Admin">Administrador</option>
							<option value="Instructor">Instructor</option>
							<option value="Aprendiz">Aprendiz</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar </button>
						<button type="reset" class="btn btn-default"> <i class="fa fa-sync-alt"></i> Limpiar </button>
					</div>
				</form>
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

					$url = 'public/imgs/fotos/nofoto.png';
					$foto = $url.$_FILES['foto']['name'];
					move_uploaded_file($_FILES['foto']['tmp_name'], '../'.$url.$_FILES['foto']['name']);

					if (adicionarUsuario($con, $documento, $nombres, $apellidos, $genero, $puesto, $fnacimiento, $nacionalidad, $direccion, $codpostal, $telefono, $correo, $clave, $escolaridad, $titulos, $experiencia, $idiomas, $rol, $foto)) {
						$_SESSION['type']    = 'success';
						$_SESSION['message'] = 'El usuario se adicionó con exito!';
					} else {
						$_SESSION['type']    = 'danger';
						$_SESSION['message'] = 'El usuario no se adicionó!';
					}
				}
			?>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>