
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
                        <li><a href="../php/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="newsletter.php"><i class="fa fa-sitemap fa-fw"></i> News Letter</a>
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
                    <h1 class="page-header">Listado de usuarios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="padding: 0; margin: 0; color: black;">Usuarios</h3>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php require ("../php/conexion.php");
                            $users = mysqli_query($conexion, "SELECT * FROM usuarios");
                            if (mysqli_num_rows($users)>0) { ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre de usuario</th>
                                        <th>Email</th>
                                        <th>Fecha de registro</th>
                                        <th>Ultima sesión</th>
                                        <th class='text-center'>Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                $i=0;
                                        while ($user = mysqli_fetch_assoc($users)) {
                                            $i++;
                                            echo '
                                        <tr class="odd gradeX">
                                        <td>'.$user["id"].'</td>
                                        <td>'.$user["username"].'</td>
                                        <td>'.$user["email"].'</td>
                                        <td>'.$user["created_at"].'</td>
                                        <td>'.$user["last_session"].'</td>
                                        <td class="text-center">
                                        <div class="btn-group">
                                        <button data-toggle="modal" data-target="#editUser'.$i.'" class="btn btn-primary">
                                              <i class="fa fa-edit"></i>
                                            </button>
                                        <a href="user_delete.php?id='.$user['id'].'" data-toggle="confirmation" data-title="Borrar usuario?" data-placement="right" class="btn btn-danger" >
                                              <i class="fa fa-trash-o"></i>
                                        </a>
                                        </div>
                                           
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="editUser'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                 <form action="user_edit.php" method="POST">
                                                 <input type="hidden" name="user_id" value="'.$user['id'].'">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                  <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group"><input type="text" name="username" placeholder="Nombre de usuario" class="form-control" value="'.$user["username"].'"></div>
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <div class="form-group"><input type="text" name="email" placeholder="Correo electrónico" class="form-control" value="'.$user["email"].'"></div>
                                                    </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Guardar cambios</button>
                                                  </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                        </td>
                                        </tr>';
                                        }

                                ?>
                                </tbody>
                            </table>
                            <?php
                            }else{
                            echo "
                            <tr class='odd gradeX'>
                                <td><h3>No hay usuarios para mostrar </h3></td>";
                                }
                                ?>

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
    <script src="js/bootstrap-confirmation.js"></script>

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
