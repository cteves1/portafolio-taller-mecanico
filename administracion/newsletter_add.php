<?php
require '../php/conexion.php';
if(isset($_POST['tittle']) && isset($_POST['message']) && isset($_POST['landing'])){

            $insert = mysqli_query($conexion, "INSERT INTO newsletters (tittle,message,id_ladingpage,created_at,exp_at) 
                                                              VALUES ('".$_POST['tittle']."','".$_POST['message']."','".$_POST['landing']."','".$_POST['created_at']."','".$_POST['exp_at']."')");
            $enviar = mysqli_query($conexion, "SELECT email FROM usuarios WHERE sub = '1'");

        while ($emails = mysqli_fetch_assoc($enviar)){
            $para      = $emails['email'];
            $titulo    = $_POST['tittle'];
            $mensaje   = $_POST['message']." <a href='http://locahost/portafolio-taller-mecanico/landing-page.php?id='".$_POST['landing'].">Ver producto</a>";

            $cabeceras = 'From: El_Paisano_Taller ' . "\r\n" .
                'Reply-To: cristianteves1@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
            $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-Type: text/html; charset-iso-8859-1' . "\r\n";

            mail($para, $titulo, $mensaje, $cabeceras);
        }




            //header("Location: newsletter.php?msg=8");
}else{
    header("Location: index.php");
}