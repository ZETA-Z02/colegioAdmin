<?php
class Estudiantes extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function render() {
        $this->view->render('estudiantes/index');
    }
    public function renderRegistrar(){
        $this->view->render('estudiantes/registraralumno');
    }


    // Registrar alumno
    function RegistrarEstudiantes() {
        $idalumno = $_GET['idalumno'];
        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        $codigo = $_GET['codigo'];
        $fecNacimiento = $_GET['fecNacimiento'];
        $foto = $_FILES['foto'];
        $ciudad = $_GET['ciudad'];
        $telefono = $_GET['telefono'];
        $email = $_GET['email'];
        $nombrepadre = $_GET['nombrepadre'];
        $telefonopadre = $_GET['telefonopadre'];
        $emailpadre = $_GET['emailpadre'];

        $res = $this->model->RegistrarEstudiantes($idalumno, $nombre, $apellidos, $codigo, $fecNacimiento, $foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre,$emailpadre);
        if(!empty($res))
         {
           $msg = "Inscripción exitosa";
         } else {
            $msg = "Error al inscribir";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/registraralumno');
    }

    function ResgitAlumno (){
        $this->view->render('estudiantes/registraralumno');
    }

    // Inscribir alumno
    function InscribirAlumno() {
        $idIalumnos =$_GET['idIalumnos'];
        $idcurso =$_GET['idcurso'];
        $idalumno =$_GET['idalumno'];
        $idturno =$_GET['idturno'];
        $idsalon =$_GET['idsalon'];
        $idhorario =$_GET['idhorario'];
        $feccreate =$_GET['feccrerate'];
        $fecmodific=$_GET['fecmodific'];
        
        
        $res = $this->model->InscribirAlumno($idIalumnos, $idcurso, $idalumno, $idturno, $idsalon, $idhorario, $feccreate, $fecmodific);
        if(!empty($res))
        {
            $msg = "Inscripción exitosa";
        } else {
            $msg = "Error al inscribir";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/inscribir');
    }

    function IAlumnos (){
        $res = $this->model->listcursos();
		$this->view->data = $res;
        $this->view->render('estudiantes/inscribiralumno');
    }


    // Asignar alumno a salón
    function AsignarSalon() {
       $idgrados=$_GET['idgrados'];
       $idAlumno=$_GET['idAlumno'];
       $idTurno=$_GET['idTurno'];
       $idseccion=$_GET['idseccion'];
       $idsalon=$_GET['idsalon'];
       $idmaestro=$_GET['idmaestro'];
       $idpersonal=$_GET['idpersonal'];
       $feccrerate=$_GET['feccrerate'];
       $fecmodific=$_GET['fecmodific'];
        
        $respuesta = $this->model->AsignarSalon($idgrados,$idAlumno,$idTurno,$idseccion,$idsalon,$idmaestro,$idpersonal,$feccrerate,$fecmodific) ;
        if(!empty($respuesta))
        {
            $msg = "Asignación exitosa";
        } else {
            $msg = "Error al asignar";
        }
        $this->view->mensaje = $msg;
        $this->view->render('estudiantes/index');
    }

    function Asalon()
	{
        $res = $this->model->listTurno();
		$this->view->T1= $res;
        
        $res = $this->model->listgrado();
        $this->view->T2= $res;

        $res = $this->model->listseccion();
        $this->view->T3 = $res;

        $res = $this->model->listsalon();
        $this->view->T4 = $res;

        $res = $this->model->listmaestro();
        $this->view->T5 = $res;

        $res = $this->model->listadministrativos();
        $this->view->T6 = $res;
        
        $this->view->render('estudiantes/asignarsalon');
        
    }

    // Ver información del alumno
    function InformacionAlumno() {
        $idAlumno = $_POST['idAlumno'];
        $idCurso = $_POST['idCurso'];
        $idSalon = $_POST['idSalon'];
        $idmaestro = $_POST['idmaestro'];

        $res = $this->model->ObtenerInformacionAlumno($idAlumno,$idCurso,$idSalon,$idmaestro);
        if ($res) {
            $this->view->data = $res;
        } else {
            $this->view->data = "No se encontró información del alumno.";
        }
        $this->view->render('estudiantes/informacion');
    }

    function InfoAlumnos(){
        $this->view->render('estudiantes/informacionalumno');
    }

    // Configuración de mensajes
    function ConfiguracionMensaje() {
        $mensaje = $_POST['mensaje'];
        
        if ($this->model->GuardarMensaje($mensaje)) {
            $msg = "Configuración guardada";
        } else {
            $msg = "Error al guardar configuración";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/configuracion');
    }


    // Escribirse a cursos
    function EscribirseCurso() {
        $idAlumno = $_POST['idAlumno'];
        $idCurso = $_POST['idCurso'];
        
        if ($this->model->EscribirseCurso($idAlumno, $idCurso)) {
            $msg = "Inscripción al curso exitosa";
        } else {
            $msg = "Error al inscribirse al curso";
        }
        $this->view->data = $msg;
        $this->view->render('estudiantes/escribirse');
    }
}
?>
