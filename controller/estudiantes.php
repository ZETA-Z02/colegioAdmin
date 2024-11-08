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

        // $res = $this->model->RegistrarEstudiantes($idalumno, $nombre, $apellidos, $codigo, $fecNacimiento, $foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre,$emailpadre);
        // if(!empty($res))
        //  {
        //    $msg = "Inscripción exitosa";
        //  } else {
        //     $msg = "Error al inscribir";
        // }
        // $this->view->data = $msg;
        // $this->view->render('estudiantes/registraralumno');
		//$res = $this->Foto($foto,$nombre,$codigo);
		// if($res==false){
		// 	$foto = "sin foto";
		// }
        $foto = "sin foto";
		if($this->model->RegistrarEstudiantes( $nombre, $apellidos, $codigo, $fecNacimiento,$foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre,$emailpadre)){
			echo $this->model->conn->conn->insert_id;
		}else{
			echo "ERROR AL INSERTAR";
		}
    }

    function ResgitAlumno (){
        $this->view->render('estudiantes/registraralumno');
    }

    // Inscribir alumno
    function InscribirAlumno() {
        $idcurso =$_GET['idcurso'];
        $idpersonal=$_GET['idpersonal'];
        $idmaestro = $_GET['idmaestro'];
        $idalumno =$_GET['idalumno'];
        $idturno =$_GET['idturno'];
        $idsalon =$_GET['idsalon'];
        $idhorario =$_GET['idhorario'];
        $feccreate =$_GET['feccrerate'];
        $fecmodific=$_GET['fecmodific'];
        
        
        $res = $this->model->InscribirAlumno($idcurso,$idalumno,$idmaestro,$idturno,$idsalon,$idhorario,$idpersonal,$feccreate,$fecmodific);
        if(!empty($res))
        {
            $msg = "Inscripción exitosa";
        } else {
            $msg = "Error al inscribir";
        }
        $this->view->mensaje1 = $msg;
        $this->view->render('estudiantes/index');
    }

    function IAlumnos (){
        $res = $this->model->listcursos();
		$this->view->T1 = $res;

        $res = $this->model->listTurno1();
        $this->view->T2 = $res;

        $res = $this->model->listsalon1();
        $this->view->T3 = $res;

        $res = $this->model->listhorarios();
        $this->view->T4 = $res;

        $res = $this->model->listpersonaladm();
        $this->view->T5 = $res;

        $res = $this->model->listmaestro1();
        $this->view->T6 = $res;


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

    function InfoAlumnos(){
        $datos = $this->model->ObtenerInformacionAlumno();
        $this->view->data = $datos;


        $this->view->render('estudiantes/informacionalumno');
    }

    function detallealumno ($nparametro= null){
        $idAlumno = $nparametro[0];
        $data = $this->model->detallealumno($idAlumno);
        $this->view->data = $data;
        $this->view->render('estudiantes/infoalumno');
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
}
?>
