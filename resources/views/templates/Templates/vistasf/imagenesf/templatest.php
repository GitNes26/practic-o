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
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Rubik+Dirt&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="#">
                    <img src="imagenesf/logo.png" width="50" alt="Logo de la página web">
                </a>
                <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#sobre-mi">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#proyectos">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Referencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Más información</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seccion Hero -->
    <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
            <img class="hero-imagen-desarrollador rounded-circle" src="imagenesf/usricon.png" alt="Foto de perfil" width="100px" height="100px">
            <h1>Isarely Gómez</h1>
            <h2>Estudiante de Desarrollo de Software</h2>
        </div>
        <div class="hero-inferior">
            <center><img class="hero-inferior-imagen img-fluid" src="imagenesf/webtools.png" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid" src="imagenesf/atom.png" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid"
                    src="imagenesf/as.png" alt="" width="80px" height="80px"><img class="hero-inferior-imagen img-fluid" src="imagenesf/ps.png" alt="" width="80px" height="80px"></center>
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
        <div class="container text-center">
            <div class="row">
                <!-- Desarrollo Web -->
                <div class="columna col-12 col-md-4">
                    <i class="bi bi-laptop"></i>
                    <p class="experiencia-titulo">Desarrollo Web</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet, odio eget fringilla scelerisque, sem purus fringilla mauris, nec ultricies nisl nisl sit amet dolor. </p>
                    <div class="badges-contenedor">
                        <span class="badge text-bg-primary">HTML</span>
                        <span class="badge text-bg-primary">CSS</span>
                        <span class="badge text-bg-primary">JavaScript</span>
                        <span class="badge text-bg-primary">React</span>
                    </div>
                </div>
                <!-- Articulos -->
                <div class="columna col-12 col-md-4">
                    <i class="bi bi-laptop"></i>
                    <p class="experiencia-titulo">Artículos</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet, odio eget fringilla scelerisque, sem purus fringilla mauris, nec ultricies nisl nisl sit amet dolor. </p>
                    <div class="badges-contenedor">
                        <span class="badge text-bg-primary">Escribir</span>
                        <span class="badge text-bg-primary">Editar</span>
                        <span class="badge text-bg-primary">Blogs</span>
                    </div>
                </div>
                <!-- Estudiante -->
                <div class="columna col-12 col-md-4">
                    <i class="bi bi-laptop"></i>
                    <p class="experiencia-titulo">Estudiante</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet, odio eget fringilla scelerisque, sem purus fringilla mauris, nec ultricies nisl nisl sit amet dolor. </p>
                    <div class="badges-contenedor">
                        <span class="badge text-bg-primary">freeCodeCamp</span>
                        <span class="badge text-bg-primary">Desarrollo Web</span>
                        <span class="badge text-bg-primary">Python</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- Proyectos -->
    <section id="proyectos" class="proyectos-recientes seccion-clara d-flex flex-column">
        <h2 class="seccion-titulo texto-negro">Mis proyectos</h2>
        <h3 class="seccion-descripcion">Sube tus proyectos para que los clientes los vean.</h3>
        <!-- Galeria de Proyectos -->
        <div class="container text-center proyectos-contenedor">
            <div class="row">
                <!-- Proyecto 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="proyecto">
                        <img src="imagenesf/pc.png" alt="Proyecto 1" width="300px" height="150px">
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
        <a href="https://matias.ma/nsfw/" target="_blank" rel="noopener noreferrer">
            <button type="button" class="btn btn-info">
          Ver más proyectos
          <i class="bi bi-arrow-right-circle-fill"></i>
        </button>
        </a>
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
                        <center><img class="testimonio-imagen rounded-circle" src="imagenesf/cliente.png" alt="" width="150px" height="150px">
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
                        <center><img class="testimonio-imagen rounded-circle" src="imagenesf/cliente.png" alt="" width="150px" height="150px">
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
                        <center><img class="testimonio-imagen rounded-circle" src="imagenesf/cliente.png" alt="" width="150px" height="150px">
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
        <img class="footer-logo" src="imagenesf/logo.png" alt="Logo del portafolio" width="200px" height="150px">
        <div class="derechos-de-autor ">
            <center>
                Practic-O. <br> LogOuts Developers(2022) &#169; </center>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3 " crossorigin="anonymous "></script>
</body>

</html>

@yield ('templatest')