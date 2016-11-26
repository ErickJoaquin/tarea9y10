<?php 
defined('BASEPATH') OR exit('No direct script acces allowed');
class Registro_model extends CI_MODEL{
	public function __Construct()
	{

		parent::__Construct();
		$this->load->database();


	}


	function guardarRegis($registros)
		{

			$this->db->insert('registros',$registros);
		
	}
	




	function listarRegistros()
	{
		$query = $this->db->get('registros');
		return $query->result();

	}

}


?>