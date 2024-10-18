<?php

class EstudiantesModel extends Model {
    function __construct() {
        parent::__construct();
    }

    //REGISTRAR ALUMNO
    function RegistrarEstudiantes($idalumno, $nombre, $apellidos, $codigo, $fecNacimiento, $foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre,$emailpadre) {
        $sql = "INSERT INTO 'colegio'.'alumnos' 
                VALUES ('$idalumno', '$nombre', '$apellidos', '$codigo', '$fecNacimiento', '$foto', '$ciudad', '$telefono', '$email', '$nombrepadre', '$telefonopadre','$emailpadre');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    //INSCRIBIR ALUMNO
    function InscribirAlumno($idIalumnos, $idcurso, $idalumno, $idturno, $idsalon, $idhorario, $feccreate, $fecmodific) {
        $sql = "INSERT INTO 'colegio'.'alumnos_inscripcion' VALUES ('$idIalumnos', '$idcurso', '$idalumno', '$idturno', '$idsalon', '$idhorario', '$feccreate', '$fecmodific');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
    
    function listcursos(){
        $sql = "SELECT idcurso, curso FROM colegio_cursos;";
        $res = $this->conn->ConsultaCon($sql);
        return $res; 
    }



    //ASIGNAR SALON A ALUMNO
    function AsignarSalon( $idgrados,$idAlumno,$idTurno,$idseccion,$idsalon,$idmaestro,$idpersonal,$feccrerate,$fecmodific) {
        $sql = "INSERT INTO asignaciones_salon VALUES (null, '$idgrados','$idAlumno','$idTurno','$idseccion','$idsalon','$idmaestro','$idpersonal','$feccrerate','$fecmodific');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    function listTurno(){
        $sql = "SELECT idturno, turno FROM colegio_turno;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function listSalon(){
        $sql = "SELECT idseccion, seccion FROM colegio_seccion;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    //OBTENER INFORMACION DEL  ALUMNO

    function ObtenerInformacionAlumno($idAlumno,$idCurso,$idSalon,$idmaestro) {

        #SELECT * FROM alumnos WHERE codigo = '$codigo';
        $sql = "SELECT * FROM alumnos WHERE idAlumno = '$idAlumno', '$idCurso','$idSalon','$idmaestro';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    
    // Guardar configuración de mensaje
    function GuardarMensaje($mensaje) {
        $sql = "UPDATE configuracion_mensajes SET mensaje = '$mensaje' WHERE id = 1;";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    // Escribirse a curso
    function EscribirseCurso($idAlumno, $idCurso) {
        $sql = "INSERT INTO cursos_inscripciones (idAlumno, idCurso) VALUES ('$idAlumno', '$idCurso');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
} 
}
?>
