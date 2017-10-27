<?php
require '../php/conexion.php';
print_r($_POST);
if(isset($_POST['tittle']) && isset($_POST['message']) && isset($_POST['landing'])){
    $insert = mysqli_query($conexion, "UPDATE newsletters SET tittle = '".$_POST['tittle']."', message = '".$_POST['message']."',id_ladingpage = '".$_POST['landing']."', created_at = '".$_POST['created_at']."',exp_at = '".$_POST['exp_at']."' WHERE id = '".$_POST['newsletter_id']."'");
    header("Location: newsletter.php?msg=9");
}else{
    header("Location: index.php");
}