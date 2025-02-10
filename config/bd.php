<?php
	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// Conectar Base de Datos
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */
	try {
		$con = new PDO("mysql:host=$host;dbname=$nmdb",$user,$pass);
		$con->exec('set names utf8');
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Se ha conectado a la base de datos";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// Login
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */
	function login($con, $correo, $clave) {
		try {
			$sql = "SELECT * FROM admins WHERE correo = :correo AND clave = :clave LIMIT 1";
			$stm = $con->prepare($sql);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':clave', $clave);
			$stm->execute();
			if($stm->rowCount() > 0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid'] =  $urow['id'];
				$_SESSION['ucorreo']   =  $urow['correo'];
				$_SESSION['ufoto']      =  $urow['foto'];
				$_SESSION['urol']       =  $urow['rol'];
				return true;
			} else {
				return false;
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}	
	}

	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// Usuarios
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */
	function adicionarUsuario($con, $documento, $nombres, $apellidos, $genero, $puesto, $fnacimiento, $nacionalidad, $direccion, $codpostal, $telefono, $correo, $clave, $escolaridad, $titulos, $experiencia, $idiomas, $rol, $foto) {
		try {
			$sql = "INSERT INTO usuarios (documento, nombres, apellidos, genero, puesto, fnacimiento, nacionalidad, direccion, codpostal, telefono, correo, clave, escolaridad, titulos, experiencia, idiomas, rol, foto) VALUES (:documento, :nombres, :apellidos, :genero, :puesto, :fnacimiento, :nacionalidad, :direccion, :codpostal, :telefono, :correo, :clave, :escolaridad, :titulos, :experiencia, :idiomas, :rol, :foto)";
			$stm = $con->prepare($sql);
			$stm->bindparam(":documento", $documento);
			$stm->bindparam(":nombres", $nombres);
			$stm->bindparam(":apellidos", $apellidos);
			$stm->bindparam(":genero", $genero);
			$stm->bindparam(":puesto", $puesto);
			$stm->bindparam(":fnacimiento", $fnacimiento);
			$stm->bindparam(":nacionalidad", $nacionalidad);
			$stm->bindparam(":direccion", $direccion);
			$stm->bindparam(":codpostal", $codpostal);
			$stm->bindparam(":telefono", $telefono);
			$stm->bindparam(":correo", $correo);
			$stm->bindparam(":clave", $clave);
			$stm->bindparam(":escolaridad", $escolaridad);
			$stm->bindparam(":titulos", $titulos);
			$stm->bindparam(":experiencia", $experiencia);
			$stm->bindparam(":idiomas", $idiomas);
			$stm->bindparam(":rol", $rol);
			$stm->bindparam(":foto", $foto);

			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	function listaUsuarios($con) {
		try {
			$sql = "SELECT * FROM usuarios order by nombres ASC";
			$stm = $con->prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	function mostrarUsuario($con, $id) {
		try {
			$sql = "SELECT * FROM usuarios WHERE documento = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(":id", $id);
			$stm->execute();

			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}


	function modificarUsuario($con, $documento, $nombres, $apellidos, $genero, $puesto, $fnacimiento, $nacionalidad, $direccion, $codpostal, $telefono, $correo, $clave, $escolaridad, $titulos, $experiencia, $idiomas, $rol, $foto) {
		try {

			if($foto == null) {
				$sql = "UPDATE usuarios SET nombres=:nombres, apellidos=:apellidos, genero=:genero, puesto=:puesto, fnacimiento=:fnacimiento, nacionalidad=:nacionalidad, direccion=:direccion, codpostal=:codpostal, telefono=:telefono, correo=:correo, clave=:clave, escolaridad=:escolaridad, titulos=:titulos, experiencia=:experiencia, idiomas=:idiomas, rol=:rol WHERE documento = :documento";
			} else {
				$sql = "UPDATE usuarios SET nombres=:nombres, apellidos=:apellidos, genero=:genero, puesto=:puesto, fnacimiento=:fnacimiento, nacionalidad=:nacionalidad, direccion=:direccion, codpostal=:codpostal, telefono=:telefono, correo=:correo, clave=:clave, escolaridad=:escolaridad, titulos=:titulos, experiencia=:experiencia, idiomas=:idiomas, rol=:rol, foto=:foto WHERE documento = :documento";
			}

			$stm = $con->prepare($sql);
			$stm->bindparam(":documento", $documento);
			$stm->bindparam(":nombres", $nombres);
			$stm->bindparam(":apellidos", $apellidos);
			$stm->bindparam(":genero", $genero);
			$stm->bindparam(":puesto", $puesto);
			$stm->bindparam(":fnacimiento", $fnacimiento);
			$stm->bindparam(":nacionalidad", $nacionalidad);
			$stm->bindparam(":direccion", $direccion);
			$stm->bindparam(":codpostal", $codpostal);
			$stm->bindparam(":telefono", $telefono);
			$stm->bindparam(":correo", $correo);
			$stm->bindparam(":clave", $clave);
			$stm->bindparam(":escolaridad", $escolaridad);
			$stm->bindparam(":titulos", $titulos);
			$stm->bindparam(":experiencia", $experiencia);
			$stm->bindparam(":idiomas", $idiomas);
			$stm->bindparam(":rol", $rol);
			$stm->bindparam(":foto", $foto);
			if($foto != null) {
				$stm->bindparam(":foto", $foto);
			} 
			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	function eliminarUsuario($con, $id) {
		try {
			$sql = "DELETE FROM usuarios WHERE documento = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(":id", $id);
			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}