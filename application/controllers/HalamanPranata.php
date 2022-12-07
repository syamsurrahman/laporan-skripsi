<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPranata extends CI_Controller {


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
            'judul' => 'Data Pranata Lab',
            'pranata' => $this->Crud->TampilData('tb_pranata')->result() // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpranata/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_pranata()
	{
        $nip = $this->input->post('nip'); // Data yang diambil dari form inputan
        $nama_pranata = $this->input->post('nama_pranata');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nip' => $nip, // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_pranata' => $nama_pranata,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        $this->Crud->InputData('tb_pranata',$data); // Untuk menyimpan ke database
        redirect('HalamanPranata');
	}

    public function edit_pranata()
	{
        $id_pranata = $this->input->post('id_pranata'); // Data yang diambil dari form inputan
        $nip = $this->input->post('nip');
        $nama_pranata = $this->input->post('nama_pranata');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nip' => $nip,
            'nama_pranata' => $nama_pranata,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_pranata' => $id_pranata, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_pranata', $data, $where); // Untuk menyimpan ke database
        redirect('HalamanPranata');
	}

    public function hapus_pranata($id_pranata)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_pranata' => $id_pranata, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_pranata', $where); // Untuk menyimpan ke database
    redirect('HalamanPranata');
    }
}
