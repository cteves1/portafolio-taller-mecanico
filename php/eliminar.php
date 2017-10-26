<?php 
require("conexion.php");

	$delete = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_usuario='{$_GET['id']}'");

		if ($delete) {
			echo "<script>alert('Registro eliminado con éxito')</script>";
			header("location: index.php ");
		}else{
			echo "Error al eliminar el registro";
		}
	
	
 ?>