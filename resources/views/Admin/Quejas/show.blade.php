@extends('Admin.Quejas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de Quejas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary">Regresar</a>
                {{-- <a class="btn btn-primary" href="{{ route('Quejas.index') }}">Regresar</a> --}}
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo de la Queja:</strong>
                Un trato muy inesperado

                <strong>Descripcion de la Queja:</strong>
                Un trato muy inesperado


                {{-- {{ $Queja->nombre }} --}}
            </div>
        </div>
    </div>
@endsection