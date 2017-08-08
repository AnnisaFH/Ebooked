<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

		function __construct(){
		parent::__construct();
			
			if($this->session->userdata('statuslogin')!="loginguru"){
				redirect(base_url());
			}
		}

		public function index()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$this->load->view('guru_beranda', $data);
		}



		public function tambah()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['mapel']=$this->db->query("select * from mapel")->result();	
		$this->load->view('guru_form_tambah',$data);		
		}

		

		public function materi()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['materi']=$this->db->query("select * from materi")->result();
		$this->load->view('guru_materi', $data);		
		}

	
		public function hdr()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$this->load->view('guru_hdr', $data);		
		}

	
}
