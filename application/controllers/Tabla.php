<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabla extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();



		
	}

	public function index()
	{

		$this->load->view('Tabla/tabla');

	}


	public function cargarTabla()
	{
		
		

		//$search = $_REQUEST['search'];
		$offset = $this->input->post('offset');	
		$limit = $this->input->post('limit');	
		$search = $this->input->post('search');	

		// $size = $_POST['size'];
		// echo json_encode($data);
		// exit();


		//$offset = $this->input->post('data_offset');	
		// $limit = $this->input->post('limit');	
		// //$search = $this->input->post('data_search');	
		// echo $limit;
		// exit();

		$this->load->model('FolderTabla/ModelTabla');
		$datosMenu = $this->ModelTabla->getElmentostabla($offset,$limit,$search);

		//$datos["valor"] = $_REQUEST;
		echo json_encode($datosMenu);

		// $datos["valor"] = $_REQUEST;
		// echo json_encode($datos);

	}





}

?>