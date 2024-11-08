<?php

class EstudiantesModel extends Model {
    function __construct() {
        parent::__construct();
    }

    //REGISTRAR ALUMNO
    function RegistrarEstudiantes( $nombre, $apellidos, $codigo, $fecNacimiento, $foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre,$emailpadre) {
        $sql = "INSERT INTO `colegio`.`alumnos` (`nombre`, `apellidos`, `codigo`, `fecNacimiento`, `foto`, `ciudad`, `telefono`, `email`, `nombrepadre`, `telefonopadre`, `emailpadre`) 
                VALUES ('$nombre', '$apellidos', '$codigo', '$fecNacimiento', ' $foto', '$ciudad', '$telefono', '$email', '$nombrepadre', '$telefonopadre', '$emailpadre');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    //INSCRIBIR ALUMNO
    function InscribirAlumno($idcurso,$idalumno,$idmaestro,$idturno,$idsalon,$idhorario,$idpersonal,$feccreate,$fecmodific) {
        $sql = "INSERT INTO colegio . alumnos_inscripcion 
                    VALUES (null,'$idcurso','$idalumno','$idmaestro','$idturno','$idsalon','$idhorario','$idpersonal','$feccreate','$fecmodific');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
    
    function listcursos(){
        $sql = "SELECT idcurso, curso FROM colegio_cursos;";
        $res = $this->conn->ConsultaCon($sql);
        return $res; 
    }

    function listTurno1(){
        $sql = "SELECT idturno, turno FROM colegio.colegio_turno;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listsalon1(){
        $sql = "SELECT * FROM colegio.colegio_salon;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listhorarios (){
        $sql = "SELECT idhorario, horario FROM colegio.colegio_horario;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listpersonaladm (){
        $sql = "SELECT idadministrativo, nombre , apellidos FROM administrativo";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listmaestro1(){
        $sql = "SELECT idmaestro, nombre ,apellidos FROM colegio.maestros;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }


    //ASIGNAR SALON A ALUMNO
    function AsignarSalon( $idgrados,$idAlumno,$idTurno,$idseccion,$idsalon,$idmaestro,$idpersonal,$feccrerate,$fecmodific) {
        $sql = "INSERT INTO asignaciones_salon VALUES (null, '$idgrados','$idAlumno','$idTurno','$idseccion','$idsalon','$idmaestro','$idpersonal','$feccrerate','$fecmodific');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    function listgrado(){
        $sql = "SELECT idgrado, grado FROM colegio.colegio_grado;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }
    
    function listTurno(){
        $sql = "SELECT idturno, turno FROM colegio.colegio_turno;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listseccion(){
        $sql = "SELECT idseccion, seccion FROM colegio.colegio_seccion;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listsalon(){
        $sql = "SELECT * FROM colegio.colegio_salon;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listmaestro(){
        $sql = "SELECT idmaestro, nombre ,apellidos FROM colegio.maestros;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listadministrativos (){
        $sql = "SELECT idadministrativo, nombre , apellidos FROM administrativo";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    //OBTENER INFORMACION DEL  ALUMNO

    function ObtenerInformacionAlumno() {
        $sql = "SELECT * FROM alumnos ;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    function detallealumno($idAlumno){
        $sql = "SELECT * FROM alumnos where idalumno = $idAlumno ;";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }

    
    // Guardar configuración de mensaje
    function GuardarMensaje($mensaje) {
        $sql = "UPDATE configuracion_mensajes SET mensaje = '$mensaje' WHERE id = 1;";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

}
?>
