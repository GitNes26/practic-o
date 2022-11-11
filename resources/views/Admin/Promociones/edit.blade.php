@extends('Admin.Promociones.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar nombre de la Promocion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/admin/promociones">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Promociones.index') }}">Regresar</a> --}}
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

   {{-- <form action="{{ route('Promociones.update',$Promocion->id) }}" method="POST"> --}}
    <form action="#" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                    {{-- <input type="text" name="nombre" value="{{ $Promocion->nombre }}" class="form-control" placeholder="Nombre"> --}}

                </div>
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                    {{-- <input type="text" name="descripcion" value="{{ $Promocion->nombre }}" class="form-control" placeholder="Descripcion"> --}}

                </div>


            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Promocion</button>
            </div>
        </div>
    </form>
@endsection