@extends('Admin.Bonos.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de Bonos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Bonos.index') }}">Regresar</a> --}}
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo de Bono:</strong>
                Un muy buen bono
                {{-- {{ $Categoria->nombre }} --}}
            </div>
        </div>
    </div>
@endsection