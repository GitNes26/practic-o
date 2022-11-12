<link href="{{asset('css/modal.css')}}" rel="stylesheet" />
@extends('templates/links')
@extends('templates/scripts')
{{-- <div class=" offset-2 col-2 text-end"><a  href="#demo-modales">
    <button type="button" class="btn btn-info">  Agregar Mas empleados</button>
  </a>
</div> --}}
<div id="demo-modales" class="modales">
  <div class="modales__content">
     
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
      <i class="fa-light fa-list-check"></i>&nbsp; Portafolio 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
        <div class="col-3">
        
        <img  width="150" src="{{ asset('GitHub.jpg') }}">
       <br>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </div>
        <div class="col-3">
        <img  width="150" src="{{ asset('GitHub.jpg') }}">
        <br>

        Duis vestibulum euismod imperdiet. Suspendisse potenti. Pellentesque pretium massa vel justo posuere, a interdum elit placerat. Donec sit amet turpis ornare, molestie urna sit amet, cursus quam. Aenean hendrerit, ipsum euismod pharetra gravida, felis eros ullamcorper metus, suscipit tristique augue lacus nec purus. Mauris finibus ex at arcu semper congue. Vivamus leo magna, viverra dignissim quam vitae, vestibulum aliquam nulla.

        Etiam egestas ipsum ac fermentum faucibus. Donec aliquet, diam vel vulputate hendrerit, lacus metus laoreet ligula, nec lobortis nibh mi in tellus. In sed nunc maximus, semper justo nec, semper nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eget purus neque. Aenean imperdiet pretium diam et consequat. Ut vehicula justo eu nunc placerat, eget imperdiet ligula vestibulum. Vestibulum lacinia ultrices urna quis egestas. Curabitur maximus tortor nec pellentesque scelerisque. Pellentesque mattis scelerisque tincidunt. Suspendisse potenti. Phasellus nunc sapien, interdum et fermentum non, gravida quis urna. Fusce bibendum mauris sed euismod blandit. Aenean nunc diam, pellentesque sed cursus eget, consequat vel nibh. Morbi fermentum elit quis sapien efficitur, ac suscipit diam pulvinar. Proin et erat et mi auctor accumsan a vitae dui.

        Maecenas efficitur lorem quis ipsum rhoncus placerat. Sed vestibulum est nisl, nec varius massa porta at. Nam velit diam, aliquam nec magna vulputate, placerat efficitur elit. Suspendisse faucibus lectus eu fringilla tincidunt. Proin sagittis auctor nibh, id aliquet odio accumsan vel. Pellentesque efficitur tellus ac nulla bibendum malesuada. Cras sed pulvinar dolor.

        Nullam lobortis nisl massa, ac blandit eros ultrices sed. Sed facilisis pharetra nibh, sed vulputate odio maximus at. Maecenas fermentum placerat varius. Ut nulla mi, sagittis sit amet diam vitae, dignissim tincidunt odio. Etiam sagittis mi quis eros fermentum, vitae convallis mi tristique. Praesent pharetra tortor ac velit suscipit, egestas sollicitudin felis euismod. Vestibulum cursus magna quam, ut volutpat erat blandit eu. Cras aliquet euismod felis, et imperdiet metus facilisis vitae. Praesent vel dui augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque et semper odio. Sed blandit varius dui eu cursus. Nunc facilisis nulla mi, at ultrices justo egestas eu. Donec sollicitudin ut sem a mattis. Sed consequat scelerisque scelerisque.
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

                  <div class="wrapper">
                    <br>

                  </div>
          
      <div class="modales__footer">
                            <button type="submit" class=" btn-info btn  "> Contactar </button>

        
      </div>

      <a href="#" class="modales__close">&times;</a>
  </div>
</div>
