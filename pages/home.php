<hr>
<h2 class="text-center" style="color: #008000;"> 
	<img src="public/imgs/fotos/logo.png" style="width: 100px;"><!-- <i class="fa fa-users"></i> -->
	TALENTO HUMANO
	<img src="public/imgs/fotos/logo.png" style="width: 100px; transform: rotateY(180deg);"><!-- <i class="fa fa-users"></i> -->
</h2>
<hr>
<p class="text-muted text-center">
	Sistema de información y administración del talento humano para empresas.
</p>
<br>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<h4 class="text-purple text-center"> <i class="fa fa-sign-in-alt"></i> Ingreso de Usuarios </h4>
		<hr>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="correo" placeholder="Correo Electrónico">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="clave" placeholder="Contraseña">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-outline-success btn-block"> <i class="fa fa-sign-in-alt"></i> Ingresar </button>
			</div>
		</form>
		<?php 
			if ($_POST) {
				$correo = $_POST['correo'];
				$clave  = $_POST['clave'];
				if(login($con, $correo, $clave)) {
					
					if($_SESSION['urol'] == 'Admin') {
						echo "<script> window.location.replace('pages/administrator.php'); </script>";
					}
				} else {
					$_SESSION['type']    = 'danger';
					$_SESSION['message'] = 'Los datos del Usuario son Incorrectos!';
				}
			}

		?>
	</div>
</div>