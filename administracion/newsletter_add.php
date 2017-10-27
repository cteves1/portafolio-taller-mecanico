<?php
require '../php/conexion.php';
print_r($_POST);
if(isset($_POST['tittle']) && isset($_POST['message']) && isset($_POST['landing'])){

            $insert = mysqli_query($conexion, "INSERT INTO newsletters (tittle,message,status,id_ladingpage,created_at,exp_at) 
                                                              VALUES ('".$_POST['tittle']."','".$_POST['message']."',1,'".$_POST['landing']."','".$_POST['created_at']."','".$_POST['exp_at']."')");
            header("Location: newsletter.php?msg=8");
}else{
    header("Location: index.php");
}