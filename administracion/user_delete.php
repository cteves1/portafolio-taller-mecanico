<?php
require '../php/conexion.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $qs = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = '".$id."'");
    if (mysqli_num_rows($qs)){
        $qs = mysqli_query($conexion, "DELETE FROM usuarios WHERE id = '".$id."'");
        header("Location: index.php?msg=1");
    }else{
        header("Location: index.php?msg=2");
    }
}else{
    header("Location: index.php");
}