<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanBidan extends CI_Controller {


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
            'judul' => 'Data Bidan',
            'bidan' => $this->Crud->TampilData('tb_bidan')->result() // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanbidan/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_bidan()
	{
        $nip = $this->input->post('nip'); // Data yang diambil dari form inputan
        $nama_bidan = $this->input->post('nama_bidan');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nip' => $nip, // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_bidan' => $nama_bidan,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        $this->Crud->InputData('tb_bidan',$data); // Untuk menyimpan ke database
        redirect('HalamanBidan');
	}

    public function edit_bidan()
	{
        $id_bidan = $this->input->post('id_bidan'); // Data yang diambil dari form inputan
        $nip = $this->input->post('nip');
        $nama_bidan = $this->input->post('nama_bidan');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nip' => $nip,
            'nama_bidan' => $nama_bidan,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_bidan' => $id_bidan, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_bidan', $data, $where); // Untuk menyimpan ke database
        redirect('HalamanBidan');
	}

    public function hapus_bidan($id_bidan)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_bidan' => $id_bidan, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_bidan', $where); // Untuk menyimpan ke database
    redirect('HalamanBidan');
    }
}
