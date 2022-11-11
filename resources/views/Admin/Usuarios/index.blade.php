@extends('Admin.Usuarios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="/admin/create/usuarios">Registra un Usuario</a>

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
            <th>Apellido</th>
            <th>Correo</th>
            <th>Celular</th>
            <th>Curp</th>
            <th>fecha nacimiento</th>
            <th>Matricula</th>
            <th>Conocimientos</th>

            <th width="280px">Accion</th>
        </tr>

        {{-- @foreach ($Quejas as $Queja) --}}
        <tr>
            {{-- <th>{{$Queja->id}}</th>
            <td>{{ $Queja->nombre }}</td> --}}
            <th>1</th>
            <th>brayan</th>
            <th>romero</th>
            <th>brayan@gmail.com</th>
            <th>8718875547</th>
            <th>rogb001005hclmnra1</th>
            <th> 5 octubre 2000</th>
            <th>19170141</th>
            <th>Electronica, Sistemas, Electricidad</th>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Quejas.destroy',$Queja->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Quejas.show',$Queja->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Quejas.edit',$Queja->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/usuarios">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>


        <tr>
            {{-- <th>{{$Queja->id}}</th>
            <td>{{ $Queja->nombre }}</td> --}}
            <th>2</th>
            <th>luis</th>
            <th>hernandez</th>
            <th>luis@gmail.com</th>
            <th>8751345634</th>
            <th>rlegu0038492hc435fsd</th>
            <th> 12 diciembre 2000</th>
            <th>191701555</th>
            <th>Electricidad, Mecanica, Sistemas</th>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Quejas.destroy',$Queja->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Quejas.show',$Queja->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Quejas.edit',$Queja->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/usuarios">Editar</a>
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