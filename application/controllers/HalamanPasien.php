<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPasien extends CI_Controller {


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
            'judul' => 'Data Pasien',
            'pasien' => $this->Crud->TampilData('tb_pasien')->result() // Buat Menampilkan Tabel Dari Database1
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpasien/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function form_tambah()
	{
        $data = array(
            'judul' => 'Tambah Data Pasien',
            'no_rm' => $this->Crud->generateNoRM() // Buat Menampilkan Tabel Dari Database1
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpasien/form_tambah'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_pasien()
	{
        $no_rm = $this->input->post('no_rm'); // Data yang diambil dari form inputan
        $no_bpjs = $this->input->post('no_bpjs');
        $nama_pasien = $this->input->post('nama_pasien');
        $jk  = $this->input->post('jk');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $gol_darah = $this->input->post('gol_darah');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tgl_daftar = $this->input->post('tgl_daftar');

        $data = array(
            'no_rm' => $no_rm, // Data Yang ada Didatabase => Data yang ada diinputan
            'no_bpjs' => $no_bpjs,
            'nama_pasien' => $nama_pasien,
            'jk' => $jk,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'gol_darah' => $gol_darah,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'tgl_daftar' => $tgl_daftar
        );

        $this->Crud->InputData('tb_pasien',$data); // Untuk menyimpan ke database
        $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Diinputakan'
                })");
        redirect('HalamanPasien');
	}

    public function form_edit($id_pasien)
	{
        $data = array(
            'judul' => 'Edit Data Pasien',
            'pasien' => $this->Crud->TampilData('tb_pasien', $this->db->where('id_pasien', $id_pasien))->row_array() // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpasien/form_edit'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function edit_pasien($id_pasien)
	{
        $no_rm = $this->input->post('no_rm');
        $no_bpjs = $this->input->post('no_bpjs');
        $nama_pasien = $this->input->post('nama_pasien');
        $jk = $this->input->post('jk');
        $tempat_lahir  = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $gol_darah = $this->input->post('gol_darah');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $tgl_daftar = $this->input->post('tgl_daftar');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'no_rm' => $no_rm,
            'no_bpjs' => $no_bpjs,
            'nama_pasien' => $nama_pasien,
            'jk' => $jk,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'gol_darah' => $gol_darah,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'tgl_daftar' => $tgl_daftar
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_pasien', $data, $where); // Untuk menyimpan ke database
        $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Diubah!'
                })");
        redirect('HalamanPasien');
	}

    public function hapus_pasien($id_pasien)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_pasien', $where); // Untuk menyimpan ke database
    $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Dihapus!'
                })");
    redirect('HalamanPasien');
    }

}
