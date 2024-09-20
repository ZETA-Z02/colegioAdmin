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
        $sql = "SELECT cc.*, cg.*, ms.*, sc.*, tr.*, hr.*
            FROM colegio_cursos cc
            JOIN colegio_grado cg ON cc.idgrado = cg.idgrado
            JOIN maestros ms ON cc.idmaestro = ms.idmaestro
            JOIN colegio_seccion sc ON cc.idseccion = sc.idseccion
            JOIN colegio_turno tr ON cc.idturno = tr.idturno
            JOIN colegio_horario hr ON cc.idhorario = hr.idhorario;
            ";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}
?>