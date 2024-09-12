<?php
Class DashboardModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function datos(){
        $sql = "SELECT * FROM login";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}
?>