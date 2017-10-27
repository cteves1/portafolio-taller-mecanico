<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
		#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
	margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
	text-align: center;
	display: block;
}
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
	background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}
@media(max-width: 920px){
    #login-form{
        max-width: 30%;
        margin: 0 auto;
    }
}
	</style>
    <title>El taller</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php">Inicio</a>
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
                    <div class="col-md-8 col-md-offset-2" style="background: #313131; border-radius: 5px; padding: 30px;">
                        <div class="form-wrap col-md-6 col-md-offset-3">
               			<h1 style="color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Ingresar</h1>
                    <form role="form" action="php/login.php" method="POST" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email o Usuario</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                        	<span class="label" style="font-size: 15px; color: gray;">Mostrar Contreseña:</span>
                            <span class="character-checkbox" onclick="showPassword()"><input type="checkbox" style="margin-left: 10px;"></span><br>
                            <span class="label" style="font-size: 15px; color: gray;">Mantener sesión: </span><input type="checkbox" name="recordar_usuario" style="margin-left: 10px;">
                        </div>
                        <input type="submit" name="acceder" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Se olvidó contraseña?</a><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">Registrarse</button>
                    <hr>

                    
    <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModal" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" style="color: black;">Recuperar Contraseña</h4>
			</div>
			<div class="modal-body">
				<p style="color: black;">Escribe tu email</p>
				<input type="email" name="recovery-email" placeholder="example@gmail.com" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div>
		</div>
		</div>
		 <!-- /.modal-content -->
	
		<!--Registro -->
		<div class="modal fade exampleModal" id="exampleModal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-size: 30px;">Registro</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <div class="form-wrap col-md-4 col-md-offset-4" style="text-align: center;">
			    <h2>Sign Up</h2>
			    <form style="color: black;" role="form" action="php/registro.php" method="POST" id="login-form" autocomplete="off">
			    <label>Usuario</label>
			    <input type="text" name="user" class="span3" placeholder="juansito1234">
			    <label>Email</label>
			    <input type="email" name="email" class="span3" placeholder="example@hotmail.com" required="obligatorio">
			    <label>Password</label>
			    <input type="password" name="pass" class="span3" minlength="4" placeholder="min: 4 caracteres">
			    <label>Re-password</label>
			    <input type="password" name="repass" class="span3" minlength="4">
			    <label><input type="checkbox" name="newsletter">Recibir ofertas</label>
			    <!--<input type="submit" name="enviar" value="Enviar" class="btn btn-primary pull-right">-->
                <button type="submit" name="enviar" class="btn btn-primary pull-right">Enviar</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
			    <div class="clearfix"></div>
    			</form>
				</div>
		      </div>
		      <div class="modal-footer">
		      </div>
		    </div>
		  </div>
        </div>
		 <!-- /.modal-content -->
	</div> 
</div> <!-- /.modal -->

        	    </div>
                </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; El Paisano - 2017</p>
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
    <!--<script src="js/grayscale.min.js"></script>-->
	<script>
		function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}
	</script>
</body>

</html>
