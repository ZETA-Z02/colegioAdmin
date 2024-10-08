<?php
Class Cursosmodel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function listaCursos(){
        $sql = "SELECT cc.*, cg.*, ms.*, sc.*, tr.*, hr.* FROM colegio_cursos cc 
            JOIN colegio_grado cg ON cc.idgrado = cg.idgrado
            JOIN maestros ms ON cc.idmaestro = ms.idmaestro
            JOIN colegio_seccion sc ON cc.idseccion = sc.idseccion
            JOIN colegio_turno tr ON cc.idturno = tr.idturno
            JOIN colegio_horario hr ON cc.idhorario = hr.idhorario ORDER BY idcurso ASC;
;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }

    public function Deletecurso($id)
    {
        $sql = "DELETE FROM `colegio_cursos` WHERE (`idcurso` = '$id');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }   

    function insertCurso($curso,$idmaestro,$idgrado,$idseccion,$idturno,$idhorario,$status)
    {
        $sql = "INSERT INTO colegio_cursos VALUES (null,'$curso','$idmaestro','$idgrado','$idseccion','$idturno','$idhorario','$status');";
        $res = $this->conn->ConsultaSin($sql);
        return $res;
    }

    function ListaMaestro()
    {
        $sql = "SELECT idmaestro, nombre FROM maestros;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function ListaGrado()
    {
        $sql = "SELECT idgrado, grado FROM colegio_grado;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function ListaSeccion()
    {
        $sql = "SELECT idseccion, seccion FROM colegio_seccion;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function ListaTurno()
    {
        $sql = "SELECT idturno, turno FROM colegio_turno;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

    function ListaHorario()
    {
        $sql = "SELECT idhorario, horario FROM colegio_horario;";
        $res = $this->conn->ConsultaCon($sql);
        return $res;
    }

}
?>