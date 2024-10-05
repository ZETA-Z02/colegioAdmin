var host = "localhost";

$(document).ready(function () {
  listMaestros();
  eliminarM();
  postIngresoM();
});

function listMaestros() {
  $.ajax({
    type: "GET",
    url: `http://${host}/colegioAdmin/maestros/listamaestros`,
    success: function (response) {
      let data = JSON.parse(response);
      let html = "";
      data.forEach((element) => {
        html += `
              <tr mostrandoId="${element.idmaestro}" id="${element.idmaestro}">
                  <td>${element.idmaestro}</td>
                  <td>${element.nombre} ${element.apellidos}</td>
                  <td>${element.fecNacimiento}</td>
                  <td>${element.sexo}</td>
                  <td>${element.especialidad}</td>
                  <td>${element.ciudad}</td>
                  <td>${element.telefono}</td>
                  <td>${element.email}</td>
                  <td><button class="button alert" id="eliminarM" style="border-radius: 8px;">Eliminar</button></td>
              </tr>`;
      });
      $("#maestros").html(html); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function eliminarM() {
  $(document).on("click", "#eliminarM", function () {
    let id = $(this).parent().parent().attr("id");
    $.ajax({
      type: "POST",
      url: `http://${host}/colegioAdmin/maestros/deletemaestro/`,
      data: { id },
      success: function (response) {

        alert("Eliminado correctamente");
        listMaestros();
      },
      error: function (error) { 

        console.log("error:" + error);
      },
    });
  });
}

function postIngresoM() {
  $(document).on("click", "#ingresarM", function () {
    let nombre = $("#nombre").val();
    let apellidos = $("#apellidos").val();
    let fecNacimiento = $("#fecNacimiento").val();
    let sexo = $("#sexo").val();
    let especialidad = $("#especialidad").val();
    let ciudad = $("#ciudad").val();
    let telefono = $("#telefono").val();
    let email = $("#email").val();

    $.ajax({
      type: "POST",
      url: `http://${host}/colegioAdmin/maestros/insertarmaestro/`,
      data: { nombre, apellidos, fecNacimiento, sexo, especialidad, ciudad, telefono, email },
      success: function (response) {

        alert("Ingresado correctamente");
        listMaestros();
      },
      error: function (error) { 

        console.log("error:" + error);
      },
    });
  });
}