<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanBalita extends CI_Controller {


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
            'judul' => 'Data Balita',
            'balita' => $this->Crud->TampilData('tb_balita')->result() // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanbalita/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_balita()
	{
        $nama_balita = $this->input->post('nama_balita'); // Data yang diambil dari form inputan
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur  = $this->input->post('umur');
        $jk = $this->input->post('jk');
        $nama_ibu = $this->input->post('nama_ibu');
        $nik_ibu = $this->input->post('nik_ibu');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nama_balita' => $nama_balita, // Data Yang ada Didatabase => Data yang ada diinputan
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'jk' => $jk,
            'nama_ibu' => $nama_ibu,
            'nik_ibu' => $nik_ibu,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        $this->Crud->InputData('tb_balita',$data); // Untuk menyimpan ke database
        redirect('HalamanBalita');
	}

    public function edit_bidan()
	{
        $nama_balita = $this->input->post('nama_balita'); // Data yang diambil dari form inputan
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur  = $this->input->post('umur');
        $jk = $this->input->post('jk');
        $nama_ibu = $this->input->post('nama_ibu');
        $nik_ibu = $this->input->post('nik_ibu');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_balita' => $nama_balita, // Data Yang ada Didatabase => Data yang ada diinputan
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'jk' => $jk,
            'nama_ibu' => $nama_ibu,
            'nik_ibu' => $nik_ibu,
            'alamat' => $alamat,
            'no_hp' => $no_hp
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_balita' => $id_balita, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_balita', $data, $where); // Untuk menyimpan ke database
        redirect('HalamanBalita');
	}

    public function hapus_balita($id_balita)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_balita' => $id_balita, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_balita', $where); // Untuk menyimpan ke database
    redirect('HalamanBalita');
    }
}
