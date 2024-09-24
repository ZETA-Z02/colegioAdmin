<?php

class Cursos extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('cursos/index');
	}
	function horarios()
	{
		$this->view->Render('cursos/horarios');
	}
	function listahorario()
	{
		$this->view->Render('cursos/listahorario');
	}
	function cursos()
	{

		$res = $this->model->ListaMaestro();
		$this->view->data = $res;

		$res = $this->model->ListaGrado();
		$this->view->data2 = $res;

		$res = $this->model->ListaSeccion();
		$this->view->data3 = $res;

		$res = $this->model->ListaTurno();
		$this->view->data4 = $res;

		$res = $this->model->ListaHorario();
		$this->view->data5 = $res;


		$this->view->Render('cursos/cursos');
	}

	public function lishorario(){
		$data = $this->model->ListarHorario();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idhorario"=>$row['idhorario'],
				"horario"=>$row['horario'],
				
			);
		}
		echo json_encode($json);
	}

	public function liscursos(){
		$data = $this->model->listaCursos();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idcurso"=>$row['idcurso'],
				"curso"=>$row['curso'],
				"nombre"=>$row['nombre'],
				"grado"=>$row['grado'],
				"seccion"=>$row['seccion'],
				"turno"=>$row['turno'],
				"horario"=>$row['horario'],
				
			);
		}
		echo json_encode($json);
	}

	function createhorario()
	{
		$horario = $_POST['horario'];
		$status = $_POST['status'];
		if($this->model->insertHorario( $horario, $status)){
			// echo "REGISTRO EXITOSO";
			$msg= "EXITOSO";
			$this->view->data = $msg;
			$this->view->Render('cursos/listahorario');

		}else{
			// echo "ERROR AL INSERTAR";
			$msg= "ERROR";
			$this->view->data = $msg;
			$this->view->Render('cursos/listahorario');
		}	
	}

	public function deleteH(){
		$id = $_POST['id'];
		if($this->model->Deletehorario($id)){
			echo "EXITO AL ELIMINAR";
		}else{
			echo "ERROR AL ELIMINAR";
		}
	}

	public function deleteC(){
		$id = $_POST['id'];
		if($this->model->Deletecurso($id)){
			echo "EXITO AL ELIMINAR";
		}else{
			echo "ERROR AL ELIMINAR";
		}
	}

	function createC()
	{
		$curso = $_POST['curso'];
		$idmaestro = $_POST['idmaestro'];
		$idgrado = $_POST['idgrado'];
		$idseccion = $_POST['idseccion'];
		$idturno = $_POST['idturno'];
		$idhorario = $_POST['idhorario'];
		$status = $_POST['status'];
		if($this->model->insertCurso($curso,$idmaestro,$idgrado,$idseccion,$idturno,$idhorario,$status)){
			// echo "REGISTRO EXITOSO";
			$msg= "EXITOSO";
			$this->view->data = $msg;
			$this->view->Render('cursos/index');
		}else{
			// echo "ERROR AL INSERTAR";
			$msg= "ERROR";
			$this->view->data = $msg;
			$this->view->Render('cursos/index');
		}	
	}

}