<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->view('beranda');
	}

	public function ts()
		{
		$this->load->view('TentangSaya');		
		}

	public function hk()
		{
		$this->load->view('HubungiKami');		
		}	

	public function mskadmin()
		{
		$this->load->view('loginadmin');		
		}


	public function mskguru()
		{
		$this->load->view('loginguru');		
		}

	public function kelas()
		{
		$data['materi']=$this->db->query("select * from materi")->result();
		$this->load->view('kelas', $data);		
		}


		public function kelas7()
		{
		$data['materi']=$this->db->query("select * from materi where id_kelas=7")->result();
		$this->load->view('kelas', $data);		
		}

		public function kelas8()
		{
		$data['materi']=$this->db->query("select * from materi where id_kelas=8")->result();
		$this->load->view('kelas', $data);		
		}


		public function kelas9()
		{
		$data['materi']=$this->db->query("select * from materi where id_kelas=9")->result();
		$this->load->view('kelas', $data);		
		}


		public function kelasd($id)
		{
		
		$did = array('id_materi' => $id );
		$data['materi']=$this->m_data->detailmateri('materi',$did)->result();
		$this->load->view('kelasd', $data);		
		}

		
	
}
