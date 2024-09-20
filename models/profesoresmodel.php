<?php
Class ProfesoresModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function listaDocentes(){
        $sql = "SELECT * FROM docentes;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}
?>