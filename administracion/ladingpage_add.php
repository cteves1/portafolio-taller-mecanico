<?php
require '../php/conexion.php';
if(isset($_POST['product'])){

    $insert = mysqli_query($conexion, "INSERT INTO ladingpages (id_product) VALUES('".$_POST['product']."')");
    header('Location: newsletter.php?msg=10');
}else{
    header('Location: newsletter.php');
}