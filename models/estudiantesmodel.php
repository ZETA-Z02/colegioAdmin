<?php

class estudiantesModel extends Model{
    function __construct(){
        parent::__construct();
    }

    function RegistrarEstuiante($nombre, $apellidos, $fecNacimiento, $foto, $ciudad, $telefono, $email, $nombrepadre, $telefonopadre, $emailpadre ){
        $sql = "INSERT INTO alumnos (nombre, apellidos, fecNacimiento, foto, ciudad, telefono, email, nombrepadre, telefonopadre, emailpadre) 
            VALUES ('$nombre', '$apellidos', '$fecNacimiento', '$foto', '$ciudad', '$telefono', '$email', '$nombrepadre', '$telefonopadre', '$emailpadre');";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
 
    
}