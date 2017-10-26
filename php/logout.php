<?php 
session_start();
//Se acaba de destruir la sesión (o cerrar sesion)
if (session_start() and isset($_COOKIE['id_user'])) {
	setcookie("id_user", "", time () - 60*60*24*30, "/");
	unset($_COOKIE['id_user']);
	header("location: ../index.php");
}else{
	setcookie("id_admin", "", time () - 60*60*24*30, "/");
	unset($_COOKIE['id_admin']);
	header("location: ../index.php");
}
 ?>
