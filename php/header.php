<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function mostrarIngreso (){
  $('.ingreso').fadeIn('fast');
  $('.registro').fadeOut('fast');
}
function mostrarRegistro (){
  $('.registro').fadeIn('fast');
  $('.ingreso').fadeOut('fast');
}
function cerrarFullshade (){
  $('.fullshade').fadeOut('fast');
}
function menuProfile (){
  $('.menu_profile').fadeIn('medium');
}
function menuProfile2 (){
  $('.menu_profile').fadeOut('medium');
}
</script>

<header>
  <div class="encabezado">
    <div class="logo"><a href="index.php"><img src="imagenes/logo.png" alt=""></a></div>
      <nav class="menu">
        <ul>
          <li><a href="">Nosotros</a></li>
          <li><a href="">Servicios</a></li>
          <li><a href="">Ubicacion</a></li>
          <li><a href="">Contacto</a></li>
          <?php 
          require("conexion.php");
          if (isset($_COOKIE['id_user'])) {
                  echo "<li id='profile'><a onclick='menuProfile()'><img src='imagenes/profile_icon.png'></a>";
                   echo "<ul>";
                  if ($user['admin']>0) { 
                  echo "<li class='menu_profile'><a onclick='menuProfile2()'>Ocultar</a></li>";
                  echo "<li class='menu_profile'><a href='administracion/panel.php'>Panel de control </a></li>";
                  echo "<li class='menu_profile'><a onclick=''>Opciones</a></li>";
                  echo "<li class='menu_profile'><a href='logout.php'>Cerrar sesion </a></li>";
                }else{
                  echo "<li class='menu_profile'><a onclick='menuProfile2()'>Ocultar</a></li>";
                  echo "<li class='menu_profile'><a onclick=''>Opciones</a></li>";
                  echo "<li class='menu_profile'><a href='logout.php'>Cerrar sesion </a></li>";
                } 
                echo "</ul></li>";
                echo "</div>";
          }else{
              ?><li><a onclick="mostrarIngreso()" style="cursor: pointer;">Ingresar</a></li>
              <?php } ?>
        </ul>
      </nav>
  </div>
</header>
