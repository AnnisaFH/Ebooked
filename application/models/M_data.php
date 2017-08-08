<?php 

class M_data extends CI_model{
	public function GetLearning($tabel,$where=""){
		$data=$this->db->query('select * from '.$tabel.' '.$where);
		return $data->result_array();
	}
	public function tampildata(){
		$data = $this->db->get('materi');
	}

	public function editdata($tabelName,$where){
		$res = $this->db->get_where($tabelName,$where);
		return $res;
	}
	public function deletedata($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function tampildatatamu(){
		$data = $this->db->get('tamu');
	}
	public function updatedata($tabelName,$data,$where){
		$res=$this->db->update($tabelName,$data,$where);
		return $res;
	}

	function get_insert($data){
       $this->db->insert('materi', $data);
       return TRUE;
    }

	public function inputdata($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}

	public function detailmateri($tabelName,$data){
		return $this->db->get_where($tabelName,$data);
	}

	public function tampildataguru(){
		$data = $this->db->get('guru');
	}
	public function inputdataguru($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function updatedataguru($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
	}
	public function deletedataguru($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}

	public function cek_login($tabel,$where){
		return $this->db->get_where($tabel,$where);
	}

	

}