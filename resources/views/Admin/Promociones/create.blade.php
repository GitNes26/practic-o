@extends('Admin.Promociones.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Registrar nueva Promocion</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/admin/promociones">Regresar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Existen algunos problemas al ingresar esos parametros.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form>

{{-- <form action="{{ route('Promociones.store') }}" method="POST"> --}}
    @csrf
  
    <div class="row justify-content-center">
        <div class=" container col-xs-9 col-sm-9 col-md-9">
            <div class="form-group">
                <strong>Nombre de la Promocion:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
            </div>
            <div class="form-group">
                <strong>Descripcion de la Promocion:</strong>
                <input type="text" name="descricpion" class="form-control" placeholder="Descripcion">
            </div>

            <div class="form-group">
                <strong>Porcentage de descuento(Porcentage "%"):</strong>
                <input type="text" name="Porcentage" class="form-control" placeholder="Recompenza" value="0">
            </div>
            <div class="form-group">
                <strong>tiempo del descuento(en dias):</strong>
                <input type="text" name="tiempodescuento" class="form-control" placeholder="tiempodescuento" value="0">
            </div>
            
            <div class="col-md-8 justify-content-center">
                <div class="card">
                    <strong>Caracteristicas de Prioridad</strong>

                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1">Prioritario en busquedas</label>
                
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">Prioritario en mejores empresas</label>
                    
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck3">Prioritario en nuevas empresas</label>
                    
                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck4">Prioritario en Empresas con mas servicios</label>
                </div>
                    
                <div class="card">
                    <strong>Caracteristicas para destacar</strong>    
                    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck5">Nombre en dorado</label>
                
                    <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck6">Descripcion en dorado</label>

                    <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck7">Card de presentacion mas grande</label>             
                </div>
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
</form>
@endsection