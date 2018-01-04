<?php 
	/**
	* 
	*/
	class Monitor_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function showid()
		{
			$this->db->select('*');
			$this->db->from('axis');

			return $this->db->get()->result();		
		}

		function GetMonitorAdmin(){
			$this->db->where('id', 2);
			return $this->db->get('admin')->row();
		}
		function showStat()
		{
			$this->db->select('status');
			$this->db->from('axis');
			$this->db->where('status',1);
			return $this->db->get();		
		}
		function showPos1()
		{
			$this->db->select('pos1');
			$this->db->from('axis');
			$this->db->where('status',1);

			return $this->db->get();		
		}
		function showPos2()
		{
			$this->db->select('pos2');
			$this->db->from('axis');
			$this->db->where('status',1);

			return $this->db->get();		

		}
	}

?>