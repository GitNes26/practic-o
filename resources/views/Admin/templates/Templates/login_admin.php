<?php
require_once "Configurations/globals.php";
if (isset($_COOKIE["dpnstash_sesion"])) {
   if ($_COOKIE["dpnstash_sesion"] == "activa") {
      if ($_COOKIE["dpnstash_perfil_id"] == 2)
         die(header("location:$CUSTOMER_PATH"));
      die(header("location:$ADMIN_PATH"));
   }
}
$join_now = '0';
if (isset($_GET["join_now"])) {
  $join_now = $_GET["join_now"];
}
?>


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="Theme Industry">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- title -->
    <title>DPN Stash | Login</title>
    <link href="<?php echo($ICONO) ?>" rel="shortcut icon" type="image/x-icon" />


    <!-- bundle css -->
    <link rel="stylesheet" href="Assets/css/packed.css"/>
    <!-- style -->
    <link rel="stylesheet" href="Assets/css/style.css"/>

    <!-- Tipo de letra -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- JQuery 6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- AdminLTE-3 -->
    <link href="<?php echo($DIST_PATH) ?>/admin-lte-3/css/adminlte.min.css" rel="stylesheet" />

    <!-- FontAwesome 6 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MisEstilos -->
    <link href="<?php echo($DIST_PATH) ?>/Css/misEstilos.css" rel="stylesheet" />
    <link href="<?php echo($DIST_PATH) ?>/Css/responsivo.css" rel="stylesheet" />

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="particles_special_id green-version body-login">
  <input type="hidden" id="url_base" value="<?php echo $URL_BASE ?>">
  <input type="hidden" id="join_now" value="<?php echo $join_now ?>">

<!-- start slider -->
<section class="fadeIn example no-padding no-transition" id="home">
    <article class="content"><h2 class="display-none no-padding no-margin" aria-hidden="true">finza</h2>
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="classic4export" data-source="gallery"
             style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- start revolution slider 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner hold-transition login-page"
                 style="background-image: url(Assets/img/track.jpg); background-size:cover;" data-version="5.4.1">
                <canvas id="particles_bg"
                        style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1; overflow:hidden;"></canvas>
                <div class="opacity-extra-medium bg-black position-absolute z-index-1"></div>

                <div class="container-fluid d-flex justify-content-center overflow-auto py-3" style="z-index:1">
                  <div class="login-box">
                      <div class="login-logo">
                          <!-- <span class="fw-bold h1">RESO</span>
                          <span class="fw-light h1">Sistemas</span> -->
                          <div class="login-logo">
                            <img src="<?php echo($LOGO) ?>" alt='Dairystash Logo' class='img-fluid'/>
                        </div>
                      </div>
                      <!-- /.login-logo -->

                      <!-- Card Login -->
                      <div class="card rounded-3 card-outline card-primary shadow" id="card_login">
                          <div class="card-body login-card-body">
                              <p class="login-box-msg text-sm fst-italic">Enter your credentials to login</p>

                              <form id="formulario_login">
                                <input type="hidden" id="accion" name="accion" value="iniciar_sesion">
                                  <div class="form-floating mb-3">
                                      <input type="email" class="form-control rounded-lg" id='correo' name='correo' placeholder="E-mail" autofocus="autofocus" data-nombre-campo="E-MAIL"/>
                                      <label for="correo">E-mail</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="password" class="form-control" id='contrasenia' name='contrasenia' placeholder="Password" autocomplete="off" data-nombre-campo="PASSWORD"/>
                                      <label for="contrasenia">Password</label>
                                      <i class="fa-duotone fa-eye-slash icono_ojito" data-input="contrasenia"></i>
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <button type="submit" id="btn_iniciar_sesion" class="btn btn-outline-primary btn-block fw-bold text-center">
                                              <i class="fa-solid fa-circle-arrow-right"></i>&nbsp;&nbsp;SIGN-IN
                                          </button>
                                          <br>
                                          <a class="float-start" id="btn_registrar" style="cursor:pointer">SIGN UP!</a>
                                          <a href="/" class="float-end">Return to main page</a>
                                      </div>
                                      <!-- /.col -->
                                  </div>
                              </form>
                          </div>
                          <!-- /.login-card-body -->
                      </div>

                      <!-- Card Regitro -->
                      <div class="card rounded-3 card-outline card-primary shadow" id="card_registro">
                          <div class="card-body login-card-body">
                              <p class="login-box-msg text-sm fst-italic">Please fill in all the spaces.</p>

                              <form id="formulario_registro">
                                  <div class="form-floating mb-3">
                                      <input type="text" class="form-control rounded-lg" id='input_usuario' name='input_usuario' placeholder="Username" autofocus="autofocus" data-nombre-campo="USERNAME"/>
                                      <label for="input_usuario">Username</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="email" class="form-control rounded-lg" id='input_correo' name='input_correo' placeholder="E-mail" autofocus="autofocus" data-nombre-campo="E-MAIL"/>
                                      <label for="input_correo">E-mail</label>
                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="password" class="form-control" id='input_contrasenia' name='input_contrasenia' placeholder="Password" autocomplete="off" data-nombre-campo="PASSWORD"/>
                                      <label for="input_contrasenia">Password</label>
                                      <i class="fa-duotone fa-eye-slash icono_ojito" tittle="show text" data-input="input_contrasenia"></i>

                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="password" class="form-control" id='input_confirmar_contrasenia' name='input_confirmar_contrasenia' placeholder="Confirm Password" autocomplete="off" data-nombre-campo="CONFIRM PASSWORD"/>
                                      <label for="input_confirmar_contrasenia">Confirm Password</label>
                                      <span class="fst-italic" id="respuesta_contrasena"></span>
                                      <i class="fa-duotone fa-eye-slash icono_ojito" tittle="show text" data-input="input_confirmar_contrasenia"></i>

                                  </div>
                                  <div class="form-floating mb-3">
                                      <input type="password" class="form-control rounded-lg excluir_validacion" id='input_clave_consusltor' name='input_clave_consusltor' placeholder="Consultant Key" autofocus="autofocus" data-nombre-campo="CONSULTANT KEY"/>
                                      <label for="input_clave_consusltor">Consultant Key <i>(Opctional)</i></label>
                                      <i class="fa-duotone fa-eye-slash icono_ojito" tittle="show text" data-input="input_clave_consusltor"></i>
                                      
                                  </div>
                                  <div class="row">
                                      <div class="col">
                                          <button type="submit" id="btn_registrarme" class="btn btn-outline-primary btn-block fw-bold text-center">
                                              <i class="fa-solid fa-circle-arrow-up"></i>&nbsp;&nbsp;SIGN UP
                                          </button>
                                          <br>
                                          <a class="float-start" id="btn_logearse" style="cursor:pointer">Already member</a>
                                          <a href="/" class="float-end">Return to main page</a>
                                      </div>
                                      <!-- /.col -->
                                  </div>
                              </form>
                          </div>
                          <!-- /.Registro-card-body -->
                      </div>
                  </div>
                  <!-- /.Registro-box -->

                  <!-- <footer class="footer-login mt-5 text-light">
                      <p><b>DPN Stash</b> | 2022</p>
                  </footer> -->
                </div>

            </div>
        </div>
        <!-- end revolution slider -->
    </article>
    <!-- end slider -->
</section>
<!-- end slider -->

  <!-- owl carousel -->
  <script src="Assets/js/owl.carousel.min.js"></script>
  <!-- counter -->
  <script src="Assets/js/jquery.count-to.js"></script>
  <!-- magnific popup -->
  <script src="Assets/js/jquery.magnific-popup.min.js"></script>
  <!-- cube portfolio -->
  <script src="Assets/js/jquery.cubeportfolio.min.js"></script>
  <!-- fancybox -->
  <script src="Assets/js/lity.min.js"></script>
  <!-- particles -->
  <script src="Assets/js/particles.js"></script>
  <!-- wow -->
  <script src="Assets/js/wow.min.js"></script>
  <!-- revolution -->
  <script src="Assets/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="Assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <!-- revolution extension -->
  <script src="Assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="Assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!-- setting -->
  <script src="Assets/js/main.js"></script>


  <!-- SCRIPTS -->
  <!-- JQuery 6 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- AdminLTE-3 -->
  <script src="<?php echo($DIST_PATH) ?>/admin-lte-3/js/adminlte.min.js"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>

  <!-- Block-UI -->
  <script src="<?php echo($VENDORS_PATH) ?>/BlockUI/jquery.blockui.min.js"></script>

  <script src="<?php echo($SCRIPTS_PATH) ?>/login.js"></script>
</body>
</html>
