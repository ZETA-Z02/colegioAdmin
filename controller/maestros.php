<?php
class Maestros extends Controller {
    function __construct() {
        parent::__construct();
    }

    public function render() {
        try {
            $this->view->render('maestros/index');
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function insertarMaestro() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_POST['idmaestro']) && !empty($_POST['nombre'])) {
                    $this->model->insertarMaestros(
                        $_POST['idmaestro'],
                        $_POST['nombre'],
                        $_POST['apellidos'],
                        $_POST['fecNacimiento'],
                        $_POST['foto'],
                        $_POST['sexo'],
                        $_POST['especialidad'],
                        $_POST['ciudad'],
                        $_POST['telefono'],
                        $_POST['email'],
                        $_POST['idgrado']
                    );
                    header('Location: ' . constant('URL') . 'maestros');
                    exit;
                }
            }
            $this->view->render('maestros/insertarMaestro');
        } catch (Exception $e) {
            error_log("Error en insertarMaestro: " . $e->getMessage());
            $this->view->render('maestros/insertarMaestro');
        }
    }

    public function eliminarMaestro() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_POST['idmaestro'])) {
                    if ($this->model->eliminarMaestros($_POST['idmaestro'])) {
                        header('Location: ' . constant('URL') . 'maestros');
                        exit;
                    }
                }
            }
            $this->view->render('maestros/eliminarMaestro');
        } catch (Exception $e) {
            error_log("Error en eliminarMaestro: " . $e->getMessage());
            $this->view->render('maestros/eliminarMaestro');
        }
    }

    public function index() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
                exit;
            }
            
            $datos = $this->model->listaMaestros(); 
            $this->view->datos = $datos;
            $this->view->render('maestros/index');
            
        } catch (Exception $e) {
            error_log("Error en listaMaestros: " . $e->getMessage());
            $this->view->render('maestros/index');
        }
    }

    public function insertarDetalle() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_POST['idmaestro_detalle']) && !empty($_POST['idmaestro'])) {
                    
                    $this->model->insertarDetalles(
                        $_POST['idmaestro_detalle'],
                        $_POST['idmaestro'],
                        $_POST['acercade']
                    );
                    header('Location: ' . constant('URL') . 'maestros');
                    exit;
                }
            }
            $this->view->render('maestros/insertarDetalle');
        } catch (Exception $e) {
            error_log("Error en insertarDetalle: " . $e->getMessage());
            $this->view->render('maestros/insertarDetalle');
        }
    }

    public function eliminarDetalle() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_POST['idmaestro_detalle'])) {
                    if ($this->model->eliminarDetalles($_POST['idmaestro_detalle'])) {
                        header('Location: ' . constant('URL') . 'maestros');
                        exit;
                    }
                }
            }
            $this->view->render('maestros/eliminarDetalle');
        } catch (Exception $e) {
            error_log("Error en eliminarDetalle: " . $e->getMessage());
            $this->view->render('maestros/eliminarDetalle');
        }
    }

    public function indexs() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $datosd = $this->model->listarDetalles();
                $json = [];
    
                while ($row = mysqli_fetch_assoc($datosd)) {
                    $json[] = array(
                        "idmaestro_detalle" => $row['idmaestro_detalle'],
                        "idmaestro" => $row['idmaestro'],
                        "acercade" => $row['acercade']
                    );
                }
                header('Content-Type: application/json');
                header('Access-Control-Allow-Origin: *');
                echo json_encode($json);
                exit;
            }

            $datosd = $this->model->listarDetalles(); 
            $this->view->datosd = $datosd;
            $this->view->render('maestros/index');

        } catch (Exception $e) {
            error_log("Error en listarDetalles: " . $e->getMessage());
            $this->view->render('maestros/index');
        }
    }
}