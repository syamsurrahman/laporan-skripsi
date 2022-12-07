<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPerawat extends CI_Controller {


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
            'judul' => 'Data Perawat',
            'perawat' => $this->Crud->TampilPerawat()->result(), // Buat Menampilkan Tabel Dari Database
            'poli' => $this->Crud->TampilData('tb_poli')->result() // Buat Menampilkan Pilihan Nama Poli Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanperawat/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_perawat()
	{
        $nip = $this->input->post('nip'); // Data yang diambil dari form inputan
        $nama_perawat = $this->input->post('nama_perawat');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $id_poli = $this->input->post('id_poli');

        $data = array(
            'nip' => $nip, // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_perawat' => $nama_perawat,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'id_poli' => $id_poli
        );

        $this->Crud->InputData('tb_perawat',$data); // Untuk menyimpan ke database
        redirect('HalamanPerawat');
	}

    public function edit_perawat()
	{
        $id_perawat = $this->input->post('id_perawat'); // Data yang diambil dari form inputan
        $nip = $this->input->post('nip');
        $nama_perawat = $this->input->post('nama_perawat');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $id_poli = $this->input->post('id_poli');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nip' => $nip,
            'nama_perawat' => $nama_perawat,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'id_poli' => $id_poli
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_perawat' => $id_perawat, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_perawat', $data, $where); // Untuk menyimpan ke database
        redirect('Halamanperawat');
	}

    public function hapus_perawat($id_perawat)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_perawat' => $id_perawat, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_perawat', $where); // Untuk menyimpan ke database
    redirect('HalamanPerawat');
    }
}
