
<?php 

class Modelapp extends CI_model{


public function getalldata($tabelName){
		return $this->db->get($tabelName);
	}
}