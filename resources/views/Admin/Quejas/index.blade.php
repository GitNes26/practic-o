@extends('Admin.Quejas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Quejas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success"> Registra una Queja</a>
                {{-- <a class="btn btn-success" href="{{ route('Quejas.create') }}"> Registra una Queja</a> --}}
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
            <th width="280px">Accion</th>
        </tr>

        {{-- @foreach ($Quejas as $Queja) --}}
        <tr>
            {{-- <th>{{$Queja->id}}</th>
            <td>{{ $Queja->nombre }}</td> --}}
            <th>id</th>
            <td>nombre</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Quejas.destroy',$Queja->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Quejas.show',$Queja->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Quejas.edit',$Queja->id) }}">Editar</a> --}}
   
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
    {{-- {!! $Quejas->links() !!} --}}
@endsection