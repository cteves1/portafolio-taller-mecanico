<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/custom.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        body{
            background-color: white;
        }
        *{
            color: black;}
    </style>
    <title>Productos</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>









<body style="background: white;">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse">
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
            <ul class="nav navbar-nav">
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



<div class="container" style="padding-top: 5%; min-height: 900px;">
    <div class="row" style="margin: 0 auto; margin-top: 10%; min-height: 500px;">
        <div class="col-md-12" style="text-align: center;">
            <h3>Titulo del producto</h3>
        </div>
        <div class="col-md-4 landing">
            <img src="img/producto3sale.jpg" alt="">
        </div>
        <div class="col-md-6">
            <p style="font-size: 25px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem d
                ebitis eaque et harum incidunt modi nam necessitatibus
                numquam omnis porro quia quibusdam quidem ratione saepe sequ
                i, sunt suscipit velit.
            </p>
        </div>
        <div class="col-md-12" style="padding-top: 10%; display: flex; justify-content: space-between; width: 80%; margin: 0 auto;">
            <span class="label label-success" style="font-size: 30px;">$3000</span>
            <button class="btn btn-primary" style="font-size: 20px;">Agregar <i class="fa fa-shopping-cart" style="font-size: 30px; color: white;"></i></button>
        </div>
    </div>
</div>


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
<!--<script src="js/grayscale.js"></script>-->

</body>

</html>