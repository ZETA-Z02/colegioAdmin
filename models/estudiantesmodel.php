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


    function InscribirAlumno($idAlumno, $idCurso,$idSalon) {
        $sql = "INSERT INTO inscripciones (idAlumno, idCurso, idSalon) VALUES ('$idAlumno', '$idCurso','$idSalon');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

 
    function AsignarSalon($idAlumno, $idSalon) {
        $sql = "INSERT INTO asignaciones_salon (idAlumno, idSalon) VALUES ('$idAlumno', '$idSalon');";
        $res = $this->conn->ConsultaSin($sql);
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
