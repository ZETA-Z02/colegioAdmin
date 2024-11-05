var host = "localhost";

$(document).ready(function () {
  listaMaestros();
  eliminarMaestros();
  insertarMaestros();
});

function listaMaestros() {
  $.ajax({
    type: "GET",
    url: `http://${host}/colegioAdmin/maestros/listaMaestros`,
    success: function (response) {
      let datos = JSON.parse(response);
      let html = "";
      datos.forEach((element) => {
        html += `
          <tr mostrandoId="${element.idmaestro}" id="${element.idmaestro}">
            <td>${element.idmaestro}</td>
            <td>${element.nombre} ${element.apellidos}</td>
            <td>${element.fecNacimiento}</td>
            <td>${element.foto}</td>
            <td>${element.sexo}</td>
            <td>${element.especialidad}</td>
            <td>${element.ciudad}</td>
            <td>${element.telefono}</td>
            <td>${element.email}</td>
            <td>${element.idgrado}</td>
            <td><button class="button alert eliminarMaestros" style="border-radius: 8px;">Eliminar</button></td>
          </tr>`;
      });
      $("#maestros").html(html); 
    },
    error: function (error) {
      console.log("Error al obtener la lista de maestros:", error);
    },
  });
}

function eliminarMaestros() {
  $(document).on("click", ".eliminarMaestros", function () {
    let idmaestro = $(this).closest("tr").attr("mostrandoId");

    $.ajax({
      type: "POST",
      url: `http://${host}/colegioAdmin/maestros/eliminarMaestros/`,
      data: { idmaestro: idmaestro },  // Cambiar 'datos' por 'data'
      success: function (response) {
        alert("Eliminado correctamente");
        listaMaestros();
      },
      error: function (error) {
        console.log("Error al eliminar el maestro:", error);
      },
    });
  });
}

function insertarMaestros() {
  $(document).on("click", "#insertarMaestros", function () {
    let idmaestro = $("#idmaestro").val();
    let nombre = $("#nombre").val();
    let apellidos = $("#apellidos").val();
    let fecNacimiento = $("#fecNacimiento").val();
    let foto = $("#foto").val();
    let sexo = $("#sexo").val();
    let especialidad = $("#especialidad").val();
    let ciudad = $("#ciudad").val();
    let telefono = $("#telefono").val();
    let email = $("#email").val();
    let idgrado = $("#idgrado").val();

    $.ajax({
      type: "POST",
      url: `http://${host}/colegioAdmin/maestros/insertarMaestros/`,
      data: {
        idmaestro, nombre, apellidos, fecNacimiento, foto, 
        sexo, especialidad, ciudad, telefono, email, idgrado
      },
      success: function (response) {
        alert("Ingresado correctamente");
        listaMaestros();
      },
      error: function (error) {
        console.log("Error al insertar el maestro:", error);
      },
    });
  });
}

// Espacio para Maestros_Detalle

$(document).ready(function () {
  listarDetalles();
  eliminarDetalles();
  insertarDetalles();
});


function listarDetalles() {
    $.ajax({
      type: "GET",
      url: `http://${host}/colegioAdmin/maestros/listarDetalles`, 
      success: function (response) {
        let datosd = JSON.parse(response);
        let html = "";
        datosd.forEach((element) => {
          html += `
                <tr mostrandoId="${element.idmaestro_detalle}" id="${element.idmaestro_detalle}">
                    <td>${element.idmaestro_detalle}</td>
                    <td>${element.idmaestro}</td>
                    <td>${element.acercade}</td>
                    <td><button class="button alert eliminarDetalles" style="border-radius: 8px;">Eliminar</button></td>
                </tr>`;
        });
        $("#maestros").html(html); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
}

function eliminarDetalles() {
    $(document).on("click", ".eliminarDetalles", function () { 
      let id = $(this).closest("tr").attr("id"); 
      $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/maestros/eliminarDetalles`, 
        data: { id }, 
        success: function (response) {
          alert("Eliminado correctamente");
          listarDetalles(); 
        },
        error: function (error) { 
          console.log("Error sl eliminar detalles:" + error);
        },
      });
    });
}

function insertarDetalles() {
  $(document).on("click", "#insertarDetalles", function (){
    let idmaestro_detalle = $("#idmaestro_detalle").val(); 
    let idmaestro = $("#idmaestro").val(); 
    let acercade = $("#acercade").val(); 
    $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/maestros/insertarDetalles`, 
        data: { idmaestro_detalle, idmaestro, acercade }, 
        success: function (response) {
            alert("Creado correctamente");
            listarDetalles(); 
        },
        error: function (error) {
            console.log("error:" + error);
        },
    });
  });
}