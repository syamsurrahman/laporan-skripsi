<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPoli extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud');

        // ngecekdulu apakah dia admin atau bukan
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('Auth');
            redirect($url);
        }
    }

	public function index()
	{
        $data = array(
            'judul' => 'Data Poli',
            'poli' => $this->Crud->TampilData('tb_poli')->result() // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpoli/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_poli()
	{
        $nama_poli = $this->input->post('nama_poli'); // Data yang diambil dari form inputan
        $ket_poli = $this->input->post('ket_poli');
        
        $data = array(
            'nama_poli' => $nama_poli, // Data Yang ada Didatabase => Data yang ada diinputan
            'ket_poli' => $ket_poli
        );

        $this->Crud->InputData('tb_poli',$data); // Untuk menyimpan ke database
        redirect('HalamanPoli');
	}
}
