<?php
class estudiantes extends Controller {

    function __construct()
	{
		parent::__construct();
	}

    public function render(){
        $this->view->render('estudiantes/index');
    }

    function RegistrarEstudiantes(){
        
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $foto = $_POST['foto'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $telefonoPadre = $_POST['telefonopadre'];
        $nombrepadre = $_POST['nombrepadre'];
        $emailpadre = $_POST['emailpadre'];


        $this->model->RegistrarEstudiantes($nombre, $apellidos, $edad,$email,$telefono,$direccion,$ciudad,$foto,$fechaNacimiento,$telefonoPadre,$nombrepadre,$emailpadre);        
    }
    
    

    




}