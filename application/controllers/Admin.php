<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Monitor_model');
		$this->load->model('Model_Admin');
	}
	public function index(){
		if($this->session->userdata('logged_in') == true){
			$this->Beranda();	
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}
		
	}
	public function login(){
		$data = $this->input->post();
		$match = $this->Model_Admin->GetAdmin();
		if($data['username'] == $match->username){
			if(md5($data['password']) == $match->password){
				$this->SetSession();
			}else{
				$this->session->set_flashdata('flash','Password Anda Salah');
				redirect('Admin','refresh');
			}
		}else{
			$this->session->set_flashdata('flash','Username Anda Salah');
			redirect('Admin','refresh');
		}

	}


	public function SetSession()
	{	
		$account = array(
			'username' => 'admin',
			'logged_in' => true,
			);
		$this->session->set_userdata($account);
		redirect('Admin','refresh');
	}
	public function Beranda($link=null){

		if($this->session->userdata('logged_in') == true){
			$data['karyawan'] = $this->Model_Admin->Getkaryawan();
			$data['visimisi'] = $this->Model_Admin->GetVisiMisi();
			if($link == null){
				$data['content'] = 'admin/admin-content/home';	
			}else{
				$data['content'] = 'admin/admin-content/'.$link;
			}
			$this->load->view('admin/template',$data);
			// print_r($data['visimisi']);
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}
	}
	public function add_karyawan(){
		if($this->session->userdata('logged_in') == true){
			$data = $this->input->post();
			if($this->Model_Admin->add_karyawan($data)){
				$this->session->set_flashdata('flash', 'Data telah di tambahkan');	
			}else{
				$this->session->set_flashdata('flash', 'Data gagal di tambahkan');	
			}
			redirect('Admin','refresh');	
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}


	}
	public function delete_karyawan(){
		if($this->session->userdata('logged_in') == true){
			$data = $this->input->post();
			foreach ($data as $value) {
				if($this->Model_Admin->delete_karyawan($value)){
					$this->session->set_flashdata('flash', 'Data telah di dihapus');	
				}else{
					$this->session->set_flashdata('flash', 'Data gagal di dihapus');	
				}
			}
			redirect('Admin','refresh');
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}


	}
	public function edit_vm(){
		if($this->session->userdata('logged_in') == true){
			$datta = $this->input->post();
			$data['visi'] = $this->TextEdit($datta['visi1']);
			$data['misi'] = $this->TextEdit($datta['misi1']);
			if($this->Model_Admin->edit_visimisi($data)){
				$this->session->set_flashdata('flash', 'data tersimpan');	
			}else{
				$this->session->set_flashdata('flash', 'Data gagal di edit');	
			}
			redirect('Admin','refresh');	
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}


	}
	public function TextEdit($data){
		$text = explode(".",$data);
		$hasil = '';
		foreach ($text as $text) {
			$hasil = $hasil.''.$text.'<br>';
		}
		return $hasil;

	}
	public function hiaaaa(){
		$data['username'] = 'admin';
		$data['password'] = md5('admin');
		$this->Model_Admin->add_admin($data);
	}
	public function logout(){
		session_destroy();
		redirect('admin','refresh');
	}



}



?>
