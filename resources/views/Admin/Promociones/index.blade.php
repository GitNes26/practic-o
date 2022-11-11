@extends('Admin.Promociones.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Promociones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="/admin/create/promociones">Registra una Promocion</a>
                {{-- <a class="btn btn-success" href="{{ route('Promociones.create') }}"> Registra una Promocion</a> --}}
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>

            <th width="280px">Accion</th>
        </tr>

        {{-- @foreach ($Promociones as $Promocion) --}}
        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>1</th>
            <td>Promocion de tiempo</td>
            <td>Brinda un mejor servicio a las personas que nos han acompañado durante x tiempo</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Promociones.destroy',$Promocion->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Promociones.show',$Promocion->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Promociones.edit',$Promocion->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/promociones">Editar</a>   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        {{-- @endforeach --}}
    
    
    </table>
    {{-- {!! $Promociones->links() !!} --}}
@endsection