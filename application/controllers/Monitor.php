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
			$data['koordinat'] = $this->Monitor_model->showid();
			$this->load->view('Monitor_view',$data);
			
		}

		public function getinfo(){
			$data=$this->Monitor_model->show()->result();
			foreach ($data as $stat) {
				$a=$stat->status;
				

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
