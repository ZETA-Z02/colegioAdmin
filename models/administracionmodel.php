<?php
Class AdministracionModel extends Model{
    function __construct(){
        parent::__construct();
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