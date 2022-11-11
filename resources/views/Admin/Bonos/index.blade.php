@extends('Admin.Bonos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Admin Bonos</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success"> Registra un Bono</a> --}}
                <a class="btn btn-success" href="/admin/create/bonos"> Registra una Bono</a>
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
            <th>Nombre/Tipo Bono</th>
            <th width="280px">Accion</th>
        </tr>

        {{-- @foreach ($Bonos as $Bono) --}}
        <tr>
            {{-- <th>{{$Bono->id}}</th>
            <td>{{ $Bono->nombre }}</td> --}}
            <th>1</th>
            <td>Bono a la mejor participacion</td>
            <td>
                <form>
                    {{-- <form action="{{ route('Bonos.destroy',$Bono->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Bonos.show',$Bono->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Bonos.edit',$Bono->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/bonos">Editar</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <tr>
            {{-- <th>{{$Bono->id}}</th>
            <td>{{ $Bono->nombre }}</td> --}}
            <th>2</th>
            <td>Bono al mejor desempeño</td>
            <td>
                <form>
                    {{-- <form action="{{ route('Bonos.destroy',$Bono->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Bonos.show',$Bono->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Bonos.edit',$Bono->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/bonos">Editar</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <tr>
            {{-- <th>{{$Bono->id}}</th>
            <td>{{ $Bono->nombre }}</td> --}}
            <th>3</th>
            <td>Bono a la mejor calificacion</td>
            <td>
                <form>
                    {{-- <form action="{{ route('Bonos.destroy',$Bono->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Bonos.show',$Bono->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Bonos.edit',$Bono->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/bonos">Editar</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        <tr>
            {{-- <th>{{$Bono->id}}</th>
            <td>{{ $Bono->nombre }}</td> --}}
            <th>4</th>
            <td>Bono al mejor resultado</td>
            <td>
                <form>
                    {{-- <form action="{{ route('Bonos.destroy',$Bono->id) }}" method="POST"> --}}
                    {{-- <a class="btn btn-info" href="{{ route('Bonos.show',$Bono->id) }}">Mostrar</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('Bonos.edit',$Bono->id) }}">Editar</a> --}}
                    <a class="btn btn-info" href="/admin/edit/bonos">Editar</a>
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        {{-- @endforeach --}}
    
    
    </table>
    {{-- {!! $Bonos->links() !!} --}}
@endsection