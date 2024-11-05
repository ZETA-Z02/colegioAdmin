<?php
class Maestros extends Controller {
    function __construct() {
        parent::__construct();
    }

    // Método principal para renderizar la vista index
    public function render() {
        try {
            $datos = $this->model->listaMaestros();
            $datosd = $this->model->listarDetalles();
            $this->view->datos = $datos;
            $this->view->datosd = $datosd;
            $this->view->render('maestros/index');
        } catch (Exception $e) {
            // Manejar el error si es necesario
            echo "Error: " . $e->getMessage();
        }
    }

    // Métodos para renderizar vistas específicas
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
                    "foto" => $row['foto'],
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
        header('Access-Control-Allow-Origin: *');
        try {
            if (isset($_POST['idmaestro']) && 
                isset($_POST['nombre']) && 
                isset($_POST['apellidos']) && 
                isset($_POST['fecNacimiento']) && 
                isset($_POST['foto']) && 
                isset($_POST['sexo']) && 
                isset($_POST['especialidad']) && 
                isset($_POST['ciudad']) && 
                isset($_POST['telefono']) && 
                isset($_POST['email']) && 
                isset($_POST['idgrado'])) {

                $idmaestro = filter_var($_POST['idmaestro'], FILTER_SANITIZE_NUMBER_INT);
                $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
                $apellidos = filter_var($_POST['apellidos'], FILTER_SANITIZE_STRING);
                $fecNacimiento = filter_var($_POST['fecNacimiento'], FILTER_SANITIZE_STRING);
                $foto = filter_var($_POST['foto'], FILTER_SANITIZE_URL);
                $sexo = filter_var($_POST['sexo'], FILTER_SANITIZE_STRING);
                $especialidad = filter_var($_POST['especialidad'], FILTER_SANITIZE_STRING);
                $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
                $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $idgrado = filter_var($_POST['idgrado'], FILTER_SANITIZE_NUMBER_INT);
    
                if ($this->model->insertarMaestros($idmaestro, $nombre, $apellidos, 
                    $fecNacimiento, $foto, $sexo, $especialidad, $ciudad, 
                    $telefono, $email, $idgrado)) {
                    echo json_encode(["status" => "success"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al insertar"]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Datos incompletos"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }

    public function eliminarMaestros() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        try {
            if (isset($_POST['idmaestro'])) {
                $idmaestro = filter_var($_POST['idmaestro'], FILTER_SANITIZE_NUMBER_INT);
    
                if ($this->model->eliminarMaestros($idmaestro)) {
                    echo json_encode(["status" => "success"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al eliminar"]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "ID no proporcionado"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }

    // Métodos para Detalles de Maestros
    public function listarDetalle() {
        $this->view->render('maestros/listarDetalles');
    }

    public function insertarDetalle() {
        $this->view->render('maestros/insertarDetalles');
    }

    public function eliminarDetalle() {
        $this->view->render('maestros/eliminarDetalles');
    }

    public function listarDetalles() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        try {
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
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error al obtener detalles"]);
        }
    }

    public function insertarDetalles() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        try {
            if (isset($_POST['idmaestro_detalle']) && 
                isset($_POST['idmaestro']) && 
                isset($_POST['acercade'])) {

                $idmaestro_detalle = filter_var($_POST['idmaestro_detalle'], FILTER_SANITIZE_NUMBER_INT);
                $idmaestro = filter_var($_POST['idmaestro'], FILTER_SANITIZE_NUMBER_INT);
                $acercade = filter_var($_POST['acercade'], FILTER_SANITIZE_STRING);

                if ($this->model->insertarDetalles($idmaestro_detalle, $idmaestro, $acercade)) {
                    echo json_encode(["status" => "success"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al insertar detalle"]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "Datos incompletos"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }

    public function eliminarDetalles() {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        try {
            if (isset($_POST['id'])) {
                $idmaestro_detalle = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

                if ($this->model->eliminarDetalles($idmaestro_detalle)) {
                    echo json_encode(["status" => "success"]);
                } else {
                    echo json_encode(["status" => "error", "message" => "Error al eliminar detalle"]);
                }
            } else {
                echo json_encode(["status" => "error", "message" => "ID no proporcionado"]);
            }
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Error en el servidor"]);
        }
    }
}





?>