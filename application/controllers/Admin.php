<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Monitor_model');
		$this->load->model('Model_Admin');
		$this->load->library('upload');
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
	public function Beranda($link=null,$id=null){

		if($this->session->userdata('logged_in') == true){
			if($id != null){
				$data['Data'] = $this->Model_Admin->GetDataKaryawan($id);
			}
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
			$this->load->library('upload');
			$data['nama'] = $this->input->post('nama');
			$data['nip'] = $this->input->post('nip');
			$data['jabatan'] = $this->input->post('jabatan');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			if($_FILES['foto']['name'] != ''){
				$this->do_upload('foto');
				$filename = $this->upload->data();
				$data['foto'] = $filename['file_name'];
			}
			// $data['foto'] = $_FILES['foto'];
			// print_r($_FILES['foto']);
			
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

	public function edit_karyawan(){
		if($this->session->userdata('logged_in') == true){
			$this->load->library('upload');
			$data['no'] = $this->input->post('no');
			$data['nama'] = $this->input->post('nama');
			$data['nip'] = $this->input->post('nip');
			$data['jabatan'] = $this->input->post('jabatan');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			if($_FILES['foto']['name'] != ''){
				$this->do_upload('foto');
				$filename = $this->upload->data();
				$data['foto'] = $filename['file_name'];
			}
			// $data['foto'] = $_FILES['foto'];
			// print_r($_FILES['foto']);
			
			if($this->Model_Admin->edit_karyawan($data)){
				$this->session->set_flashdata('flash', 'Data telah di ubah');	
			}else{
				$this->session->set_flashdata('flash', 'Data gagal di ubah');	
			}
			redirect('Admin','refresh');	
		}else{
			$data['content'] = 'admin/admin-content/login';
			$this->load->view('admin/template_login',$data);
		}
	}

	public function do_upload($nama)
	{
		$time = time();
		$date = date('y-m-d-h-i-s',$time);
		$ext = pathinfo($nama, PATHINFO_EXTENSION);
		$config['upload_path']          = './assets/img/';
		$config['file_name']            =  'karyawan_'.$date.''.$ext;
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000000;
		$config['max_width']            = 102400;
		$config['max_height']           = 768000;


		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('foto'))
		{
			$error = array('error' => $this->upload->display_errors());

			$this->session->set_flashdata('flash', 'Data Foto tidak sesuai');	
			redirect('admin/form_karyawan','refresh');	
		}
		
		return $this->upload->data();
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
