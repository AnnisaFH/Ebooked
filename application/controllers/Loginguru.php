<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginguru extends CI_Controller {
	

	function construct(){
		parent::construct();
		$this->load->m_data('');
	}

	function index(){
		$this->load->view('loginguru');
	}

	function do_loginguru(){
		$nama= $this->input->post('name_guru');
		$pass= $this->input->post('password_guru');

		$where=array(
			'nama_guru'=>$nama,
			'password_guru'=>md5($pass)
		);

		$cek=$this->m_data->cek_login("guru",$where)->num_rows();
		if ($cek >0){

			$data_session = array(
				'name'=>$nama,
				'statuslogin'=>"loginguru"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url('index.php/Guru/index'));

		}else{
			echo "Username dan Password Salah";
		}
	}

	function do_logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome/mskguru'));
	}
}
