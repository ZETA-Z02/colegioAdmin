var host = "localhost";

$(document).ready(function () {
  listhorario();
  eliminarH();
});


function listhorario() {
    $.ajax({
      type: "GET",
      url: `http://${host}/colegioAdmin/horarios/lishorario`,
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

  function eliminarH() {
    $(document).on("click", "#eliminarh", function () {
      let id = $(this).parent().parent().attr("id");
      $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/horarios/deleteH/`,
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