<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Login</title>
@extends('templates/links')

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
    <div class="row">
          <div  class="offset-5 col-4">
          <img  width="250" src="{{ asset('logo.png') }}">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5 text-center">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Inicio de sesion</h5>
                
                <form  action="{{ route('login') }}"  method="POST" name="sample">
                    @csrf
                  <div class="form-floating mb-3">
                    <input type="text" required class="form-control" id="floatingInput" name="user" placeholder="No.Empleado">
                    <label for="floatingInput">Usuario</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" required class="form-control" id="floatingPassword" name="password" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
                  <a href="/register" class="text-center">¿Aun no tienes cuenta?</a>
                  <div class="d-grid">
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Iniciar Sesion</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @extends('templates/scripts')
</body>

{{-- </html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html> --}}
