<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model("gastos_model","gastos");
	}
	public function index()
	{
		$this->load->view('index');

	}

	public function uno()
	{
		
		$this->load->view('uno');
	}

	public function guardar()
	{
		//Recibimos los datos 
		if ($this->input->is_ajax_request()) {
			$_POST = json_decode(file_get_contents('php://input'),true);	
			echo json_encode($this->gastos->guardar($this->input->post()));
		}
	}

	public function mostrar(){
			echo json_encode( $this->gastos->mostrar() );
	}

}
