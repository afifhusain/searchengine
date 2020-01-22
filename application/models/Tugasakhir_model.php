<?php 

class Tugasakhir_model extends CI_model{

	public function tambahData()
	{
		$data = [
            "Judul" => $this->input->post('Judul', true),
           "Penulis" => $this->input->post('Penulis', true),
             "Tahun" => $this->input->post('Tahun', true),
            "Id_Pembimbing" => $this->input->post('Id_Pembimbing', true),
             "Abstract" => $this->input->post('Abstract', true),
              "Nama_file" => $this->input->post('Nama_file', true)
        ];

	$this->db->insert('tugas_akhir', $data);

	}
	public function tampil()
	{
		 return $this->db->get('tugas_akhir')->result_array();
	}

	public function hapusData($id)
	{
		$this->db->delete('tugas_akhir', ['Id_ta' => $id]);
	}

}





 ?>