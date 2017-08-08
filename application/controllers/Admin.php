<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		function __construct(){
		parent::__construct();
			
			if($this->session->userdata('status')!="login"){
				redirect(base_url());
			}
		}
		public function index()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$this->load->view('admin_beranda', $data);
		}
		public function bukutamu()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['tamu']=$this->db->query("select * from tamu")->result();	
		$this->load->view('admin_tamu',$data);		
		}

		public function daftar()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['materi']=$this->db->query("select * from guru")->result();
		$this->load->view('admin_daftar_guru', $data);		
		}

		public function tambah()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['guru']=$this->db->query("select * from guru")->result();
		$this->load->view('admin_tambah_guru', $data);		
		}


		public function daftarmapel()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['mapel']=$this->db->query("select * from mapel")->result();
		$this->load->view('admin_daftar_mapel', $data);		
		}

		public function tambahmapel()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$data['mapel']=$this->db->query("select * from mapel")->result();
		$this->load->view('admin_tambah_mapel', $data);		
		}
		public function hdr()
		{
		$data['guru']=$this->db->query("select * from guru")->result();
		$this->load->view('guru_hdr', $data);		
		}  
}
