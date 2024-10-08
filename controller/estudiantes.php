<?php
class Estudiantes extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function render() {
        $this->view->render('estudiantes/index');
    }

    // Registrar alumno
    function RegistrarEstudiantes() {
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

        $this->model->RegistrarEstudiantes($nombre, $apellidos, $edad, $email, $telefono, $direccion, $ciudad, $foto, $fechaNacimiento, $telefonoPadre, $nombrepadre, $emailpadre);
    }

    // Inscribir alumno
    function InscribirAlumno() {
        $idAlumno = $_POST['idAlumno'];
        $idCurso = $_POST['idCurso'];
        
        if ($this->model->InscribirAlumno($idAlumno, $idCurso)) {
            $msg = "Inscripción exitosa";
        } else {
            $msg = "Error al inscribir";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/inscribir');
    }

    // Asignar alumno a salón
    function AsignarSalon() {
        $idAlumno = $_POST['idAlumno'];
        $idSalon = $_POST['idSalon'];
        
        if ($this->model->AsignarSalon($idAlumno, $idSalon)) {
            $msg = "Asignación exitosa";
        } else {
            $msg = "Error al asignar";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/asignarsalon');
    }

    // Ver información del alumno
    function InformacionAlumno() {
        $idAlumno = $_POST['idAlumno'];
        $res = $this->model->ObtenerInformacionAlumno($idAlumno);
        
        if ($res) {
            $this->view->data = $res;
        } else {
            $this->view->data = "No se encontró información del alumno.";
        }
        $this->view->render('estudiantes/informacion');
    }

    // Configuración de mensajes
   // function ConfiguracionMensaje() {
    //    $mensaje = $_POST['mensaje'];
        
     //   if ($this->model->GuardarMensaje($mensaje)) {
    //        $msg = "Configuración guardada";
     //   } else {
    //        $msg = "Error al guardar configuración";
    //    }
    //    $this->view->data = $msg;
   //     $this->view->render('estudiantes/configuracion');
   // }

    // Escribirse a cursos
   // function EscribirseCurso() {
   //     $idAlumno = $_POST['idAlumno'];
   //     $idCurso = $_POST['idCurso'];
   //     
  //      if ($this->model->EscribirseCurso($idAlumno, $idCurso)) {
     //       $msg = "Inscripción al curso exitosa";
   //     } else {
    //        $msg = "Error al inscribirse al curso";
   //     }
   //     $this->view->data = $msg;
    //    $this->view->render('estudiantes/escribirse');
   // }
}
?>
