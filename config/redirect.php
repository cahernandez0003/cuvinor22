<?php
	if (isset($_SESSION['urol'])) {
		if($_SESSION['urol'] == 'Aprendiz') {
			echo "<script> window.location.replace('pages/apprentice.php'); </script>";
		} else if($_SESSION['urol'] == 'Instructor') {
			echo "<script> window.location.replace('pages/instructor.php'); </script>";
		} else if($_SESSION['urol'] == 'Admin') {
			echo "<script> window.location.replace('pages/administrator.php'); </script>";
		}
	}