<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Deportiva Digital</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/inicio">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Ver Registros
                </a>
                <ul class="dropdown-menu">
                  {{-- <li><a class="dropdown-item" href="{{ route('Admin.Categorias.index') }}">Categorias</a></li> --}}
                  <li><a class="dropdown-item" href="">Categorias</a></li>
                  </ul>
              </li>
  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Registrar
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Categorias</a></li>

                  {{-- <li><a class="dropdown-item" href="{{ route('Admin.Categorias.create') }}">Categorias</a></li> --}}
                </ul>
            </li>
            </ul>
          </div>
        </div>
      </nav>