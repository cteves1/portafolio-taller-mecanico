<?php
require ("../php/conexion.php");
$users = mysqli_query($conexion, "SELECT * FROM usuarios");
include 'share/header.php'; ?>
<div id="wrapper">
        <?php  include 'share/menu.php'; ?>
         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de usuarios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 style="padding: 0; margin: 0; color: black;">Usuarios</h3>
                        </div>
                        <div class="panel-body">
                            <?php if (mysqli_num_rows($users)>0) { ?>
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
                                <?php $i=0; while ($user = mysqli_fetch_assoc($users)) {$i++;
                                    echo '<tr class="odd gradeX"><td>'.$user["id"].'</td><td>'.$user["username"].'</td><td>'.$user["email"].'</td><td>'.$user["created_at"].'</td><td>'.$user["last_session"].'</td>
                                        <td class="text-center">
                                        <div class="btn-group">
                                            <button data-toggle="modal" data-target="#editUser'.$i.'" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                            <a href="user_delete.php?id='.$user['id'].'" data-toggle="confirmation" data-title="Borrar usuario?" data-placement="right" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>
                                        </div>
                                           
                                            
                                            <!-- Modal Edit user-->
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
                                        </tr>';}?>
                                </tbody></table>
                            <?php }else{ echo '<div class="alert alert-info">No hay usuarios en la web.</div>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
         </div>
</div>
<?php include 'share/footer.php';?>