<?php
require '../php/conexion.php';

if(isset($_POST['user_id']) && is_numeric($_POST['user_id'])){
    $id = $_POST['user_id'];
    $qs = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = '".$id."'");
    if (mysqli_num_rows($qs)){
        $qs = mysqli_query($conexion, "UPDATE usuarios SET username = '".$_POST['username']."', email = '".$_POST['email']."' WHERE id = '".$id."'");
        header("Location: index.php?msg=3");
    }else{
        header("Location: index.php?msg=4");
    }
}else{
    header("Location: index.php");
}