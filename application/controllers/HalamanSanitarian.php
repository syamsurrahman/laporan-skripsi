<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanSanitarian extends CI_Controller {


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
            'judul' => 'Data Sanitarian',
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamansanitarian/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}
}
