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
			$data['a']=$this->Monitor_model->showStat()->result();
			$data['b']=$this->Monitor_model->showPos1()->result();
			$data['c']=$this->Monitor_model->showPos2()->result();
			echo json_encode($data);
			
		}
		public function pos1()
		{
			$data=$this->Monitor_model->showPos1()->result();
			 /*foreach ($data as $stat) {
			 	$b=$stat->pos1;
			 	echo $b;
			 }*/
			 echo json_encode($data);
		}
		public function pos2()
		{
			$data=$this->Monitor_model->showPos2()->result();
			/*foreach ($data as $stat) {
			 	$c=$stat->pos2;
			 	echo $c;
			}*/
			echo json_encode($data);	
			
		}
			
		

	}

?>