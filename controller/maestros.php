<?php
class Maestros extends Controller {
    function __construct() {
        parent::__construct();
    }

    public function render() {
        $this->view->render('maestros/index');
    }

    public function insertarMaestro() {
        $this->view->render('maestros/insertarMaestro');
    }

    public function eliminarMaestro() {
        $this->view->render('maestros/eliminarMaestros');
    }

    public function listaMaestros() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        try {
            $datos = $this->model->listaMaestros();
            $json = [];
    
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
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error al obtener datos"]);
        }
    }

    public function insertarMaestros() {
        header('Content-Type: application/json');
        try {
            if (isset($_POST['idmaestro'], $_POST['nombre'], $_POST['apellidos'], 
                     $_POST['fecNacimiento'], $_POST['foto'], $_POST['sexo'], 
                     $_POST['especialidad'], $_POST['ciudad'], $_POST['telefono'], 
                     $_POST['email'], $_POST['idgrado'])) {

                $idmaestro = filter_var($_POST['idmaestro'], FILTER_SANITIZE_NUMBER_INT);
                $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
                $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
                $fecNacimiento = filter_var($_POST['fecNacimiento'], FILTER_SANITIZE_STRING);
                $foto = filter_var($_POST['foto'], FILTER_SANITIZE_URL);
                $sexo = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
                $especialidad = filter_var($_POST['especialidad'], FILTER_SANITIZE_STRING);
                $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
                $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
                $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                $idgrado = filter_var($_POST['idgrado'], FILTER_SANITIZE_NUMBER_INT);
    
                if ($this->model->insertarMaestros($idmaestro, $nombre, $apellidos, 
                    $fecNacimiento, $foto, $sexo, $especialidad, $ciudad, 
                    $telefono, $email, $idgrado)) {
                    echo json_encode(["status" => "success", "message" => "Maestro insertado correctamente."]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al insertar el maestro."]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Faltan datos requeridos."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }

    public function eliminarMaestros() {
        header('Content-Type: application/json');
        try {
            if (isset($_POST['idmaestro'])) {
                $idmaestro = filter_var($_POST['idmaestro'], FILTER_SANITIZE_NUMBER_INT);
    
                if ($this->model->eliminarMaestros($idmaestro)) {
                    echo json_encode(["status" => "success", "message" => "Maestro eliminado correctamente."]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al eliminar el maestro."]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "ID del maestro requerido."]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }

    // Controlador para maestros detalle

    public function listarDetalle() {
        $this->view->render('maestros/listarDetalles');
    }

    public function insertarDetalle() {
        $this->view->render('maestros/insertarDetalles');
    }

    public function eliminarDetalle() {
        $this->view->render('maestros/eliminarDetalles');
    }
    public function listarDetalles() { // Cambiado a camelCase
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *'); // Permitir CORS
        
        $datosd = $this->model->listarDetalles();
        $json = [];

        while ($row = mysqli_fetch_assoc($datosd)) {
            $json[] = array(
                "idmaestro_detalle" => $row['idmaestro_detalle'],
                "idmaestro" => $row['idmaestro'],
                "acercade" => $row['acercade']
            );
        }
        echo json_encode($json);
    }

    public function insertarDetalles() { // Cambiado a camelCase
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');

        // Corregido para coincidir con los datos enviados desde el JS
        if (isset($_POST['idmaestro_detalle'], $_POST['idmaestro'], $_POST['acercade'])) {
            $idmaestro_detalle = $_POST['idmaestro_detalle'];
            $idmaestro = $_POST['idmaestro'];
            $acercade = $_POST['acercade'];

            if ($this->model->insertarDetalles($idmaestro_detalle, $idmaestro, $acercade)) {
                echo json_encode(["status" => "success", "message" => "Detalle del maestro insertado correctamente."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error al insertar el detalle del maestro."]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Faltan datos requeridos."]);
        }
    }

    public function eliminarDetalles() { // Cambiado a camelCase
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');

        // Corregido para coincidir con el dato enviado desde el JS
        if (isset($_POST['id'])) { // El JS envía 'id', no 'idmaestro_detalle'
            $idmaestro_detalle = $_POST['id'];

            if ($this->model->eliminarDetalles($idmaestro_detalle)) {
                echo json_encode(["status" => "success", "message" => "Detalle del maestro eliminado correctamente."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Error al eliminar el detalle del maestro."]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "ID del detalle del maestro requerido."]);
        }
    }
}





?>