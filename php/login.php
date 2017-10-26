 <?php
require ("conexion.php");

    if (isset($_POST['acceder'])) {


        $user=$_POST['email'];
        $contraseña=md5($_POST['key']);


        $consulta=mysqli_query($conexion, "SELECT id_usuario FROM usuarios WHERE (email='".$user."' or nick='".$user."') AND password='".$contraseña."'");


        if (mysqli_num_rows($consulta)>0) {
            $datos_user=mysqli_fetch_assoc($consulta);

            if ($user == 'administrador') {
                setcookie("id_admin", $datos_user['id_usuario'], $duracion_cookie, "/");
                header("location: ../administracion/index.php");
            }else{
                if (isset($_POST['recordar_usuario'])) {
                    $duracion_cookie = time() + 60*60*24*30;
                }else{
                    $duracion_cookie = 0;
                }

            setcookie("id_user", $datos_user['id_usuario'],$duracion_cookie,"/");
    
            sleep(2);
            header("location: ../index.php");
            }
        }else{
            echo "<script>alert('Error: contraseña o usuario incorrecto')
            location.href='../index.php'</script>";
        }
    }else{
        echo "error";
    }

?>