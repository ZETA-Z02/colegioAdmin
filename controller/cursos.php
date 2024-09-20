<?php

class Cursos extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$datos = $this->model->listaCursos();
        $this->view->data2 = $datos;

		$datos = $this->model->listarHorarios();
        $this->view->data3 = $datos;

		$this->view->Render('cursos/index');
	}
	function horarios()
	{
		$this->view->Render('cursos/horarios');
	}
	function cursos()
	{
		$this->view->Render('cursos/cursos');
	}

}