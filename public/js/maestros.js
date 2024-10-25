var host = "localhost";

$(document).ready(function () {
  listaMaestros();
  eliminarMaestros();
  insertarMaestro();
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
                  <td><button class="button alert" id="eliminarMaestro" style="border-radius: 8px;">Eliminar</button></td>
              </tr>`;
      });
      $("#maestros").html(html); 
    },
    error: function (error) {
      console.log("error:" + error);
    },
  });
}

function eliminarMaestros() {
  $(document).on("click", "#eliminarMaestro", function () {
    let idmaestro = $(this).parent().parent().attr("idmaestro");
    $.ajax({
      type: "POST",
      url: `http://${host}/colegioAdmin/maestros/eliminarMaestro/`,
      datos: { idmaestro },
      success: function (response) {

        alert("Eliminado correctamente");
        listaMaestros();
      },
      error: function (error) { 

        console.log("error:" + error);
      },
    });
  });
}

function insertarMaestro() {
  $(document).on("click", "#insertarMaestro", function () {
    let idmaestro =$("#idmaestro").val();
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
      url: `http://${host}/colegioAdmin/maestros/insertarMaestro/`,
      datos: { idmaestro, nombre, apellidos, fecNacimiento, foto, sexo, especialidad, ciudad, telefono, email, idgrado },
      success: function (response) {

        alert("Ingresado correctamente");
        listaMaestros();
      },
      error: function (error) { 

        console.log("error:" + error);
      },
    });
  });
}