<?php 
require ("conexion.php");
 if (isset($_POST['enviar'])) {

        $email=$_POST['email'];
        $usuario=$_POST['user'];
        $pass=md5($_POST['pass']);
        $repass=md5($_POST['repass']);               

        if ($pass===$repass &&!empty($usuario) &&!empty($email) &&!empty($pass)) {

                   if (isset($_POST['newsletter'])) {
                   $newsletter = 1;
                   }else{
                   $newsletter = 0;
                   }


                  $codigo = rand(00000,99999);
                  $fecha= time();

                  $insertar=mysqli_query($conexion, "INSERT INTO registros (nick, email, password, fecha, sub, codigo) VALUES ('".$usuario."', '".$email."', '".$pass."', '".$fecha."', '".$newsletter."', '".$codigo."')");
                  echo "<script>alert('Tu registro ha sido exitoso! verifique el email para activar su cuenta')</script>";

                  $email_registro = $_POST['email'];
                  $para      = $email_registro;
                  $titulo    = 'Activar Cuenta ';
                  $mensaje   = "<html xmlns='http://www.w3.org/1999/xhtml'>
                                  <head>
                                   <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                                  </head>
                                     <body>
                                    <table style='width:100%; background: lightblue;'>
                                     <thead>
                                        <tr>
                                            <td><ol><h1>Gracias por registrarte!</h1></ol><ol>Para activar tu cuenta solo haz click en el siguiente enlace!</ol>
                                            <ol>
                                                <a href='http://www.tallerpaisano.vivenciaweb.com/activar.php?codigo=$codigo'>
                                                    <h3>Activar cuenta</h3>
                                                </a>
                                            </ol>
                                            </td>
                                            <td>
                                                <img src='http://www.tallerpaisano.vivenciaweb.com/img/email.png'>
                                            </td>
                                        </tr>   
                                     </thead>
                                     <tfoot>
                                        <tr>
                                            <td>
                                                <img styles='width:100%;' src='http://www.tallerpaisano.vivenciaweb.com/img/logo2.png'>
                                            </td>
                                        </tr>
                                     </tfoot>
                                     </table>
                                   </body>
                                </html>";

                  $cabeceras = 'From: El_Paisano_Taller ' . "\r\n" .
                  'Reply-To: cristianteves1@gmail.com' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();
                  $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
                  $cabeceras .= 'Content-Type: text/html; charset-iso-8859-1' . "\r\n";

                   mail($para, $titulo, $mensaje, $cabeceras);
                   
                   }else{
                 echo "<script>alert('Error en el registro, verifique los campos por favor')</script>";
                 header("location: ../index.php");
                }

        }
 ?>