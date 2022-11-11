@extends('Admin.Promociones.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de Promociones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Promociones.index') }}">Regresar</a> --}}
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                Un nombre muy creativio
                <strong>Descripcion:</strong>
                Descripcion muy creativia
                {{-- {{ $Promocion->nombre }} --}}
            </div>
        </div>
    </div>
@endsection