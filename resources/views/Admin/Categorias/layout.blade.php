<!DOCTYPE html>
<html>
<head>
    <title>Admin Categorias</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    @extends('/Admin/templates/links')
    @extends('/Admin/templates/navbar')
    @extends('/Admin/templates/sidebar')

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <input type="hidden" id="url_base">
    <input type="hidden" id="reporte_id_default">
  
     <!-- Site wrapper -->
     <div class="wrapper">

<!-- Content Wrapper. Contenido de la pagina -->
<div class="content-wrapper text-sm">
    <!-- Content Header (Encabezado en el contenido de la pagina) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1>
                   <i class="fa-solid fa-user-tie"></i>&nbsp;
                   <!-- <em class="fw-ligth text-muted lead text-sm">| </em> -->
                </h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href=""><i class="fa-solid fa-house"></i>&nbsp; Admin</a></li>
                   <li class="breadcrumb-item">Administration</li>
                   <li class="breadcrumb-item active"></li>
                </ol>
             </div>
          </div>
       </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="card card-outline card-dark shadow">
    {{-- @include('Modulos.nav') --}}

    <div class="container">
      @yield('content')
       <!-- /.card -->
      </div>

    </section>
    <!-- /.content -->
 
    <!-- Modal Usuario -->
 
 </div>
 <!-- /.content-wrapper -->
 
 
 </div>
 <!-- ./wrapper (este se abre en el Template-header) -->
 


</div>

<!-- JavaScript Bundle with Popper -->
@extends('/Admin/templates/scripts')

{{-- <script>
   const ConfiguracionDataTable = {
     responsive: true,
     language: {
       // url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json"
     },
     columnDefs: [
       {
         className: "dt-center",
         targets: "_all",
       },
     ],
     dom: '<"row"<"col-md-6 "l> <"col-md-6"f> > rt <"row"<"col-md-6 "i> <"col-md-6"p> >',
     lengthMenu: [
       [5, 10, 50, 100, -1],
       [5, 10, 50, 100, "Todos"],
     ],
     pageLength: 10,
     deferRender: true,
     aaSorting: [], //deshabilitar ordenado automatico
   };
   tabla = $('tabla').DataTable(ConfiguracionDataTable);
   </script> --}}
</body>
</html>