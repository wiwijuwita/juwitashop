<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class modelKomentar extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		function insertKomentar($data){
			$this->db->insert('komentar',$data);
		}

		function selectKomentar($id_member){
			$this->db->select('*');
			$this->db->from('komentar');
			$this->db->where('id_member', $id_member);
			$this->db->order_by('id_komentar','desc');
			return $this->db->get();
		}
	}
?>