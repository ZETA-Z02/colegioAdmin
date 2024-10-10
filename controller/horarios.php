<?php
Class Horarios extends Controller{
    function __construct(){
        parent::__construct();
    }
    public function render(){
        $this->view->Render('horarios/index');
    }
    public function horario(){
        $this->view->Render('horarios/horario');
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

	function createhorario()
	{
		$horario = $_POST['horario'];
		$status = $_POST['status'];
		if($this->model->insertHorario( $horario, $status)){
			// echo "REGISTRO EXITOSO";
			$msg= "EXITOSO";
			$this->view->data = $msg;
			$this->view->Render('horarios/index');

		}else{
			// echo "ERROR AL INSERTAR";
			$msg= "ERROR";
			$this->view->data = $msg;
			$this->view->Render('horarios/index');
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

}

?>