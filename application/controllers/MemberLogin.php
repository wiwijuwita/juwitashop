<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MemberLogin extends CI_Controller {
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			//load model
			$this->load->model('modelMember');
			$this->load->model('modelKomentar');
			$this->load->model('modelBalasan');
		}

		function index(){
			$this->load->view('member/headermember');
			$this->load->view('member/home');
			$this->load->view('member/footermember');
		}

		//melihat login
		function prosesLogin(){
			$email_member = $this->input->post('email_member');
			$password_member = $this->input->post('password_member');
			$data = $this->modelMember->check_login($email_member, $password_member)->row();
			if($data != NULL){
				$array = array(
					'id_member' => $data->id_member,
					'nama_member' => $data->nama_member,
					'loggedin' => "TRUE"
				);
				$this->session->set_userdata($array);
				$this->load->view('member/headermember');
				$this->load->view('member/home');
				$this->load->view('member/footermember');
			}else{
				$this->session->set_userdata('message','<div class="alert alert-danger" role="alert"><strong>Ooooopss!!!</strong> Username and Password is incorrect!</div>');
				redirect('home');
			}
		}

		public function prosesLogout(){
			$this->session->sess_destroy();
			redirect(site_url('/'));
		}

		public function kontak(){
			$this->session->set_userdata('loggedin',TRUE);
			$this->load->view('member/headermember');
			$this->load->view('member/contact');
			$this->load->view('member/footermember');
		}

		public function inputKomentar(){
			$arrData = array('id_komentar'=>"NULL",
				'id_member'=>$this->input->post('id_member'),
				'tgl_post'=> date("Y-m-d"),
				'isi_komentar' => $this->input->post('komentar'),
				'status' => "0");
			
			$this->modelKomentar->insertKomentar($arrData);

			redirect(site_url('MemberLogin/pesan'));
		}

		public function pesan(){
			$this->session->set_userdata('loggedin',TRUE);
			$query1 = $this->modelKomentar->selectKomentar($_SESSION['id_member']);
			$arrData['data'] = $query1->result_array();
			$query2 = $this->modelBalasan->selectBalasan();
			$arrData['data2'] = $query2->result_array();
			$this->load->view('member/headermember');
			$this->load->view('member/message', $arrData);
			$this->load->view('member/footermember');
		}

		function tampilPost(){
			$this->session->set_userdata('loggedin',TRUE);
			redirect(site_url('MemberLogin/pesan'));
		}
	}
?>