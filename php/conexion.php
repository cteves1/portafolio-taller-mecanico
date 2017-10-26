<?php

//Datos de la conexión
/*
$host = "localhost";
$user = "vivencia_administrador";
$pass = "vivencia2017";
$db   = "vivencia_cris";
*/


$conexion=mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conexion, "taller");

/*if (isset($_COOKIE['id_user'])) {
	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='{$_COOKIE['id_user']}'");
}
*/
	
	//Eliminacion de registro
	
	$consulta_fecha = mysqli_query($conexion, "SELECT fecha, email FROM registros");	

	
	while ($registro=mysqli_fetch_assoc($consulta_fecha)) {
		$fecha=$registro['fecha'];
		$email=$registro['email'];
		//echo $mail;
			//echo "Fecha before: ".$fecha;
		//Tomamos la fecha de la base de datos
			//$fecha=date("d-m-Y", strtotime($fecha));
		//echo "Fecha after: ".$fecha;
		$exp_date=strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
		//echo $exp_date;
		//Convertimos la fecha de Y-m-d a d-m-Y.
		//Creamos una variable para la fecha de expiración agregándole la cantidad de días que querramos
		$exp_date= date ( 'd-m-Y' , $exp_date );
		$hoy = date("d-m-Y");
		//echo "<p>Fecha de entrada: ".$fecha."</p>";
		//echo "<p>Exp date: ".$exp_date."</p>";
		//echo "<p>Hoy: ".$hoy."</p>";
		if (strtotime($hoy)>strtotime($exp_date)) {

			$borrar=mysqli_query($conexion, "DELETE * FROM registros WHERE email='".$email."'");
		}
		//La función strtotime($fechax); lo que hace es pasar un formato de fecha inglés a fecha unix que es expesada en segundos-
		// Al ser segundos los podemos comprar con un if y obtener resultado.
	}
 ?>
