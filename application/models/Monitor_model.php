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
	}

?>