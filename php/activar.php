<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	require ("conexion.php");

	$codigo = $_GET['codigo'];

	$consulta = mysqli_query($conexion,"SELECT * FROM registros WHERE codigo='".$codigo."'");
	
	if (mysqli_num_rows($consulta)>0) {
		if ($row = mysqli_fetch_assoc($consulta)) {

			mysqli_query($conexion, "SELECT usuarios");
			$insertar= mysqli_query($conexion, "INSERT INTO usuarios (nick, email, password, sub, ult_sesion) VALUES ('".$row["nick"]."', '".$row["email"]."', '".$row["password"]."', '".$row["sub"]."', '".$row["fecha"]."')");

				if ($insertar) {
					$borrar= mysqli_query($conexion, "DELETE FROM registros WHERE id_registro='".$row['id_registro']."'");
					echo "<script>alert('Activación de cuenta exitosa!')</script>";
				}else{
					echo "<script>alert('Hay un error en el Insertar el nuevo usuario')</script>";
				}
		}else{
			echo "<script>alert('No se encontró un registro con ese codigo')</script>";
		}
	}else{
		echo "<script>alert('No hay ningun registro')</script>";
	}
?>
<p>Redireccionando...</p>
<?php header('Refresh: 2; index.php'); ?>
</body>
</html>