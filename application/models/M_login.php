<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_login extends CI_Model {

		function __construct(){
			parent::__construct();
		}

		//cek keberadan username
		function cekUsername($username, $password){
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			return $this->db->get();
		}

		//mengambil data admin
		function getAdmin($idAdmin){
			$this->db->select('*');
			$this->db->form('admin');
			$this->db->where('id_admin', $idAdmin);
			return $this->db->get();
		}
	}
?>