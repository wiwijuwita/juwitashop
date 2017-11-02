<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class modelMember extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		function check_login($email_member,$password_member){
			$this->db->select('*');
			$this->db->from('member');
			$this->db->where('email_member', $email_member);
			$this->db->where('password_member', $password_member);
			return $this->db->get();
		}
	}
?>