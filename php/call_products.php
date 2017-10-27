<?php

require ('conexion.php');

$productos = mysqli_query($conexion, "SELECT * FROM products");

while ($data_product = mysqli_fetch_assoc($productos)){
    echo $nombre = $data_product['name'];
    echo $descripcion = $data_product['description'];
    echo $precio = $data_product['price'];
    echo $imagen = $data_product['image'];
?>


        <div class='col-sm-6 col-md-4' style='text-align: center;'>
            <div class='thumbnail'>
              <div class='producto'><img src='<?php echo $imagen; ?>alt='...'></div>
                  <div class='caption'>
                        <h3><?php echo $nombre;?></h3>
                    <div class='producto_botones' style='padding-top: 50px;'>
                        <span class='btn btn-success'>$<?php echo $precio ?></span>
                        <a href='productos.php' class='btn btn-primary' role='button''>Ver más</a>
                    </div>
                  </div>
            </div>
        </div>

<?php } ?>