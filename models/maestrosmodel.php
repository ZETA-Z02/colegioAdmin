<?php
Class MaestrosModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function ListaMaestros($filtro = null){
        if ($filtro) {
            $sql = "SELECT * FROM maestros WHERE nombre LIKE '%$filtro%' OR apellidos LIKE '%$filtro%' OR especialidad LIKE '%$filtro%'";
        } else {
            $sql = "SELECT * FROM maestros";
        }
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    public function insertarMaestro($nombre, $apellidos, $especialidad){
        $sql = "INSERT INTO maestros (nombre, apellidos, especialidad) VALUES ('$nombre', '$apellidos', '$especialidad')";
        $this->conn->ConsultaSin($sql);
    }

    public function eliminarMaestro($idmaestro){
        $sql = "DELETE FROM maestros WHERE idmaestro = '$idmaestro'";
        $this->conn->ConsultaSin($sql);
    }
}
?>