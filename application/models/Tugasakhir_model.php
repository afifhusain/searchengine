<?php 

class Tugasakhir_model extends CI_model{

	public function tampil()
	{
		 return $this->db->get('tugas_akhir')->result_array();
	}

}





 ?>