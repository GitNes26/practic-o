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
      </style>
      

</head>
<body>
   <div class="container">
      <div class="row border shadow mt-2">
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
                  <span><i class="fa-thin fa-location-dot icon-right" title="Filtros"></i></span>
               </div>
               <input type="submit">
               <i class="fa-thin fa-filter-list fa-xl ml-2 btn-icon"></i>
            </form>
         </div>
         <div class="row border-top mt-2" id="div_filters">
            <h2>Filtros</h2>
            <div class="col col-sm-2 col-md-3 border-right">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                     <h5>Precio: <b>$500</b></h5>
                  </label>
                </div>
               <div class="row">
                  <div class="col">
                     <label for="priceRange" class="form-label">Mínimo: <b id="price_min">$200</b></label>
                     <label for="priceRange" class="form-label float-end">Mínimo: <b id="price_max">$20,000</b></label>
                     <input type="range" min="200" max="2000"  class="form-range" id="priceRange">
                  </div>
               </div>
            </div>
            <div class="col col-sm-2 col-md-3 border-right">
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
                        <label class="form-check-label" for="inlineCheckbox3">Química Avanzada (disabled)</label>
                      </div>
                  </div>
               </div>
            </div>
            <div class="col col-sm-2 col-md-3 border-right">
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
            <div class="col col-sm-2 col-md-3 border-right">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                     <h5>Recomendaciones:</h5>
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
         </div>
      </div>

      <hr class="my-3">

      <div class="row ">
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona1.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Melani Miami</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona2.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Manolo Morales</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona3.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Dana Dominguez</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
      </div>
      <div class="row text-center">
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona4.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Nuria Nuñez</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona5.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Javier Juarez</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
         <div class="col">
            <div class="card" style="width: 18rem;">
               <img src="{{asset('images/persona6.jpg')}}" class="card-img-top" style="max-height:12rem" alt="...">
               <div class="card-body">
                 <h5 class="card-title fw-bold">Sasha Sanchez</h5>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                     <a type="button" class="btn btn-outline-primary" href="#demo-modales">Saber más</a>
                     <button type="button" class="btn btn-outline-success">Contratar</button>
                  </div>
               </div>
             </div>
         </div>
      </div>
   </div>



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
          <i class="fa-light fa-list-check"></i>&nbsp; Proyectos 
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at velit sapien. Duis et orci id felis gravida porttitor vitae sit amet eros. Curabitur id elit rutrum, rhoncus metus nec, pellentesque magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque ultricies purus nec dui efficitur, eu fermentum lacus rhoncus. Proin sodales pharetra purus, nec iaculis lectus sagittis sit amet. Quisque ullamcorper sodales est, mattis lacinia tellus faucibus a. Phasellus arcu enim, aliquam sed feugiat sit amet, dignissim at velit. Quisque elementum orci massa, eget accumsan massa fringilla dignissim. Proin ante nisl, laoreet nec vulputate non, ultricies id tellus. Mauris dapibus dolor sed iaculis blandit. Integer quis dapibus mauris, vel porta magna.
    
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
      var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
      
      /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
      autocomplete(document.getElementById("search_student"), countries);
      </script>
      
      
</body>
</html>