<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Getinfo extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Monitor_model');
		}

		public function status()
		{
			$data=$this->Monitor_model->show()->result();
			foreach ($data as $stat) {
				$a=$stat->status;
			}
			 foreach ($data as $stat) {
			 	$b=$stat->pos1;
			 }
			 foreach ($data as $stat) {
			 	$c=$stat->pos2;
			}

			$mystat=[$a,$b,$c];
			foreach ($mystat as $key) {
				$myJson=json_encode($mystat);
				echo $myJson;
			}
			
		}


	}

?>