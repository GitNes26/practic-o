@extends('Admin.Categorias.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar nombre de la Categoria</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/admin/categorias">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Categorias.index') }}">Regresar</a> --}}
            </div>
        </div>
    </div>
   
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Tienes algunos problemas con el texto ingresado.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   --}}

   {{-- <form action="{{ route('Categorias.update',$Categoria->id) }}" method="POST"> --}}
    <form>
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    {{-- <input type="text" name="nombre" value="{{ $Categoria->nombre }}" class="form-control" placeholder="Nombre"> --}}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Categoria</button>
            </div>
        </div>
    </form>
@endsection