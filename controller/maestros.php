<?php
Class Maestros extends Controller{
    function __construct(){
        parent::__construct();
    }

    public function render(){
        $datos = $this->model->ListaMaestros();
        $this->view->data = $datos;
        $this->view->Render('maestros/index');
    }

    public function insertarmaestro(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $especialidad = $_POST['especialidad'];

            $this->model->insertarMaestro($nombre, $apellidos, $especialidad);
            header('Location: ' . constant('URL') . 'maestros');
        } else {
            $this->view->Render('maestros/insertarmaestro');
        }
    }

    public function eliminarmaestro(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $idmaestro = $_POST['idmaestro'];

            $this->model->eliminarMaestro($idmaestro);
            header('Location: ' . constant('URL') . 'maestros');
        } else {
            $this->view->Render('maestros/eliminarmaestro');
        }
    }

    public function listamaestro(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $filtro = $_GET['filtro'];

            $datos = $this->model->ListaMaestros($filtro);
            $this->view->data = $datos;
            $this->view->Render('maestros/listamaestro');
        } else {
            $this->view->Render('maestros/listamaestro');
        }
    }
}
?>