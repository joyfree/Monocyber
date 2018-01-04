<?php 
	/**
	* 
	*/
	class Model_Admin extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			
		}

		function Getkaryawan()
		{
			$this->db->select('*');
			return $this->db->get('karyawan')->result();		
		}
		function GetDataKaryawan($no){
			$this->db->where('no', $no);
			return $this->db->get('karyawan')->result();
		}
		function add_karyawan($data){
			return $this->db->insert('karyawan', $data);
		}
		function add_admin($data){
			return $this->db->insert('admin', $data);
		}
		function delete_karyawan($value){
			$this->db->where('no', $value);
			return $this->db->delete('karyawan');
		}
		function edit_visimisi($data){
			$this->db->where('no', 1);
			return $this->db->update('tabel_visimisi', $data);
		}
		function edit_karyawan($data){
			$this->db->where('no', $data['no']);
			return $this->db->update('karyawan', $data);
		}
		function GetVisiMisi(){
			return $this->db->get('tabel_visimisi')->row();
		}
		function GetAdmin(){
			$this->db->where('id', 1);
			return $this->db->get('admin')->row();
		}
	}

?>