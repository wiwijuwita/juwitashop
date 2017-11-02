<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class modelBalasan extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		function selectBalasan(){
			$this->db->select('*');
			$this->db->from('balasan');
			return $this->db->get();
		}
	}
?>