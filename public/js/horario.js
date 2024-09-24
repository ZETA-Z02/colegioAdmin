var host = "localhost";

$(document).ready(function () {
  listhorario();
  listcurso();
  eliminarH();
  eliminarC();
});


function listhorario() {
    $.ajax({
      type: "GET",
      url: `http://${host}/colegioAdmin/cursos/lishorario`,
      success: function (response) {
        let data = JSON.parse(response);
        let html = "";
        data.forEach((element) => {
          html += `
                <tr mostrandoId="${element.idhorario}" id="${element.idhorario}">
                    <td>${element.idhorario}</td>
                    <td>${element.horario}</td>
                    <td><button class="button alert" id="eliminarh" style="border-radius: 8px;">Eliminar</button></td>
                </tr>`;
        });
        $("#horario").html(html); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
  }

  function listcurso() {
    $.ajax({
      type: "GET",
      url: `http://${host}/colegioAdmin/cursos/liscursos`,
      success: function (response) {
        let data = JSON.parse(response);
        let html = "";
        data.forEach((element) => {
          html += `
                <tr mostrandoId="${element.idcurso}" id="${element.idcurso}">
                    <td>${element.idcurso}</td>
                    <td>${element.curso}</td>
                    <td>${element.nombre}</td>
                    <td>${element.grado}</td>
                    <td>${element.seccion}</td>
                    <td>${element.turno}</td>
                    <td>${element.horario}</td>
                    <td><button class="button alert" id="eliminarc" style="border-radius: 8px;">Eliminar</button></td>
                </tr>`;
        });
        $("#cursos").html(html); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
  }

  function eliminarH() {
    $(document).on("click", "#eliminarh", function () {
      let id = $(this).parent().parent().attr("id");
      $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/cursos/deleteH/`,
        data: { id },
        success: function (response) {

          alert("Eliminado correctamente");
          listhorario();
        },
        error: function (error) { 

          console.log("error:" + error);
        },
      });
    });
  }

  function eliminarC() {
    $(document).on("click", "#eliminarc", function () {
      let id = $(this).parent().parent().attr("id");
      $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/cursos/deleteC/`,
        data: { id },
        success: function (response) {

          alert("Eliminado correctamente");
          listcurso();
        },
        error: function (error) { 

          console.log("error:" + error);
        },
      });
    });
  }