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
            <th>¿Como conseguirlo?</th>
            <th>Recompensa a conseguirlo</th>

            <th width="280px">Accion</th>
        </tr>

        {{-- @foreach ($Promociones as $Promocion) --}}
        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>1</th>
            <td>Promocion de tiempo</td>
            <td>Brinda un mejor servicio a las personas que nos han acompañado durante x tiempo</td>
            <td>utiliza la plataforma durante mas de 1 año se habilitara colores diferentes en tu cartel de uso</td>
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
      
        
        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>2</th>
            <td>Promocion de servicios</td>
            <td>permite tener prioridad en los listados de cosumidores</td>
            <td>conlleva el uso de servicios continuos por mas de 1 año</td>
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
        
        
        
        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>3</th>
            <td>Promocion inicio</td>
            <td>brinda priioridad de visibilidad durante 3 dias</td>
            <td>al crear una nueva cuenta, esta sera de las primeras en salir en los buscadores</td>
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
        




        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>4</th>
            <td>Promocion de ORO</td>
            <td>permanece durante 1 año o mas contratando servicios de manera continua</td>
            <td>permite tener tu nombre en dorado, ademas de ser de los primeros en salir en el buscador
            </td>
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
        





        <tr>
            {{-- <th>{{$Promocion->id}}</th>
            <td>{{ $Promocion->nombre }}</td> --}}
            <th>5</th>
            <td>Promocion de gestion</td>
            <td>muestra tu presentacion de usuario/empresa mas grande durante 2 semanas</td>
            <td>lleva a cabo mas de 15 servicios de diferentes tipos durante mas de 1 mes</td>
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