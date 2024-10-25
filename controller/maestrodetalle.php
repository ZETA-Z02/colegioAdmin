<?php
class MaestrosDetalle extends Controller {
    function __construct() {
        parent::__construct();
    }

    public function render() {
        $this->view->Render('maestros/index');
    }

    public function maestrodetalle() {
        $this->view->Render('maestros/maestrodetalle');
    }

    //Agregando funciones para el maestros_detalle
    public function LisMaestrosDetalle() {
        $datosd = $this->model->listarDetalles();
        $json = array();

        while ($row = mysqli_fetch_assoc($datosd)) {
            $json[] = array(
                "idmaestro_detalle" => $row['idmaestro_detalle'],
                "idmaestro" => $row['idmaestro'],
                "acercade" => $row['acercade']
            );
        }
        echo json_encode($json);
    }

    public function CrearMaestroDetalle() {
        $idmaestro_detalle = $_POST['idmaestro_detalle'];
        $idmaestro = $_POST['idmaestro'];
        $acercade = $_POST['acercade'];

        if ($this->model->insertarDetalle($idmaestro_detalle, $idmaestro, $acercade)) {
            $msg = "EXITOSO";
            $this->view->datosd = $msg;
            $this->view->Render('maestros/index');
        } else {
            $msg = "ERROR";
            $this->view->datosd = $msg;
            $this->view->Render('maestros/insertarDetalle');
        }
    }

    public function EliminarMaestroDetalle() {
        $idmaestro_detalle = $_POST['idmaestro_detalle'];

        if ($this->model->eliminarDetalle($idmaestro_detalle)) {
            echo "EXITO AL ELIMINAR DETALLE";
        } else {
            echo "ERROR AL ELIMINAR DETALLE";
        }
    }
}


?>