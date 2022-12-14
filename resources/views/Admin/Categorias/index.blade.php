@extends('Admin.Categorias.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Categorias/Conocimientos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/admin/create/categorias"> Registra una Categoria</a>
                {{-- <a class="btn btn-success" href="{{ route('Categorias.create') }}"> Registra una Categoria</a> --}}
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

        {{-- @foreach ($Categorias as $Categoria) --}}

        <tr>
            {{-- <th>{{$Categoria->id}}</th>
            <td>{{ $Categoria->nombre }}</td> --}}
            <th>1</th>
            <td>Conocimiento en Electronica</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Categorias.destroy',$Categoria->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Categorias.show',$Categoria->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Categorias.edit',$Categoria->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/categorias">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <tr>
            {{-- <th>{{$Categoria->id}}</th>
            <td>{{ $Categoria->nombre }}</td> --}}
            <th>2</th>
            <td>Conocimiento en Sistemas</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Categorias.destroy',$Categoria->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Categorias.show',$Categoria->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Categorias.edit',$Categoria->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/categorias">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>

        <tr>
            {{-- <th>{{$Categoria->id}}</th>
            <td>{{ $Categoria->nombre }}</td> --}}
            <th>3</th>
            <td>Conocimiento en Electricidad</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Categorias.destroy',$Categoria->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Categorias.show',$Categoria->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Categorias.edit',$Categoria->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/categorias">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>

        <tr>
            {{-- <th>{{$Categoria->id}}</th>
            <td>{{ $Categoria->nombre }}</td> --}}
            <th>4</th>
            <td>Conocimiento en Redes</td>
            <td>
                <form action="" method="POST">
                    {{-- <form action="{{ route('Categorias.destroy',$Categoria->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Categorias.show',$Categoria->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Categorias.edit',$Categoria->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/categorias">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>







        {{-- @endforeach --}}
    
    
    </table>
    {{-- {!! $Categorias->links() !!} --}}
@endsection