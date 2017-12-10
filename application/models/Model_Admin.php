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
		function GetVisiMisi(){
			return $this->db->get('tabel_visimisi')->row();
		}
		function GetAdmin(){
			return $this->db->get('admin')->row();
		}
	}

?>