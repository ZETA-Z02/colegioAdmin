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
	public function create(){
        //Function para crear un nuevo registro
    }
    public function read(){
        //Function para leer los registros
    }
    public function update(){
        //Function para actualizar un registro
    }
    public function delete(){
        //Funtion para eliminar un registro
    }


}