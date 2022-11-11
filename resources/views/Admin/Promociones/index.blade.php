@extends('Admin.Promociones.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Promociones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"> Registra una Promocion</a>
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
            <th>id</th>
            <td>Nombre de la promocion</td>
            <td>Descripcion de la promocion</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Promociones.destroy',$Promocion->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Promociones.show',$Promocion->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Promociones.edit',$Promocion->id) }}">Editar</a> --}}

                    <a class="btn btn-info" href="">Mostrar</a>
                    <a class="btn btn-primary" href="">Editar</a>
   

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