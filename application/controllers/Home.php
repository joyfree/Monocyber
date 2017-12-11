<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Monitor_model');
			$this->load->model('Model_Admin');
			
		}

		public function index(){
			$data['karyawan'] = $this->Model_Admin->Getkaryawan();
			$data['visimisi'] = $this->Model_Admin->GetVisiMisi();
			$this->load->view('front/header');
			$this->load->view('front/home',$data);
			$this->load->view('front/footer');
		}


	}



	?>
