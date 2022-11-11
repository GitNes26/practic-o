@extends('Admin.Quejas.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Registrar nuevo Usuario</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/admin/usuarios">Regresar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Existen algunos problemas al ingresar esos parametros.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form>

{{-- <form action="{{ route('Quejas.store') }}" method="POST"> --}}
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group">
                <strong>Apellido:</strong>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group">
                <strong>Correo:</strong>
                <input type="text" name="correo" class="form-control" placeholder="Correo">
            </div>
            <div class="form-group">
                <strong>Celular:</strong>
                <input type="numeric" name="celular" class="form-control" placeholder="Celular">
            </div>
            <div class="form-group">
                <strong>Curp:</strong>
                <input type="text" name="curp" class="form-control" placeholder="Curp">
            </div>

            <div class="form-group">
                <strong>Fecha nacimiento:</strong>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group">
                <strong>Matricula:</strong>
                <input type="text" name="matricula" class="form-control" placeholder="Matricula">
            </div>


            <div class="form-group">
                <strong>Capacidades/Conocimientos:</strong>
                <input type="text" name="apellido" class="form-control" placeholder="Capacidades/Conocimientos">
            </div>

            <div class="card col-xs-12 col-sm-12 col-md-12 text-center">

                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">


                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Soldadura</label>
              
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Electricidad</label>
              
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Sistemas Operativos</label>


                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck4">Limpieza</label>
              
                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck5">Comunicacion</label>
              
                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck6">Enfermera</label>

                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck7">Doctora</label>
              
                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck8">Arquitecto</label>
              
                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck9">Contable</label>

                <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck10">Psicologo</label>
              
                <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck11">Criminologo</label>
              
                <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck12">Atencion Social</label>

                <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck13">Publicista</label>
              
                <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck14">Ingenieria Civil</label>
              
                <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck15">Quimico</label>

                <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck16">Minero</label>
            </div>


            </div>






        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection