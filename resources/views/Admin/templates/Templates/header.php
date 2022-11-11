<?php
if (file_exists("../Configurations/globals.php")) {
   include("../Configurations/globals.php");
} else {
   if (file_exists("./Configurations/globals.php")) {
      include("./Configurations/globals.php");
   } else if (file_exists("../Configurations/globals.php")) {
      include("../Configurations/globals.php");
   } else if (file_exists("../../Configurations/globals.php")) {
      include("../../Configurations/globals.php");
   }
}


// VERIFICAR SESION ACTIVA
if (isset($_COOKIE["dpnstash_sesion"])) {
   if ($_COOKIE["dpnstash_sesion"] != "activa") {
       header("location:$URL_BASE");
       die();
   }
} else {
   header("location:$URL_BASE");
   die();
}
// VERIFICAR QUE NO SEA UN USUARIO TIPO CLIENTE
if ($_COOKIE["dpnstash_perfil_id"] == 2) {
  header("location:$URL_BASE");
  die();
}


// VALIDAR QUE TENGA ACCESOS A ESTA PAGINA
$URL_SERVER =  $_SERVER['REQUEST_URI'];
$url_ptr = explode("/", $URL_SERVER);
$path = end($url_ptr);
include ('../Backend/Menu/Menu.php');
$menu = new Menu();
$respuesta = $menu->obtenerIdPorPath($path);
if (!$respuesta['Resultado']) {
   header("location:$URL_BASE");
   die();
}
$id = $respuesta['Datos'];

$acceso = true;
if ($_COOKIE["dpnstash_permisos_lectura"] != "todos") {
   $accesos = explode(",", $_COOKIE["dpnstash_permisos_lectura"]);
   if (!in_array($id,$accesos)) $acceso = false;
}
if (!$acceso && $URL_SERVER != "$ADMIN_PATH/") {
   header("location:$URL_BASE");
   die();
}


// MOSTRAR EL REPORTE DEFAULT EN CASO DE QUE SE VAYA A LA VENTANA DE CUSTOMERS
if (isset($_COOKIE["dpnstash_reporte_id_default"])) {
   if ($_COOKIE["dpnstash_reporte_id_default"] != "") {
     $reporte_id_default = $_COOKIE["dpnstash_reporte_id_default"];
   }
}


// CONOCER PERMISOS
$permiso_altas = $_COOKIE["dpnstash_permisos_altas"] == null ? false : true;
if ($_COOKIE["dpnstash_permisos_altas"] != "todos") {
   $accesos = explode(",", $_COOKIE["dpnstash_permisos_altas"]);
   if (!in_array($id,$accesos)) $permiso_altas = false;
}
$permiso_bajas = $_COOKIE["dpnstash_permisos_bajas"] == null ? false : true;
if ($_COOKIE["dpnstash_permisos_bajas"] != "todos") {
   $accesos = explode(",", $_COOKIE["dpnstash_permisos_bajas"]);
   if (!in_array($id,$accesos)) $permiso_bajas = false;
}
$permiso_cambios = $_COOKIE["dpnstash_permisos_cambios"] == null ? false : true;
if ($_COOKIE["dpnstash_permisos_cambios"] != "todos") {
   $accesos = explode(",", $_COOKIE["dpnstash_permisos_cambios"]);
   if (!in_array($id,$accesos)) $permiso_cambios = false;
}
$permiso_especiales = $_COOKIE["dpnstash_permisos_especiales"] == null ? false : true;
if ($_COOKIE["dpnstash_permisos_especiales"] != "todos") {
   $accesos = explode(",", $_COOKIE["dpnstash_permisos_especiales"]);
   if (!in_array($id,$accesos)) $permiso_especiales = false;
}

$tiempo_coockies = '+30 minutes';
setcookie("dpnstash_permiso_lectura",$acceso,strtotime($tiempo_coockies), "/");
setcookie("dpnstash_permiso_altas",$permiso_altas,strtotime($tiempo_coockies), "/");
setcookie("dpnstash_permiso_bajas",$permiso_bajas,strtotime($tiempo_coockies), "/");
setcookie("dpnstash_permiso_cambios",$permiso_cambios,strtotime($tiempo_coockies), "/");
setcookie("dpnstash_permiso_especiales",$permiso_especiales,strtotime($tiempo_coockies), "/");


$bg_powerbi = "navbar-white navbar-light";

?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>DPN Stash | Admin</title>
   <link href="<?php echo($ICONO) ?>" rel="shortcut icon" type="image/x-icon" />

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- JQuery 6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--AdminLTE-3-->
    <link href="<?php echo($DIST_PATH) ?>/admin-lte-3/css/adminlte.min.css" rel="stylesheet" />
    <link href="<?php echo($DIST_PATH) ?>/admin-lte-3/css/icheck-bootstrap.min.css" rel="stylesheet" />

    <!-- Dataables => DataTables | DataTables | AutoFill - Buttons - Responsive - Scroller -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/af-2.3.7/b-2.0.1/b-html5-2.0.1/b-print-2.0.1/r-2.2.9/sc-2.0.5/datatables.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.0.1/css/fixedColumns.dataTables.min.css"> -->
    <!-- <script src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"></script> -->

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- FontAwesome 6 -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.0/css/all.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.9/sweetalert2.min.css" integrity="sha512-cyIcYOviYhF0bHIhzXWJQ/7xnaBuIIOecYoPZBgJHQKFPo+TOBA+BY1EnTpmM8yKDU4ZdI3UGccNGCEUdfbBqw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!---------------------------- OPCIONES EXTRAS ---------------------------->
    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment JS en español -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/locale/es.js"></script> -->

    <!-- IMask JS -->
    <!--<script src="https://unpkg.com/imask"></script>-->
    <!---------------------------- OPCIONES EXTRAS ---------------------------->

    <!-- MisEstilos -->
    <link href="<?php echo($DIST_PATH) ?>/Css/misEstilos.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo($DIST_PATH) ?>/Css/estilos_test.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
  <input type="hidden" id="url_base" value="<?php echo $URL_BASE ?>">
  <input type="hidden" id="reporte_id_default" value="<?php echo $reporte_id_default ?>">

   <!-- Site wrapper -->
   <div class="wrapper">