<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanKesmas extends CI_Controller {


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
            'judul' => 'Data Kesmas',
            'kesmas' => $this->Crud->TampilData('tb_kesmas')->result() // Buat Menampilkan Tabel Dari Database

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamankesmas/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_kesmas()
	{
        $nip = $this->input->post('nip'); // Data yang diambil dari form inputan
        $nama_kesmas = $this->input->post('nama_kesmas');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nip' => $nip, // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_kesmas' => $nama_kesmas,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        $this->Crud->InputData('tb_kesmas',$data); // Untuk menyimpan ke database
        redirect('HalamanKesmas');
	}

    public function edit_kesmas()
	{
        $id_kesmas = $this->input->post('id_kesmas'); // Data yang diambil dari form inputan
        $nip = $this->input->post('nip');
        $nama_kesmas = $this->input->post('nama_kesmas');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nip' => $nip,
            'nama_kesmas' => $nama_kesmas,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_kesmas' => $id_kesmas, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_kesmas', $data, $where); // Untuk menyimpan ke database
        redirect('HalamanKesmas');
	}

    public function hapus_kesmas($id_kesmas)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_kesmas' => $id_kesmas, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_kesmas', $where); // Untuk menyimpan ke database
    redirect('HalamanKesmas');
    }
}
