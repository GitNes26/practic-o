var tabla;

tabla = $('#tabla_usuarios').DataTable(ConfiguracionDataTable);

$(document).ready(() => {
   $("#div_nueva_contrasenia").hide();
   $("#input_nueva_contrasenia").prop("readonly", true);
});

const
   btn_abrir_modal = $("#btn_abrir_modal"),

   tbody = $("#tabla_usuarios tbody"),

   modal_body = $("#modal-body"),
   formulario = $("#formulario"),
   modal_title = $(".modal-title"),
   id_modal = $("#id"),
   accion_modal = $("#accion"),

   input_usuario = $("#input_usuario"),
   input_perfil_usuario = $("#input_perfil_usuario")
    input_correo = $("#input_correo"),
    div_contrasenia = $("#div_contrasenia"),
    input_contrasenia = $("#input_contrasenia"),
    input_confirmar_contrasenia = $("#input_confirmar_contrasenia"),
    respuesta_contrasena = $("#respuesta_contrasena"),
    div_nueva_contrasenia = $("#div_nueva_contrasenia"),
    input_nueva_contrasenia = $("#input_nueva_contrasenia"),
    switch_nueva_contrasena = $("#switch_nueva_contrasena"),
    input_id_perfil = $("#input_id_perfil"),

   btn_enviar_formulario = $("#btn_enviar_formulario"),
   btn_reset_formulario = $("#btn_reset_formulario")
;
$('.select2').select2({dropdownParent: $("#modal")});
focusSelect2($(".select2"));
/* --- FUNCIONES DE CAJON--- */
// estas funciones se encuentran en index.js para no repetir código
/* --- FUNCIONES DE CAJON--- */

funcionesIniciales();
function funcionesIniciales() {
   relllenarTabla();

   let datos = {accion:"mostrar_objetos"}
   rellenarSelect2(url_modelo_perfil_app,datos,-1,"input_id_perfil");
   input_usuario.focus();
}


// CONFIRMAR CONTRASEÑA
input_confirmar_contrasenia.on('input',function() {
    var contrasena1 = input_contrasenia.val();
    var contrasena2 = input_confirmar_contrasenia.val();

    if (contrasena1 === contrasena2) {
        respuesta_contrasena.addClass('text-success').text('Password match').removeClass('text-danger');
        input_contrasenia.addClass('is-valid').removeClass('is-invalid');
        input_confirmar_contrasenia.addClass('is-valid').removeClass('is-invalid');
        btn_enviar_formulario.prop('disabled',false);
    } else {
        respuesta_contrasena.addClass('text-danger').text("Passwords don't match").removeClass('text-success');
        input_contrasenia.addClass('is-invalid').removeClass('is-valid');
        input_confirmar_contrasenia.addClass('is-invalid').removeClass('is-valid');
        btn_enviar_formulario.prop('disabled',true);
    }
});


//CAMBIAR CONTRASEÑA - SWITCH
switch_nueva_contrasena.click(() => {
    if (switch_nueva_contrasena.is(":checked")) {
        input_nueva_contrasenia.prop("readonly", false);
    } else {
        input_nueva_contrasenia.val("");
        input_nueva_contrasenia.prop("readonly", true);
    }
});


//CLICK EN BTN ABRIR MODAL
btn_abrir_modal.click((e) => {
    e.preventDefault();
    $("#div_nueva_contrasenia").hide();
    $("#input_nueva_contrasenia").prop("readonly", true);

    modal_title.html("<i class='fa-solid fa-user-pen'></i></i>&nbsp; REGISTER USER");
    btn_enviar_formulario.removeClass("btn-primary");
    btn_enviar_formulario.addClass("btn-success");
    btn_enviar_formulario.text("ADD");
    div_nueva_contrasenia.hide();
    div_contrasenia.show();

    //Resetear formulario
    btn_reset_formulario.click();

    //EXCLUIR INPUTS PARA VALIDAR
    input_nueva_contrasenia.addClass("excluir_validacion")
    input_contrasenia.removeClass("excluir_validacion")
    input_confirmar_contrasenia.removeClass("excluir_validacion")

    // input_usuario.val("nuevo");
    // input_correo.val("nuevo@gmial.com");
    // input_contrasenia.val("1");
});


//RESETEAR FORMULARIOS
btn_reset_formulario.click((e) => {
  input_contrasenia.removeClass('is-invalid is-valid');
  input_confirmar_contrasenia.removeClass('is-invalid is-valid');
  respuesta_contrasena.text("").removeClass('text-danger text-success');
  btn_enviar_formulario.prop('disabled',false);

  //EXCLUIR INPUTS PARA VALIDAR
  input_nueva_contrasenia.addClass("excluir_validacion")
  input_contrasenia.removeClass("excluir_validacion")
  input_confirmar_contrasenia.removeClass("excluir_validacion")

   let datos = {accion:"mostrar_objetos"}
   resetearSelect2(input_id_perfil,url_modelo_perfil_app,datos);
   id_modal.val("");
   setTimeout(() => {
       input_usuario.focus();
   }, 500);
});



// REGISTRAR O EDITAR OBJETO
formulario.on("submit", async (e) => {
   e.preventDefault();
   id_modal.addClass("excluir_validacion")
   accion_modal.addClass("excluir_validacion")
   input_nueva_contrasenia.addClass("excluir_validacion")

   if (switch_nueva_contrasena.is(":checked"))
      input_nueva_contrasenia.removeClass("excluir_validacion")
   if (!validandoInputs(formulario)) return

   if (id_modal.val() <= 0) { //NUEVO
     id_modal.val("");
     accion_modal.val("crear_objeto");
   } else { //EDICION
     accion_modal.val("editar_objeto");
   }

   let datos = formulario.serializeArray();
   // return console.log(datos);
   let momento_actual = moment().format("YYYY-MM-DD hh:mm:ss");
   if (id_modal.val() <= 0) { //NUEVO
     agregarDatoAlArray("creado",momento_actual,datos);
   } else { //EDICION
     agregarDatoAlArray("actualizado",momento_actual,datos);
   }

   // return console.log(datos);
   // peticionRegistrarEditar(url_modelo_usuario_app,datos,relllenarTabla);
   const ajaxResponse = await peticionAjaxAsync(url_modelo_usuario_app,datos,"relllenarTabla()");
   if (id_modal.val() <= 0 && id_modal == id_cookie) rellenarSideBar();
});

async function relllenarTabla() {
   let datos = {accion:'mostrar_objetos'}
   const ajaxResponse = await peticionAjaxAsync(url_modelo_usuario_app,datos);
   
   //Limpiar tabla
   tbody.slideUp();
   tabla.clear().draw();

   let objResponse = ajaxResponse.Datos;
   // console.log(objResponse);
   // return console.log(objResponse);

   objResponse.map(obj => {
      //Campos
      let
        campo_usuario = `${obj.usuario}`,
         campo_correo = `${obj.correo}`,
         campo_perfil = `${obj.perfil_nombre}`,
         campo_creado = formatearFechaHoraNormal(obj.creado);

      let campo_botones =
         `<td class='align-middle'>
            <div class='btn-group' role='group' aria-label='Basic example'>`;
      if (permiso_cambios) {
         campo_botones += //html
               `<button class='btn btn-outline-primary btn_editar' type='button' data-id='${obj.id}' title='Edit User' data-bs-toggle="modal" data-bs-target="#modal"><i class='fa-solid fa-user-pen fa-lg i_editar'></i></button>`;
      }
      if (permiso_bajas) {
         campo_botones += //html
               `<button class='btn btn-outline-danger btn_eliminar' type='button' data-id='${obj.id}' title='Delete User' data-nombre='${obj.usuario}'><i class='fa-solid fa-trash-alt i_eliminar'></i></button>`;
      }
      campo_botones +=
            `</div>
         </td>`;

      //Dibujar Tabla
      tabla.row.add([
         campo_usuario,
         campo_correo,
         campo_perfil,
         campo_creado,
         campo_botones
      ]).draw().node();
      tabla.columns.adjust().draw();
   });
   tbody.slideDown('slow');
}


//ACCIONES EN BOTONES DE LA TABLA
tbody.click((e) => {
   // console.log(e.target);
   e.preventDefault();

   //EDITAR OBJETO
   if ($(e.target).hasClass("btn_editar") || $(e.target).hasClass("i_editar")) {
      let btn_editar;

      if ($(e.target).hasClass('i_editar')) { btn_editar = $(e.target).parent() }
      else { btn_editar = $(e.target) }

      $("#div_nueva_contrasenia").show();
      $("#input_nueva_contrasenia").prop("readonly", true);
      editarObjeto(btn_editar);
   }

   //ELIMINAR OBJETO
   if ($(e.target).hasClass('btn_eliminar') || $(e.target).hasClass('i_eliminar')){
      let btn_eliminar;

      if ($(e.target).hasClass('i_eliminar')) { btn_eliminar = $(e.target).parent() }
      else { btn_eliminar = $(e.target) }

      eliminarObjeto(btn_eliminar);
   }
});

//EDITAR OBJETO
async function editarObjeto(btn_editar) {
   modal_title.html("<i class='fa-solid fa-user-pen'></i></i>&nbsp; EDIT USER");
    btn_enviar_formulario.removeClass("btn-success");
    btn_enviar_formulario.addClass("btn-primary");
    btn_enviar_formulario.text("SAVE");
    div_contrasenia.hide();
    div_nueva_contrasenia.show();

    //EXCLUIR INPUTS PARA VALIDAR
    input_contrasenia.addClass("excluir_validacion")
    input_confirmar_contrasenia.addClass("excluir_validacion")

   let id_objeto = btn_editar.attr('data-id');
   let datos = {id:id_objeto, accion:"mostrar_objeto"};
   const ajaxResponse = await peticionAjaxAsync(url_modelo_usuario_app,datos);
   // peticionEditarObjeto(url_modelo_usuario_app,datos);

   const obj = ajaxResponse.Datos;
   //Formulario
   id_modal.val(Number(obj.id));
   input_usuario.val(obj.usuario);
   input_correo.val(obj.correo);

   datos = {accion:"mostrar_objetos"}
   rellenarSelect2(url_modelo_perfil_app,datos,obj.perfil_id,"input_id_perfil");
   setTimeout(() => {
        input_usuario.focus();
    }, 1000);
}

//ELIMINAR OBJETO
async function eliminarObjeto(btn_eliminar) {
   let titulo = "¿Are you sure you want to delete this user?";
   let texto = `${btn_eliminar.attr("data-nombre")}`;

   let fecha_actual = moment().format("YYYY-MM-DD hh:mm:ss");
   let datos = {
      accion: "eliminar_objeto",
      id: Number(btn_eliminar.attr("data-id")),
      eliminado: fecha_actual
   }

   await peticionEliminarObjetoAsync(titulo,texto,url_modelo_usuario_app,datos,"relllenarTabla()");
}
