<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
@extends('templates/links')
@extends('templates/scripts')
</head>
<style>   
 body {
  background: #F1EDED;
  background: linear-gradient(to right, #F1EDED, #33AEFF);
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}

.btn-google {
  color: white !important;
  background-color: #ea4335;
}

.btn-facebook {
  color: white !important;
  background-color: #3b5998;
}
.espacio {
  height: 2rem;
}
</style>

<body>
    <div class="container">
    <div class="espacio"></div>

<div class="container">
    <div class="row">
      <div  class="offset-5 col-4">
      <img  width="250" src="{{ asset('logo.png') }}">
      </div>
    </div>
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Crear Cuenta</h5>
                
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="text" required class="form-control" id="floatingInput" name="numero" placeholder="No.Empleado">
                    <label for="floatingInput">Correo Electronico</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" required class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" required class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                    <label for="floatingPassword">Repite la Contraseña</label>
                  </div>
                  <div class="text-center form-floating mb-3">
                    <a class="text-center" href="{{ route('login') }}"> Ya tienes una cuenta?</a>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Crear Cuenta</button>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>
