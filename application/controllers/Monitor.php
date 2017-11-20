<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Monitor extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Monitor_model');
		}

		public function index(){
			$this->load->view('Monitor_view');
			$this->status();
		}

		public function status()
		{
			$status=$this->Monitor_model->show()->row();
		}
	}



?>
