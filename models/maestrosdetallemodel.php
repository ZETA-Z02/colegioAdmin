<?php
class MaestrosDetalleModel extends Model {
    public function __construct() {
        parent::__construct();
    }

    // Funciones para maestros_detalle
    public function LisMaestroDetalle() {
        $query = "SELECT * FROM maestros_detalle;";
        $datosd = $this->conn->ConsultaCon($query);
        return $datosd;
    }

    public function CrearMaestroDetalle($idmaestro_detalle, $idmaestro, $acercade) {
        $query = "INSERT INTO maestros_detalle (idmaestro_detalle, idmaestro, acercade) 
                VALUES ('$idmaestro_detalle', '$idmaestro', '$acercade');";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }

    public function EliminarMaestroDetalle($idmaestro_detalle) {
        $query = "DELETE FROM maestros_detalle WHERE idmaestro_detalle = '$idmaestro_detalle';";
        $res = $this->conn->ConsultaSin($query);
        return $res;
    }
}


?>