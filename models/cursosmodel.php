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
    public function Create(){
        $sql = "consulta sql aqui";
        $response = $this->conn->ConsulaSin($sql);
        return $response;
    }
    public function Read(){
        $sql = "consulta sql aqui";
        $data = $this->conn->ConsulaCon($sql);
        return $data;
    }
    public function Update(){
        $sql = "consulta sql aqui";
        $response = $this->conn->ConsulaSin($sql);
        return $response;
    }
    public function Delete(){
        $sql = "consulta sql aqui";
        $response = $this->conn->ConsulaSin($sql);
        return $response;
    }
    public function ReadOne(){
        $sql = "consulta sql aqui";
        $data = $this->conn->ConsulaArray($sql);
        return $data;
    }
}
?>