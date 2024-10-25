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

    public function InsertarMaestro($idmaestro, $nombre, $apellidos, $fecNacimiento, $foto, $sexo, $especialidad, $ciudad, $telefono, $email, $idgrado) {
        $query = "INSERT INTO maestros (idmaestro, nombre, apellidos, fecNacimiento, foto, sexo, especialidad, ciudad, telefono, email, idgrado) 
                VALUES ('$idmaestro','$nombre', '$apellidos', '$fecNacimiento', '$foto',$sexo', '$especialidad', '$ciudad', '$telefono', '$email', '$idgrado');";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    public function EliminarMaestro($idmaestro) {
        $query = "DELETE FROM maestros WHERE idmaestro = '$idmaestro';";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    
}
?>