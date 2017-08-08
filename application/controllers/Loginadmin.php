<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {
	

	function construct(){
		parent::construct();
		$this->load->m_data('');
	}

	function admin(){
		$this->load->view('loginadmin');
	}

	function do_loginadmin(){
		$nama= $this->input->post('name');
		$pass= $this->input->post('password');

		$where=array(
			'name'=>$nama,
			'password'=>md5($pass)
		);

		$cek=$this->m_data->cek_login("login",$where)->num_rows();
		if ($cek >0){

			$data_session = array(
				'name'=>$nama,
				'status'=>"login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url('index.php/Admin/'));

		}else{
			echo "Username dan Password Salah";
		}
	}

	function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome/mskadmin'));
	}
}


