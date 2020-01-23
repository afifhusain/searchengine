<?php 

class Tugasakhir_model extends CI_model{

	public function tampil()
	{
		 return $this->db->get('tugas_akhir')->result_array();
	}

	
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

	public function hapusData($id)
	{
		$this->db->delete('tugas_akhir', ['Id_ta' => $id]);
	}

	public function dapatkanId($id)
	{
		return $this->db->get_where('tugas_akhir', ['Id_ta' => $id])->row_array();
	}
	public function ubahData()
	{
		$data = [
            "Judul" => $this->input->post('Judul', true),
           "Penulis" => $this->input->post('Penulis', true),
             "Tahun" => $this->input->post('Tahun', true),
            "Id_Pembimbing" => $this->input->post('Id_Pembimbing', true),
             "Abstract" => $this->input->post('Abstract', true),
              "Nama_file" => $this->input->post('Nama_file', true)
        ];

        $this->db->where('Id_ta', $this->input->post('Id_ta'));
        $this->db->update('tugas_akhir', $data);
	}
	
	public function cariData()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('Judul', $keyword);
		$this->db->or_like('Penulis', $keyword);
		$this->db->or_like('Tahun', $keyword);
		$this->db->like('Id_Pembimbing', $keyword);
		$this->db->or_like('Abstract', $keyword);
		$this->db->or_like('Nama_file', $keyword);
		
		
		return $this->db->get('tugas_akhir')->result_array();
	}


}





 ?>