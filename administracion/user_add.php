<?php
require '../php/conexion.php';
print_r($_POST);
if(isset($_POST['username']) && isset($_POST['email'])){
    $qs = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '".$_POST['email']."'");
    if (mysqli_num_rows($qs) < 1){
        $password = md5($_POST['password']);
        $insert = mysqli_query($conexion, "INSERT INTO usuarios (username, email, password, sub, created_at, last_session) VALUES ('".$_POST['username']."','".$_POST['email']."', '".$password."', 1, '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')");
        header("Location: index.php?msg=4");
    }else{
        header("Location: index.php?msg=5");
    }
}else{
    header("Location: index.php");
}