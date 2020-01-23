<?php 

class Tugasakhir extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugasakhir_model');
        $this->load->library('form_validation');
    }
    public function tambah()
	{
		 $this->form_validation->set_rules('Judul', 'JUDUL', 'required');
		  $this->form_validation->set_rules('Penulis', 'PENULIS', 'required');

	 if($this->form_validation->run() == false ) {
		
		$this->load->view('template/header');
		$this->load->view('tambahdata/index');
		$this->load->view('template/footer');
	 } else {
		$this->Tugasakhir_model->tambahData();
		 $this->session->set_flashdata('flash', 'Ditambahkan');
		 redirect('tugasakhir');
	 }
	
	}
	public function index()
	{
		$data['tugasakhir'] = $this->Tugasakhir_model->tampil();

		if ( $this->input->post('keyword') ) {
			$data['tugasakhir'] = $this->Tugasakhir_model->cariData();
		}

		$this->load->view('template/header', $data);
		$this->load->view('tampildata/index', $data);
		$this->load->view('template/footer');
		
	}
	public function hapus($id)
	{
		$this->Tugasakhir_model->hapusData($id);
		redirect('tugasakhir');
	}
	public function ubah($id)
	{
		$data['tugasakhir'] = $this->Tugasakhir_model->dapatkanId($id);

		 $this->form_validation->set_rules('Judul', 'JUDUL', 'required');

		 if($this->form_validation->run() == false ) {
		 	$this->load->view('template/header');
		 	$this->load->view('ubahdata/index', $data);
		 	$this->load->view('template/footer', $data);
		 } else {
		 	$this->Tugasakhir_model->ubahData();
		 	$this->session->set_flashdata('flash', 'Diubah');
		 	redirect('tugasakhir');
		 }
	}

}




 ?>