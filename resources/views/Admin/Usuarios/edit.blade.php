@extends('Admin.Quejas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar titulo de la Queja</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/admin/quejas">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Quejas.index') }}">Regresar</a> --}}
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

   {{-- <form action="{{ route('Quejas.update',$Queja->id) }}" method="POST"> --}}
    <form action="#" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                    {{-- <input type="text" name="titulo" value="{{ $Queja->nombre }}" class="form-control" placeholder="Titulo"> --}}
                </div>
                <div class="form-group">
                    <strong>Descripcion:</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripcion">
                    {{-- <input type="text" name="descripcion" value="{{ $Queja->nombre }}" class="form-control" placeholder="Descripcion"> --}}
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Queja</button>
            </div>
        </div>
    </form>
@endsection