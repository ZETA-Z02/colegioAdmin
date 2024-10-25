var host = "localhost";

$(document).ready(function () {
  listarDetalles();
  eliminarDetalle();
  insertarDetalle();
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
                    <td><button class="button alert" id="eliminarDetalle" style="border-radius: 8px;">Eliminar</button></td>
                </tr>`;
        });
        $("#maestrosDetalle").html(html); 
      },
      error: function (error) {
        console.log("error:" + error);
      },
    });
}

function eliminarDetalle() {
    $(document).on("click", "#eliminarMaestro", function () {
      let id = $(this).parent().parent().attr("id");
      $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/maestros/eliminarDetalle`, 
        datosd: { id },
        success: function (response) {
          alert("Eliminado correctamente");
          listarDetalles(); 
        },
        error: function (error) { 
          console.log("error:" + error);
        },
      });
    });
}

function insertarDetalle() {
    let idmaestro_detalle = $("#idmaestro_detalle").val(); 
    let idmaestro = $("#idmaestro").val(); 
    let acercade = $("#acercade").val(); 
    $.ajax({
        type: "POST",
        url: `http://${host}/colegioAdmin/maestros/insertarDetalle`, 
        datosd: { idmaestro_detalle, idmaestro, acercade },
        success: function (response) {
            alert("Creado correctamente");
            listarDetalles(); 
        },
        error: function (error) {
            console.log("error:" + error);
        },
    });
}