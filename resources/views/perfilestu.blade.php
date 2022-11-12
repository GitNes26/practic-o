<!DOCTYPE html>
<html lang="es">

<head>
    
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta name="author" content="Jane Doe">
    <meta name="description" content="Portafolio Estudiante">
    <meta name="keywords" content="HTML, CSS, JavaScript, React">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo -->
    <title>Mi perfil | Estudiante</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="imagenesf/icon.png">
    @extends('templates/links')
</head>

<body>
    <!-- Barra de navegacion -->
   
</body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <i class="fa-solid fa-bars"></i>
            </a>

            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbar-toggler">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('imagenesf/logo.png')}}" width="50" alt="Logo de la página web">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#proyectos">Portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonios">Referencias</a>
                        </li>
                        
                    </ul>
                    <a href="/"class="btn btn-danger float-end">Cerrar sesión</a>
                </div>
            </div>
    </nav>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Practic-o</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="">

            <h5>Puntos para próximo premio: 25%</h5>
            <p><b>Por cada aumento de 20 solicitudes aceptadas
                  en tu historial de servicios prestados, serás 
                  premiado con un bono de más de 400 pesos!
            </b></p>
            <img src="{{asset('imagenesf/progress.png')}}" alt="">
            <br>
            <br>
            <p> <h4>    Mi cuenta: </h4> 
            <p>Registra o actualiza la cuenta en la que recibirás el pago de tus servicios.</p>

            <input type="text" placeholder="Ingresa tu cuenta bancaria para depositar"></p>
            <input type="text" placeholder="Contraseña">
            <br>
            <br>
            <button type="button" class="btn btn-info">Envíar</button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

            </div>
        </div>
    </div>
    </div>

    <!-- Seccion Hero -->
    <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
            <img class="hero-imagen-desarrollador rounded-circle" src="{{asset('imagenesf/usricon.png')}}" alt="Foto de perfil" width="100px" height="100px">
            <h1>Isarely Gómez</h1>
            <h2>Estudiante de Desarrollo de Software</h2>
        </div>
        <div class="hero-inferior">
            <center><img class="hero-inferior-imagen img-fluid" src="{{asset('imagenesf/webtools.png')}}" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid" src="imagenesf/atom.png" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid"
                    src="{{asset('imagenesf/as.png')}}" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid" src="{{asset('imagenesf/ps.png')}}" alt="" width="80px" height="80px"></center>
        </div>
    </section>

    <!-- Sobre mi -->
    <section id="sobre-mi" class="sobre-mi seccion-oscura">
        <div class="contenedor">
            <h2 class="seccion-titulo">Mi información</h2>
            <p class="seccion-texto"> Amplios conocimientos en desarrollo web como: Uso de lenguajes HTML, CSS, PHP, JS. Uso de herramientas de diseño: Atom y Adobe Photoshop. Diseño y programación en Android Studio.</p>
        </div>
    </section>

    <!-- Experiencia -->
    <section class="experiencia seccion-clara">
        <div class="container text-center" >
            <div class="row">
                <!-- Desarrollo Web --
                <!-- Articulos -->
        <!-- Galeria de Proyectos -->
        <center>
        <div class="container text-center proyectos-contenedor">
            <div class="row justify-content-center">
                <!-- Proyecto 1 -->
                <div class="card" style="width: 19rem;">
                <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 1</p>
                            <br>
                            <b><p>Juego Número Secreto</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 2 -->
                <div class="card" style="width: 19rem;">
  <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 2</p>
                            <br>
                            <b><p>Sistema de calificaciones</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 3 -->
                <div class="card" style="width: 19rem;">
  <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 3</p>
                            <br>
                            <b><p>Reto 100 días de código</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 4 -->
                <div class="card" style="width: 19rem;">
  <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 4</p>
                            <br>
                            <b><p>Revista Somos</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 5 -->
                <div class="card" style="width: 19rem;">
  <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 5</p>
                            <br>
                            <b><p>Hi-Low Coffee Store</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyecto 6 -->
                <div class="card" style="width: 19rem;">
  <div class="card-body">
                        <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="200px" height="150px">
                        <div class="overlay">
                            <p>Proyecto 6</p>
                            <br>
                            <b><p>Pastelería Oliver's</p></b>
                            <div class="iconos-contenedor">
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-github"></i>
                                </a>
                                <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-laptop"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>

        <br>
        

    </section>
    <br>
    <br>
    <br>
    <!-- Testimonios -->
    <section id="testimonios" class="testimonios seccion-clara">
        <h2 class="seccion-titulo">Referencias</h2>
        <h3 class="seccion-descripcion">Calificaciones de los clientes sobre Isarely</h3>
        <br>
        <!-- Carrusel -->
        <div id="testimonios-carrusel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <center><img class="testimonio-imagen rounded-circle" src="{{asset('imagenesf/cliente.png')}}" alt="" width="150px" height="150px">
                        </center>
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel iaculis urna. Fusce a ornare enim, vel interdum turpis. Sed aliquam interdum nisi a placerat.</p>
                        <div class="testimonio-info">
                            <b><p class="cliente">Marcos</p>
                                <p class="cargo">Gerente de OS.DEV</p></b>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <center><img class="testimonio-imagen rounded-circle" src="{{asset('imagenesf/cliente.png')}}" alt="" width="150px" height="150px">
                        </center>
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel iaculis urna. Fusce a ornare enim, vel interdum turpis. Sed aliquam interdum nisi a placerat.</p>
                        <div class="testimonio-info">
                            <b>
                                <p class="cliente">Naidelyn</p>
                                <p class="cargo">Diseñadora gráfica</p></b>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <center><img class="testimonio-imagen rounded-circle" src="{{asset('imagenesf/cliente.png')}}" alt="" width="150px" height="150px">
                        </center>
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel iaculis urna. Fusce a ornare enim, vel interdum turpis. Sed aliquam interdum nisi a placerat.</p>
                        <div class="testimonio-info">
                            <b>
                                <p class="cliente">Ernesto</p>
                                <p class="cargo">Dueño de SoporteYM</p></b>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonios-carrusel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonios-carrusel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
        </div>
    </section>


    <!-- Pie de pagina (footer) -->
    <footer class="seccion-oscura d-flex flex-column align-items-center justify-content-center">
        <img class="footer-logo" src="{{asset('imagenesf/logo.png')}}" alt="Logo del portafolio" width="200px" height="150px">
        <div class="derechos-de-autor ">
            <center>
                Practic-O. <br> LogOuts Developers(2022) &#169; </center>
        </div>
    </footer>

    @extends('templates/scripts')
</div>

</html>