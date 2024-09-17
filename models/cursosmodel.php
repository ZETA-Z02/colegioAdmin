<?php
Class Cursosmodel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function listaCursos(){
        $sql = "SELECT * FROM colegio_cursos;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    public function listarHorarios() {
        $sql = "SELECT * FROM colegio_horario;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}
?>