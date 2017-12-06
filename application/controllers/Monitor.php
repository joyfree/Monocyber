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
			$data=$this->Monitor_model->show()->result();
			foreach ($data as $stat) {
				$a=$stat->status;
				echo $a;

			}
			foreach ($data as $stat) {
				$b=$stat->pos1;
				echo $b;

			}
			foreach ($data as $stat) {
				$c=$stat->pos2;
				echo $c;

			}
		}
	}



?>
