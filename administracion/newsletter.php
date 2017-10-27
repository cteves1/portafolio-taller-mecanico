<?php
require ("../php/conexion.php");
$newsletters = mysqli_query($conexion, "SELECT * FROM newsletters");

include 'share/header.php'?>
<div id="wrapper">

        <!-- Navigation -->
        <?php include 'share/menu.php'?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de newlatters</h1>
                </div>
            </div>
           	<div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="padding: 0; margin: 0;">News Letter</h3>
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
                                            <td>".$newsletter["id_newsletter_viewers"]."</td>
                                            <td>".$newsletter["id_ladingpage"]."</td>
                                            <td>".$newsletter["created_at"]."</td>
                                            <td>".$newsletter["exp_at"]."</td>
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
<?php include 'share/footer.php'?>
