<?php session_start(); 
if (isset($_COOKIE['id_admin'])) {
    header("administracion/index.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/custom.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>El taller</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="background: white;">

<!-- User Modal -->


 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myForgetModal" aria-hidden="true" id="usermodal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" style="color: black;">Panel</h4>
            </div>
            <div class="modal-body">
                <p style="color: black;">Cambiar contraseña</p>
                <p style="color: black;">Carrito de compras</p>
                <a href="php/logout.php" class="btn btn-danger">Cerrar sesión</a>
                <!--<input type="email" name="recovery-email" placeholder="example@gmail.com" id="recovery-email" class="form-control" autocomplete="off">-->
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


        <!-- Finish user modal -->

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="glyphicon glyphicon-wrench"></i> <span class="light">Paisano - </span>
                    El taller </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" style="font-size: 18px;">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <?php if (isset($_COOKIE['id_user']) || isset($_COOKIE['id_admin'])){
                            echo "<li>
                                  <a href='javascript:;' class='forget' data-toggle='modal' data-target='#usermodal'>Usuario</a>
                                  </li>";
                          }else{
                            echo "<li>
                                  <a class='page-scroll' href='session.php'>Iniciar Sesión</a>
                                  </li>";
                          } ?>

                    
                    <li>
                        <a class="page-scroll" href="#about">Quienes somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#quienessomos">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#productos">Productos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
        
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">El Paisano motorsport</h1>
                        
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/awlp1.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                  <img src="img/awlp2.jpg" alt="Chicago">
                </div>

                <div class="item">
                  <img src="img/awlp3.jpg" alt="New York">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </section>

    <!-- Quienes somos Section -->
    <section id="quienessomos" class="col-md-12" style="color: black;">
        <div class="row"><div class="container text-center" style="padding-top: 3%;"><h1>¿Por qué elegir el paisano?</h1>
        <p>Somos profesionales en nuestro trabajo y brindamos la mayor calidad a todos nuestros clientes, extendiendonos en toda la zona y siendo líderes en nuestra ubicación</p></div>
        </div>
            <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 3%;">
            <div class="col-md-4">
                <div class="imagen"><img src="img/arreglos.png" alt="" class="thumbnail imgs" style="max-width: 100%;"></div>
            </div>
            <div class="col-md-6" style="padding-top: 50px; text-align: center;">
                <h1>Arreglos</h1>
                <p>Utilizamos nuestras herramientas para arreglar todo tipo de falla mecánico que tenga su auto, trabajamos con todas las marcas de automóviles y garantizamos un arreglo de calidad y bien detallado a la hora de terminar nuestro trabajo</p>
            </div>
        </div>
        <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 3%;">
        <div class="col-md-6" style="padding-top: 50px; text-align: center;">
                <h1>Mantenimiento</h1>
                <p>A su vez, controlamos su vehículo diariamente para que éste no disponga de fallas, de esta manera estará bien monitoreado y lo iremos a buscar en caso de que tenga que remolcarse. </p>
            </div>
            <div class="col-md-4">
                <div class="imagen"><img src="img/mantenimientos.png" alt="" class="thumbnail" style="max-width: 100%;"></div>
            </div>
        </div>
        <div class="row" style="display: flex; align-items: center; justify-content: center; padding: 3%; padding-bottom: 8%;">
            <div class="col-md-4">
                <div class="imagen"><img src="img/seguridad.png" alt="" class="thumbnail" style="max-width: 100%;"></div>
            </div>
            <div class="col-md-6" style="padding-top: 50px; text-align: center;">
                <h1>Seguridad</h1>
                <p>El paisano cuida los vehículos de todos sus clientes y les brinda una calidad de servicio excelente, garantizandoles seguridad a sus dueños de que su auto tiene la mejor atención posible. El paisano abre sus puertas del taller para todo aquel que quiera que su auto, esté bien asegurado.</p>
            </div>
        </div>
    </section>





    <!--Productos section -->
    <section id="productos" class="col-md-12" style="color: black; min-height: 600px; padding: 10%;">
        <div class="row" style="margin: 0 auto; text-align: center;">
        <h3>¡El taller también dispone de productos!</h3>
          <div class="col-sm-6 col-md-4" style="text-align: center;">
            <div class="thumbnail">
              <div class="producto"><img src="img/producto1.png" alt="..."></div>
              <div class="caption">
                <h3>Neumáticos</h3>
                  <div class="producto_botones" style="padding-top: 50px;">
                    <span class="btn btn-success">$3000</span>
                    <a href="#" class="btn btn-primary" role="button">Ver más</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4" style="text-align: center;">
            <div class="thumbnail">
              <div class="producto"><img src="img/producto2.png" alt="..."></div>
              <div class="caption">
                <h3>Amortiguadores</h3>
                <div class="producto_botones" style="padding-top: 50px;">
                    <span class="btn btn-success">$3000</span>
                    <a href="#" class="btn btn-primary" role="button">Ver más</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4" style="text-align: center;">
            <div class="thumbnail">
              <div class="producto"><img src="img/producto3.png" alt="..."></div>
              <div class="caption">
                <h3>Frenos</h3>
                <div class="producto_botones" style="padding-top: 50px;">
                    <span class="btn btn-success">$3000</span>
                    <a href="#" class="btn btn-primary" role="button">Ver más</a>
                  </div>
              </div>
            </div>
          </div>
          <h2 class="btn btn-primary" style="font-size: 20px; margin-top: 5%;">Todos los productos</h2>
        </div>
    </section>






    <!-- Footer Section -->
    <section id="contact" class="col-md-12" style="color: black; padding-top: 10%;">
        <div class="row">
        <div class="col-md-6">
            <h2 style="text-align: center;">Estamos aquí!</h2>
                 <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15364.073497078312!2d-58.34351123909709!3d-34.686510852807984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3331c266c9581%3A0x5c7aa0e5eb02625f!2sNicaragua+37%2C+B1872CSA+Sarand%C3%AD%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1502929432491" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
            <div class="col-md-6">
                <div class="col-lg-8 col-lg-offset-2" style="text-align: center;">
                    <h2>Contacto</h2>
                    <p>Estaremos disponibles para cualquier duda o pregunta que usted disponga, podemos ofrecerle la mejor calidad de nuestro servicio, no dude en escribirnos!</p>
                
                      <form class="form-horizontal">
                        <div class="form-group">
                          <label for="exampleInputName2">Nombre</label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="Juansito Perez">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail2">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Juansito.Perez@ejemplo.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputText">Tu mensaje</label>
                         <textarea  class="form-control" placeholder="Descripción"></textarea> 
                        </div>
                        <button type="submit" class="btn btn-success">Enviar</button>
                      </form>
                    <br>
                </div>
            </div>
        <div class="col-md-12">
            <div class="logo"><img src="img/logo.png" alt="">
            <p>¡Gracias por visitar la pagina del taller!</p>
            </div>
        </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <div class="col-md-12" style="background: black; text-align: center;">
            <div class="row" style="color: white;">
                <p>Telefono: <h1>9999-9999</p></h1>
                <p style="text-align: bottom;">Copyright &copy; El Paisano - 2017</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>