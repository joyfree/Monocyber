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
			if($this->session->userdata('monitor') == true){
				$data['koordinat'] = $this->Monitor_model->showid();
			$this->load->view('Monitor_view',$data);
		}else{
			$this->login();
		}
			
		}
		public function login(){
			if($this->session->userdata('monitor') == true){
				$this->index();
			}else{
				$data['content'] = 'monitor/login';
				$this->load->view('monitor/template_login',$data);
			}
		}
		public function login_auth(){
			$data = $this->input->post();
			$match = $this->Monitor_model->GetMonitorAdmin();
			if($data['username'] == $match->username){
				if(md5($data['password']) == $match->password){
					$account['monitor'] = true;
					$this->session->set_userdata($account);
					redirect('Monitor/index','refresh');
				}else{
					$this->session->set_flashdata('flash','Password Anda Salah');
				redirect('Monitor/login','refresh');
				}
			}else{
				$this->session->set_flashdata('flash','username Anda Salah');
				redirect('Monitor/login','refresh');
			}
			// print_r($match->username);
		}
		public function logout(){
			session_destroy();
			redirect('Monitor','refresh');
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
