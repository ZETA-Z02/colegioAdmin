<?php

class Profesores extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$datos = $this->model->listaDocentes();
        $this->view->data = $datos;

		$this->view->Render('profesores/index');
	}


}
?>