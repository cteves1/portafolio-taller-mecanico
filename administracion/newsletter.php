<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administración</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Administración</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                	<button type="button" class="btn btn-info btn-circle">
                		<a href="../index.php"><i class="fa fa-mail-reply"></i></a>
                	</button></i>
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                              
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                        </li>
                        <li>
                            <a href="registros.php"><i class="fa fa-user-md fa-fw"></i> Registros</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-sitemap fa-fw"></i> News Letter</a>
                        </li>
   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel panel-default">
             <div class="panel-heading">
              <h3>Registar New Letter</h3>
             </div>
             <div class="panel-body">
            <form class="form-inline" method="POST" action="">
			  <div class="form-group">

			    <label for="exampleInputName2">Nombre</label>
			    <label><input type="text" name="nombre_nl" class="form-control" id="exampleInputName2" placeholder="Ofertas 10% - 20% - 30%"></label>

			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail2">Tiempo de expiración</label>
			    <select name="dias_exp">
			    	<option value="2">2</option>
			    	<option value="5">5</option>
			    	<option value="7">7</option>
			    </select> Días
			  </div>
			  <button type="submit" name="enviar_newletter" class="btn btn-default">Enviar</button>
			  <?php 

			  	require ("../php/conexion.php");
			  	mysqli_query($conexion, "SELECT FROM newsletter");
			  	if (isset($_POST['enviar_newletter'])) {

                  	$fecha = date("y/m/d");
                  	$nombre = $_POST['nombre_nl'];
			  		$insertar = mysqli_query($conexion, "INSERT INTO newsletter (nombre_nl, fecha) VALUES ('$nombre_nl', '$fecha')");

			  	$enviar = mysqli_query($conexion, "SELECT email FROM usuarios WHERE sub = '1'");
			  	
			  	if ($consulta = mysqli_num_rows($enviar)>0) {
			  		$emails = mysqli_fetch_assoc($consulta);

			  	
                $para      = $emails['email'];
                $titulo    = $nombre;
			  	$mensaje   = "<html xmlns='http://www.w3.org/1999/xhtml'>
					  <head>
					   <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'/>
					   <style type='text/css'>
					       .imagen_fondo img{
					        max-width: 50%;
					       }
					   </style>
					  </head>
					     <body>
					    <table style='width:100%; background: lightblue;'>
					     <thead>
					        <tr>
					            <td style='text-align: center;'>
					                <ol>
					                    <h1>El taller llega con Ofertas increíbbles!</h1>
					                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					                </ol>
					            </td>
					        </tr>
					        <tr style='text-align: center;'>
					            <td class='imagen_fondo'>
					                <img src='www.tallerpaisano.vivenciaweb.com/img/newletter.jpg'>
					            </td>
					        </tr>   
					     </thead>
					     <tfoot>
					        <tr>
					            <td style='text-align: center;'>
					                <h2>Bases y condiciones</h2>
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					                <img src='www.tallerpaisano.vivenciaweb.com/img/logo2.png'><p>Copyright</p>
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
                   echo "<script>alert('New letter enviado')</script>";
			  	}
               }
			   ?>
			</form>
			</div>
			<br>
			</div>
           	<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="padding: 0; margin: 0;">News Letter</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>News Letter</th>
                                            <th>Visitas</th>
                                            <th>Expira</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>imagen</td>
                                            <td>7</td>
                                            <td>05-09-2017</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            
                                        </tr>
                             
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
