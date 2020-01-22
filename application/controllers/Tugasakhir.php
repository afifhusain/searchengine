<?php 

class Tugasakhir extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Tugasakhir_model');
        //$this->load->library('form_validation');
    }
    public function tambah()
	{
		
		$this->Tugasakhir_model->tambahData();
		$this->load->view('template/header');
		$this->load->view('tambahdata/index');
		$this->load->view('template/footer');
		

		
		
	}
	public function index()
	{
		$data['tugasakhir'] = $this->Tugasakhir_model->tampil();
		$this->load->view('template/header');
		$this->load->view('tampildata/index', $data);
		$this->load->view('template/footer');
		
	}
	public function hapus($id)
	{
		$this->Tugasakhir_model->hapusData($id);
		redirect('tugasakhir');
	}

	
}




 ?>