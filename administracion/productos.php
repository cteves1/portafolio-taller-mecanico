<?php
require ("../php/conexion.php");
$registros = mysqli_query($conexion, "SELECT * FROM productos");
include 'share/header.php';?>
<div id="wrapper">

    <!-- Navigation -->
    <?php include 'share/menu.php';?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Listado de Productos</h1>
            </div>
            <?php if(isset($alert)){?>
                <div class="col-md-4">
                    <div class="alert alert-<?php echo $alert_type?>"><?php echo $alert_msg;?></div>
                </div>
            <?php }?>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="padding: 0; margin: 0; color: black;">Productos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <?php if (mysqli_num_rows($registros)>0) {?>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($registro = mysqli_fetch_assoc($registros)) {
                                        echo "<tr>
                                            <td>".$registro["titulo"]."</td>
                                            <td>".$registro["descripcion"]."</td>
                                            <td>".$registro["precio"]."</td>
                                            <td><img src='".$registro["imagen"]."'></td>
                                            </tr>";
                                    } ?>
                                    </tbody>
                                </table>
                            <?php }else{ echo '<div class="alert alert-info">No hay registros en la web.</div>'; } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'share/header.php';?>

