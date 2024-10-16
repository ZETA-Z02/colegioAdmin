<?php

class estudiantesModel extends Model {
    function __construct() {
        parent::__construct();
    }


    function RegistrarEstuiante($nombre, $apellidos, $edad, $email, $telefono, $direccion, $ciudad, $foto, $fecNacimiento, $telefonopadre, $nombrepadre, $emailpadre) {
        $sql = "INSERT INTO alumnos (nombre, apellidos, edad, email, telefono, direccion, ciudad, foto, fecNacimiento, telefonopadre, nombrepadre, emailpadre) 
            VALUES ('$nombre', '$apellidos', '$edad', '$email', '$telefono', '$direccion', '$ciudad', '$foto', '$fecNacimiento', '$telefonopadre', '$nombrepadre', '$emailpadre');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }


    function InscribirAlumno($codigo,$idAlumno, $idCurso,$idSalon) {
        $sql = "INSERT INTO inscripciones (codigo, idAlumno, idCurso, idSalon) VALUES ('$codigo','$idAlumno', '$idCurso','$idSalon');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
    
    function listcursos(){
        $sql = "SELECT idcurso, curso FROM colegio_cursos;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }



 
    function AsignarSalon($codigo,$idAlumno, $idSalon, $idturno) {
        $sql = "INSERT INTO asignaciones_salon (idAlumno, codigo, idSalon,idturno) VALUES ('$idAlumno','$codigo', '$idSalon, $idturno');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }
    
    function listTurno(){
        $sql = "SELECT idturno, turno FROM colegio_turno;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }


    function ObtenerInformacionAlumno($idAlumno,$idCurso,$idSalon,$idmaestro) {
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
