@extends('Admin.Categorias.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Registrar nueva Categoria</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/admin/categorias">Regresar</a>
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

{{-- <form action="{{ route('Categorias.store') }}" method="POST"> --}}
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de la Categoria:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection