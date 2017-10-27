<?php
require ("../php/conexion.php");
$newsletters = mysqli_query($conexion, "SELECT newsletters.tittle, newsletters.message, newsletters.id_ladingpage, newsletters.created_at, newsletters.exp_at, COUNT(newsletters_viewers.id) AS viewers FROM newsletters LEFT JOIN newsletters_viewers ON newsletters_viewers.id_newletter = newsletters.id GROUP BY newsletters.id");
include 'share/header.php'?>
<div id="wrapper">

        <!-- Navigation -->
        <?php include 'share/menu.php'?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de newlatters</h1>
                </div>
                <?php if(isset($alert)){?>
                    <div class="col-md-4">
                        <div class="alert alert-<?php echo $alert_type?>"><?php echo $alert_msg;?></div>
                    </div>
                <?php }?>
            </div>
            <div class="row">
                <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="pull-left" style="padding: 0; margin: 0; color: black;">Newsletter</h3>
                                <button data-toggle="modal" data-target="#addNewletter" class="btn btn-primary pull-right">Agregar newsletter</button>
                                <div class="modal fade" id="addNewletter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="newsletter_add.php" method="POST">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Agregar newsletter</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group"><input type="text" name="tittle" placeholder="Titulo del newletter" class="form-control"></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="selectpicker form-control" name="landing" title="Selecciona un landing...">
                                                                <?php $ladings = mysqli_query($conexion, "SELECT ladingpages.id AS id_ladingpage, products.name AS product_name FROM ladingpages LEFT JOIN products ON products.id = ladingpages.id_product GROUP BY ladingpages.id");
                                                                while ($landing = mysqli_fetch_assoc($ladings)) { echo '<option value="'.$landing['id_ladingpages'].'">'.$landing['product_name'].'</option>'; }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"><textarea name="message" placeholder="Mensaje del newletter" class="form-control" style="max-width: 100%;min-width: 100%;min-height: 150px; "></textarea></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="created_at">Fecha de creacion</label>
                                                            <div class="form-group"><input type="datetime-local" id="created_at" name="created_at" class="form-control" value="<?php echo date('Y-m-d\TH:i');?>"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="exp_at">Fecha de expiración</label>
                                                            <div class="form-group"><input type="datetime-local" id="exp_at" name="exp_at" class="form-control" value="<?php echo date('Y-m-d\TH:i');?>"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success">Agregar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php if (mysqli_num_rows($newsletters)>0) {?>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Titulo</th>
                                                <th>Mensaje</th>
                                                <th>Visitas</th>
                                                <th>Landing page</th>
                                                <th>Creado el dia</th>
                                                <th>Expira</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        while ($newsletter = mysqli_fetch_assoc($newsletters)) {
                                            echo "<tr>
                                                <td>".$newsletter["tittle"]."</td>
                                                <td>".$newsletter["message"]."</td>
                                                <td>".$newsletter["viewers"]."</td>
                                                <td>".$newsletter["id_ladingpage"]."</td>
                                                <td>".$newsletter["created_at"]."</td>
                                                <td>".$newsletter["exp_at"]."</td>
                                                </tr>";
                                        } ?>
                                        </tbody>
                                    </table>
                                    <?php }else{ echo '<div class="alert alert-info">No hay ladingpage en la web.</div>'; } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 style="padding: 0; margin: 0;">Lading page</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php if (mysqli_num_rows($ladings)>0) {?>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre del producto</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $ladings = mysqli_query($conexion, "SELECT ladingpages.id AS id_ladingpage, products.name AS product_name FROM ladingpages LEFT JOIN products ON products.id = ladingpages.id_product GROUP BY ladingpages.id");
                                            while ($lading = mysqli_fetch_assoc($ladings)) {

                                                echo "<tr>
                                                <td>".$lading["id_ladingpage"]."</td>
                                                <td>".$lading["product_name"]."</td>
                                                </tr>";
                                            } ?>
                                            </tbody>
                                        </table>
                                    <?php }else{ echo '<div class="alert alert-info">No hay newsletter en la web.</div>'; } ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>
<?php include 'share/footer.php'?>
