<?php
Class Horariosmodel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function ListarHorario(){
        $sql = "select * from colegio_horario; ";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    function insertHorario($horario, $status)
    {
        $sql = "INSERT INTO colegio_horario (horario, status) VALUES ('$horario', $status);";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    public function Deletehorario($id)
    {
        $sql = "DELETE FROM `colegio_horario` WHERE (`idhorario` = '$id');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }   
}
?>