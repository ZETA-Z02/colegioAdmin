<?php

class Alumnos extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('alumnos/index');
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