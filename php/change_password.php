<?php

session_start();
if (isset($_COOKIE['id_user'])) {

	require("conexion.php");
	
	if (isset($_POST['cambiar_password'])) {

		$actualpass = md5($_POST["actualpass"]);
		$newpass = md5($_POST["newpass"]);
		$renewpass = md5($_POST["renewpass"]);

		$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '".$_COOKIE['id_user']."'");

		if (mysqli_num_rows($consulta)>0) {

			$user = mysqli_fetch_assoc($consulta);

			if ($actualpass == $user['password']) {

				if ($newpass == $renewpass) {

					$update = mysqli_query($conexion, "UPDATE usuarios SET password = '".$newpass."' WHERE id_usuario = '".$_COOKIE['id_user']."'");

					if ($update) {
						echo "La password ha sido cambiada con exito";
					}else{
						echo "Error en cambiar la password";
					}

				}else{
					echo "las contraseñas no coinciden <br>";
					echo "<p>redireccionando<p>";
					sleep(2);
					header("location: ../index.php");
				}

			}else{
				echo "La contraseña actual es incorrecta";
				echo "<p>redireccionando<p>";
				sleep(2);
				header("location: ../index.php");
			}

		}else{
			echo "la contraseña actual es incorrecta";
			echo "<p>redireccionando<p>";
			sleep(2);
			header("location: ../index.php");
		}
	}
	
}


?>