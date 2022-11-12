<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   @extends('templates/links')
   @extends('templates/scripts')

   <link href="{{asset('css/modal.css')}}" rel="stylesheet" />
   <link href="{{asset('chat.css')}}" rel="stylesheet" />


   <style>
      * {
        box-sizing: border-box;
      }
      
      body {
        font: 16px Arial;  
      }
      
      /*the container must be positioned relative:*/
      .autocomplete {
        position: relative;
        display: inline-block;
      }
      
      input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
      }
      
      input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
      }
      
      input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
      }
      
      .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        max-height: 150px;
        overflow-y: scroll;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
      }
      
      .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff; 
        border-bottom: 1px solid #d4d4d4; 
      }
      
      /*when hovering an item:*/
      .autocomplete-items div:hover {
        background-color: #e9e9e9; 
      }
      
      /*when navigating through the items using the arrow keys:*/
      .autocomplete-active {
        background-color: DodgerBlue !important; 
        color: #ffffff; 
      }

      .btn-icon {
         transition: all 0.3s ease-in-out
      }
      .btn-icon:hover {
         color: #104c9b;
         transform: scale(1.05);
         cursor: pointer;
      }


      #form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}

#form p {
  text-align: center;
}

#form label {
  font-size: 20px;
}

input[type="radio"] {
  display: none;
}

label {
  color: grey;
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}
      </style>
      

</head>
<body>
  <nav class="navbar bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand">Practic-O</a>
      {{-- <i class="">Mi perfil</i>
      <i class="">Cliente</i> --}}
        <a class="btn btn-outline-danger" href="/">Cerrar Sesión</a>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-9">
        <div class="container pb-4">

          <div class="row border shadow mt-2 p-3">
              <div class="col">
                <form autocomplete="off" action="#">
                    <div class="autocomplete input-icon" style="width:300px;">
                      <input type="text" id="search_student" name="search_student" placeholder="¿Qué estás buscando?">
                      <span><i class="fa-light fa-magnifying-glass icon-right"></i></span>
                    </div>
                </form>
              </div>
              <div class="col">
                <form autocomplete="off" action="#">
                    <div class="autocomplete input-icon" style="width:300px;">
                      <input type="text" id="search_city" name="search_city" placeholder="¿En donde?">
                      <span><i class="fa-thin fa-location-dot icon-right" id="btn_filter" title="Filtros"></i></span>
                    </div>
                    <input type="submit">
                    <i class="fa-thin fa-filter-list fa-xl ml-2 btn-icon" onclick="showHideFilters()"></i>
                </form>
              </div>
      
              <div class="row border-top mt-2 hide" id="div_filters">
                <h2>Filtros</h2>
                <div class="col col-sm-2 col-md-3 border">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                          <h5>Precio: <b>$1000</b></h5>
                      </label>
                    </div>
                    <div class="row">
                      <div class="col">
                          <label for="priceRange" class="form-label">Mínimo: <b id="price_min">$200</b></label>
                          <label for="priceRange" class="form-label float-end">Máximo: <b id="price_max">$2,000</b></label>
                          <input type="range" min="200" max="2000"  class="form-range" id="priceRange">
                      </div>
                    </div>
                </div>
                <div class="col col-sm-2 col-md-3 border">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                          <h5>Categorias:</h5>
                      </label>
                    </div>               
                    <div class="row">
                      <div class="col">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Hogar</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Estudios</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Pintar</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Construcción</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Electricidad</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Mecánica</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                            <label class="form-check-label" for="inlineCheckbox3">Química Avanzada (no disponible)</label>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col col-sm-2 col-md-3 border">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                          <h5>Experiencia:</h5>
                      </label>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1-6 meses</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">+6 meses</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">+1 año</label>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col col-sm-2 col-md-3 border">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                          <h5>Calificación:</h5>
                      </label>
                    </div>
                    <div class="row">
                      <div class="col">
                        <form>
                          <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                          </p>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
          </div>
      
          <hr class="my-3">
      
          <div class="row justify-content-center">
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona1.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Melani Miami</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
               </div>
                    </div>
                  </div>
              </div>
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona2.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Manolo Morales</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona3.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Dana Dominguez</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona4.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Nuria Nuñez</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona5.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Javier Juarez</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col col-sm-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/persona6.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">Sasha Sanchez</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                          <a type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contratar</a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card h-100">
          <div class="card-header bg-dark text-light text-center"><h2>RECOMENDADOS</h2></div>
          <div class="card-body">
            <div class="row">

              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('images/persona1.jpg')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Melani Miami</h5>
                      <i>fotografia</i>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                        <button type="button" class="btn btn-outline-success">Contratar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('images/persona3.jpg')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Dana Dominguez</h5>
                      <i>Tutorias</i>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                        <button type="button" class="btn btn-outline-success">Contratar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{asset('images/persona5.jpg')}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Javier Juarez</h5>
                      <i>Pintar fachada</i>
                      <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Saber más</a>
                        <button type="button" class="btn btn-outline-success">Contratar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa-solid fa-book-open-cover"></i>&nbsp;Conocimientos
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis leo nec mauris lacinia, non dapibus elit vestibulum. Nullam dapibus dui sit amet tortor elementum, in efficitur lacus tincidunt. Nam accumsan, tortor et malesuada sagittis, ligula massa eleifend quam, ac facilisis ipsum magna nec nunc. Maecenas fermentum neque ut vestibulum cursus. Quisque nec vestibulum elit, aliquam vulputate leo. Curabitur ornare sit amet magna in facilisis. Maecenas non eros non augue gravida laoreet. Donec sed efficitur odio. Ut convallis maximus mi vel faucibus. Nullam ullamcorper in risus in pharetra. Pellentesque blandit hendrerit ex et dictum.
          
                  Pellentesque in lorem tempor, cursus nisi id, aliquam risus. Praesent malesuada sed orci in ultrices. Cras gravida elementum odio in pellentesque. Aenean a commodo nisl, id rhoncus libero. Nunc nunc felis, blandit sed semper vel, ultrices in sapien. Donec pellentesque lectus non ornare gravida. Donec mattis dapibus elit. Donec justo massa, volutpat at pretium vitae, suscipit a massa. Sed varius orci in auctor egestas.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa-light fa-list-check"></i>&nbsp; Proyectos 
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                  <div class="container text-center proyectos-contenedor">
                    <div class="row justify-content-center">
                        <!-- Proyecto 1 -->
                        <div class="card" style="width: 15rem;">
                        <div class="card-body">
                                <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="100px" height="75px">
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
                        <div class="card" style="width: 15rem;">
          <div class="card-body">
                                <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="100px" height="75px">
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
                        <div class="card" style="width: 15rem;">
          <div class="card-body">
                                <img src="{{asset('imagenesf/pc.png')}}" alt="Proyecto 1" width="100px" height="75px">
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
                    </div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fa-solid fa-ranking-star"></i>&nbsp;  Calificacion
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i></strong> 
                </div>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success">Contratar</button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
    
        <div class="modal-body">
         
<!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: https://codepen.io/supah/

It's just a concept, a fake chat to design a new daily UI for direct messaging.
Hope you like it :)

-->


<br>
<div class="chatbox-holder">
  <div class="chatbox">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href="https://www.facebook.com/mfreak"><img src="https://gravatar.com/avatar/2449e413ade8b0c72d0a15d153febdeb?s=512&d=https://codepen.io/assets/avatars/user-avatar-512x512-6e240cf350d2f1cc07c2bed234c3a3bb5f1b237023c204c782622e80d6b212ba.png" /></a> 
      </div>
      <div class="chat-partner-name">
        <span class="status online"></span>
        <a target="_blank" href="https://www.facebook.com/mfreak">Mamun Khandaker</a>
      </div>
      <div class="chatbox-icons">
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    
    <div class="chat-messages">
       <div class="message-box-holder">
        <div class="message-box">
          Hello
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-sender">
           Mamun Khandaker
         </div>
        <div class="message-box message-partner">
          Hi.
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-box">
          How are you doing?
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-sender">
           Mamun Khandaker
         </div>
        <div class="message-box message-partner">
          I'm doing fine. How about you?
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-box">
          I am fine.
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-box">
          Do you know why I knocked you today?
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-box">
          There's something important I would like to share with you. Do you have some time?
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-sender">
           Mamun Khandaker
         </div>
        <div class="message-box message-partner">
          Yeah sure. Let's meet in the Einstein cafe this evening and discuss the matter.
        </div>
      </div>
      
      <div class="message-box-holder">
        <div class="message-sender">
           Mamun Khandaker
         </div>
        <div class="message-box message-partner">
          I thought of coming to your place and discuss about it but I had to finish my projects and I didn't have enough time to go out of the house.
        </div>
      </div>      
    </div>
    
    <div class="chat-input-holder">
      <textarea class="chat-input"></textarea>
      <input type="submit" value="Send" class="message-send" />
    </div>
    <div class="attachment-panel">
      <a href="#" class="fa fa-thumbs-up"></a>
      <a href="#" class="fa fa-camera"></a>
      <a href="#" class="fa fa-video-camera"></a>
      <a href="#" class="fa fa-image"></a>
      <a href="#" class="fa fa-paperclip"></a>
      <a href="#" class="fa fa-link"></a>
      <a href="#" class="fa fa-trash-o"></a>
      <a href="#" class="fa fa-search"></a>
    </div>
  </div>
  

  
  </div>
</div>
</div>
<div class="bg"></div>


      </div>
    </div>
  </div>
  </div>
</body>
  


  <script>
      function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /close any already open lists of autocompleted values/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
              }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
        });
        function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
      }
      
      /*An array containing all the country names in the world:*/
      var trabajos = ["Pintor","Diseñador","Albañil","Cuidador de perros","Niñera","Cocinera","Music","Bailarin","Entrenador"];

      var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
      
      /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
      autocomplete(document.getElementById("search_student"), trabajos);
      autocomplete(document.getElementById("search_city"), countries);
  </script>
  <!-- JQuery 6 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const btn_filter = document.querySelector('#btn_filter')
    const div_filters = $('#div_filters')
    div_filters.hide()

    const showHideFilters =() => {
      if (div_filters.hasClass('hide'))
        div_filters.slideDown('slow')
      else div_filters.slideUp('slow')

      div_filters.toggleClass('hide');
    }

    $(".rating").rate();

    //or for example
    var options = {
        max_value: 6,
        step_size: 0.5,
    }
    $(".rating").rate(options);
  </script>
      

</body>
</html>