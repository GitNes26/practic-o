<?php
include "../Templates/header.php";
include "../Templates/nav_bar.php";
include "../Templates/side_bar.php";

$pagina_acutal = "Users";
?>
<!-- Content Wrapper. Contenido de la pagina -->
<div class="content-wrapper text-sm">
   <!-- Content Header (Encabezado en el contenido de la pagina) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>
                  <i class="fa-solid fa-user-tie"></i>&nbsp; <?php echo $pagina_acutal ?>
                  <!-- <em class="fw-ligth text-muted lead text-sm">| </em> -->
               </h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?php echo $ADMIN_PATH ?>"><i class="fa-solid fa-house"></i>&nbsp; Admin</a></li>
                  <li class="breadcrumb-item">Administration</li>
                  <li class="breadcrumb-item active"><?php echo $pagina_acutal ?></li>
               </ol>
            </div>
         </div>
      </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">

      <!-- card -->
      <div class="card card-outline card-dark shadow">
         <?php if ($permiso_altas): ?>
         <div class="container-fluid mt-2">
            <button id="btn_abrir_modal" class="float-end btn btn-success fw-bold" data-bs-toggle="modal" data-bs-target="#modal"><i class="fa-solid fa-circle-plus"></i>&nbsp; ADD USER</button>
         </div>
         <?php endif ?>
         <div class="card-body">
            <!-- tabla -->
            <div class="table-responsive">
              <table id="tabla_usuarios" class="table table-hover text-center" style="width:100%">
               <thead class="thead-dark">
                  <tr>
                     <th>Username</th>
                     <th>E-mail</th>
                     <th>Profile</th>
                     <th>Since Member</th>
                     <th>Edit / Delete</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
               <tfoot>
                  <tr class="thead-dark">
                     <th>Username</th>
                     <th>E-mail</th>
                     <th>Profile</th>
                     <th>Since Member</th>
                     <th>Edit / Delete</th>
                  </tr>
               </tfoot>
            </table>
            </div>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->

   </section>
   <!-- /.content -->

   <!-- Modal Usuario -->
   <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title fw-bold" id="modalLabel"><i class="fa-solid fa-user-plus"></i>&nbsp; REGISTRAR USUARIO</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="formulario" enctype="multipart/form-data">
                  <input type="hidden" id="accion" name="accion" value="" class="excluir_validacion">
                  <input type="hidden" id="id" name="id" value='' class="excluir_validacion">
                  <div class="mb-3">
                     <label for="input_usuario" class="form-label">Username: <span class="span_campo_obligatorio"></span></label>
                     <input type="text" class="form-control" id="input_usuario" name="input_usuario" data-nombre-campo="USERNAME">
                  </div>
                   <div class="mb-3">
                     <label for="input_correo" class="form-label">E-mail: <span class="span_campo_obligatorio"></span></label>
                     <input type="email" class="form-control" id="input_correo" name="input_correo" data-nombre-campo="EMAIL">
                  </div>
                  <div class="mb-3 row" id="div_contrasenia">
                    <div class="col">
                       <label for="input_contrasenia" class="form-label">Password: <span class="span_campo_obligatorio"></span></label>
                       <div class="input-icon">
                          <input type="password" class="form-control" id="input_contrasenia" name="input_contrasenia" data-nombre-campo="PASSWORD">
                          <i class="fa-duotone fa-eye-slash icono_ojito" data-input="input_contrasenia"></i>
                        </div>
                     </div>
                     <div class="col">
                       <label for="input_confirmar_contrasenia" class="form-label">Confirm Password: <span class="span_campo_obligatorio"></span></label>
                       <div class="input-icon">
                          <input type="password" class="form-control" id="input_confirmar_contrasenia" name="input_confirmar_contrasenia" data-nombre-campo="CONFIRM PASSWORD">
                          <i class="fa-duotone fa-eye-slash icono_ojito" data-input="input_confirmar_contrasenia"></i>
                        </div>
                       <span class="fst-italic" id="respuesta_contrasena"></span>
                     </div>
                  </div>
                  <div class="mb-3" id="div_nueva_contrasenia">
                     <label for="input_nueva_contrasenia" class="form-label">New Password:</label>
                     <div class="input-icon">
                        <input type="password" class="form-control" id="input_nueva_contrasenia" name="input_nueva_contrasenia">
                        <i class="fa-duotone fa-eye-slash icono_ojito" data-input="input_nueva_contrasenia"></i>
                     </div>
                     <span class="custom-control custom-switch">
                       <input type="checkbox" class="custom-control-input" id="switch_nueva_contrasena" data-nombre-campo="NEW PASSWORD">
                       <label class="custom-control-label text-sm" for="switch_nueva_contrasena">Enable password change</label>
                     </span>
                  </div>
                  <div class="mb-3">
                     <label for="input_id_perfil" class="form-label">Profile: <span class="span_campo_obligatorio"></span></label>
                     <select class="select2 form-control" style="width:100%" aria-label="Default select example" id="input_id_perfil" name="input_id_perfil" data-nombre-campo="PROFILE">
                        <option selected value="-1">Select...</option>
                     </select>
                  </div>
                </div>
                <div class="modal-footer">
                   <button type="submit" id="btn_enviar_formulario" class="btn btn-success fw-bold">ADD</button>
                   <button type="reset" id="btn_reset_formulario" class="btn btn-secondary">CLEAR</button>
                   </form>
            </div>
         </div>
      </div>
   </div>

</div>
<!-- /.content-wrapper -->


</div>
<!-- ./wrapper (este se abre en el Template-header) -->

<?php
include "../Templates/footer.php";
?>
<script src="<?php echo($SCRIPTS_PATH) ?>/users.js"></script>
