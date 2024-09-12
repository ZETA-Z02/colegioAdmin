<?php
Class Dashboard extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function render(){
        $datos = $this->model->datos();
        $this->view->data = $datos;
        $this->view->Render('dashboard/index');
    }

}



?>