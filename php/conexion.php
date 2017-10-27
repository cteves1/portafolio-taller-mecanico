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

date_default_timezone_set('America/Argentina/Buenos_Aires');
$alert = false;
$alert_msg = "";
$alert_type = "";
if(isset($_GET['msg'])){
    $alert = true;
    switch ($_GET['msg']){
        case 1:
            $alert_msg = "El usuario fue eliminado correctamente.";
            $alert_type = "success";
            break;
        case 2:
            $alert_msg = "El usuario no fue eliminado correctamente, posiblemente no exista.";
            $alert_type = "danger";
            break;
        case 3:
            $alert_msg = "El usuario fue editado correctamente.";
            $alert_type = "success";
            break;
        case 4:
            $alert_msg = "El usuario no fue editado correctamente, posiblemente no exista.";
            $alert_type = "danger";
            break;
        case 5:
            $alert_msg = "El usuario fue agregado correctamente.";
            $alert_type = "success";
            break;
        case 6:
            $alert_msg = "El usuario no fue agregado correctamente, las contraseñas no coinciden.";
            $alert_type = "danger";
            break;
        case 7:
            $alert_msg = "El usuario no fue agregado correctamente, el correo ya existe.";
            $alert_type = "danger";
            break;
        case 8:
            $alert_msg = "El newsletter fue agregado correctamente.";
            $alert_type = "success";
            break;
        case 9:
            $alert_msg = "El newsletter fue editado correctamente.";
            $alert_type = "success";
            break;
        case 9:
            $alert_msg = "El ladingpage fue creado correctamente.";
            $alert_type = "success";
            break;
    }
}



/*if (isset($_COOKIE['id_user'])) {
	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='{$_COOKIE['id_user']}'");
}
*/
$registros = mysqli_query($conexion, "SELECT * FROM registros");
//Eliminacion de registro
$deletes = 0;
    while ($registro = mysqli_fetch_assoc($registros)) {
        $exp = time() - strtotime($registro["created_at"]);
        if( $exp > 3600){
            $borrar= mysqli_query($conexion, "DELETE FROM registros WHERE email='".$registro["email"]."'");
            $deletes++;
        }
	}
	if ($deletes> 0){
        $alert = false;
        $alert_msg = "Se borraron ".$deletes." registro expirados";
        $alert_type = "success";
    }
 ?>
