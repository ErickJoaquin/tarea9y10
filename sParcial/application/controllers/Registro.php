<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Registro_model');
	}


	public function index()
	{

		$datos = array();

		$datos['registros'] = $this->Registro_model->listarRegistros();	
		
		$this->load->view('sParcial/registro',$datos);


		
	}



	function guardarRegistros()
	{
		
		

		
		
		if ($_POST){

			if ($_POST['nombre'] == "" or $_POST['descripcion'] == ""  or $_POST['precio'] == null){
				
			
					echo "<script>alert('Dejo algun campo vacio')</script>";
					$datos = array();
					$datos['registros'] = $this->Registro_model->listarRegistros();	
					$this->load->view('sParcial/registro',$datos);
				


			}

			else{
			
			$this->Registro_model->guardarRegis($_POST);
			$this->load->view('mensaje');
		}

	}

}





}
