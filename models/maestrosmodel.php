<?php
class MaestrosModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function ListaMaestros() {
        $query = "SELECT * FROM maestros;";
        $datos = $this->conn->ConsultaCon($query);
        return $datos;
    }

    public function InsertarMaestros($idmaestro, $nombre, $apellidos, $fecNacimiento, $foto, $sexo, $especialidad, $ciudad, $telefono, $email, $idgrado) {
        $query = "INSERT INTO maestros (idmaestro, nombre, apellidos, fecNacimiento, foto, sexo, especialidad, ciudad, telefono, email, idgrado) 
                VALUES ('$idmaestro','$nombre', '$apellidos', '$fecNacimiento', '$foto',$sexo', '$especialidad', '$ciudad', '$telefono', '$email', '$idgrado');";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    public function EliminarMaestros($idmaestro) {
        $query = "DELETE FROM maestros WHERE idmaestro = '$idmaestro';";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    public function ListarDetalles() {
        $query = "SELECT * FROM maestros_detalle;";
        $datosd = $this->conn->ConsultaCon($query);
        return $datosd;
    }

    public function InsertarDetalles($idmaestro_detalle, $idmaestro, $acercade) {
        $query = "INSERT INTO maestros_detalle (idmaestro_detalle, idmaestro, acercade) 
                VALUES ('$idmaestro_detalle', '$idmaestro', '$acercade');";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    public function EliminarDetalles($idmaestro_detalle) {
        $query = "DELETE FROM maestros_detalle WHERE idmaestro_detalle = '$idmaestro_detalle';";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }
    
}




?>