<?php
class Maestros extends Controller {
    function __construct() {
        parent::__construct();
    }

    public function render() {
        $this->view->Render('maestros/index');
    }

    public function maestro() {
        $this->view->Render('maestros/maestros');
    }

    public function ListaMaestros() {
        $datos = $this->model->listaMaestros();
        $json = array();

        while ($row = mysqli_fetch_assoc($datos)) {
            $json[] = array(
                "idmaestro" => $row['idmaestro'],
                "nombre" => $row['nombre'],
                "apellidos" => $row['apellidos'],
                "fecNacimiento" => $row['fecNacimiento'],
                "sexo" => $row['sexo'],
                "especialidad" => $row['especialidad'],
                "ciudad" => $row['ciudad'],
                "telefono" => $row['telefono'],
                "email" => $row['email'],
                "idgrado" => $row['idgrado']
            );
        }
        echo json_encode($json);
    }

    public function InsertarMaestro() {
        $idmaestro = $_POST['idmaestro'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $fecNacimiento = $_POST['fecNacimiento'];
        $foto = $_POST['foto'];
        $sexo = $_POST['sexo'];
        $especialidad = $_POST['especialidad'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $idgrado = $_POST['idgrado'];

        if ($this->model->insertarMaestro($idmaestro, $nombre, $apellidos, $fecNacimiento, $foto, $sexo, $especialidad, $ciudad, $telefono, $email, $idgrado)) {
            $msg = "EXITOSO";
            $this->view->datos = $msg;
            $this->view->Render('maestros/index');
        } else {
            $msg = "ERROR";
            $this->view->datos = $msg;
            $this->view->Render('maestros/insertarMaestro');
        }
    }

    public function Eliminarmaestro() {
        $idmaestro = $_POST['idmaestro'];

        if ($this->model->eliminarMaestro($idmaestro)) {
            echo "EXITO AL ELIMINAR";
        } else {
            echo "ERROR AL ELIMINAR";
        }
    }


    

}
?>