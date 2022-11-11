@extends('Amin.Bonos.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Nombre/Tipo del Bono</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Bonos.index') }}">Regresar</a> --}}
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

   {{-- <form action="{{ route('Bonos.update',$Bono->id) }}" method="POST"> --}}
    <form action="#" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre/Tipo:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre/Tipo">
                    {{-- <input type="text" name="nombre" value="{{ $Bono->nombre }}" class="form-control" placeholder="Nombre"> --}}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Bono</button>
            </div>
        </div>
    </form>
@endsection