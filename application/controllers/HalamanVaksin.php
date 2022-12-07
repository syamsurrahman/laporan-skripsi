<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanVaksin extends CI_Controller {


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
            'judul' => 'Data Vaksinasi Covid',
            'tiket_vaksin' => $this->Crud->generateTiketVaksin(), // Buat Menampilkan Tabel Dari Database1
            'vaksin' => $this->Crud->TampilData('tb_vaksin')->result(), // Buat Menampilkan Tabel Dari Database
            'dokter' => $this->Crud->TampilData('tb_dokter')->result(), // Buat Menampilkan Tabel Dari Database
            'vaksinasi' => $this->Crud->TampilVaksin()->result() // Buat Menampilkan Tabel Dari Database

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanvaksin/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_vaksin()
	{
        $no_tiket = $this->input->post('no_tiket'); // Data yang diambil dari form inputan
        $nik = $this->input->post('nik');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $no_hp = $this->input->post('no_hp');
        $alamat = $this->input->post('alamat');
        $lokasi_vaksin = $this->input->post('lokasi_vaksin');
        $tgl_vaksin = $this->input->post('tgl_vaksin');
        $id_vaksin = $this->input->post('id_vaksin');
        $id_dokter = $this->input->post('id_dokter');
        $keterangan = $this->input->post('keterangan');
        
        $data = array(
            'no_tiket' => $no_tiket, // Data Yang ada Didatabase => Data yang ada diinputan
            'nik' => $nik,
            'nama_lengkap' => $nama_lengkap,
            'tgl_lahir' => $tgl_lahir,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'lokasi_vaksin' => $lokasi_vaksin,
            'tgl_vaksin' => $tgl_vaksin,
            'id_vaksin' => $id_vaksin,
            'id_dokter' => $id_dokter,
            'keterangan' => $keterangan
        );

        $this->Crud->InputData('tb_vaksinasi',$data); // Untuk menyimpan ke database
        redirect('HalamanVaksin');
	}

    public function hapus_vaksin($id_vaksin)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_vaksin' => $id_vaksin, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_vaksin', $where); // Untuk menyimpan ke database
    redirect('HalamanVaksin');
    }

    public function laporan_vaksin()
	{
        $data = array(
            'judul' => 'Laporan Data Vaksin',
            'vaksinasi' => $this->Crud->TampilVaksin()->result() // Buat Menampilkan Tabel Dari Database
        );
        $this->load->view('laporan/laporan_vaksin', $data); // ini Dinamis
	}

    public function formlaporan()
	{
        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksin()->result() // Buat Menampilkan Tabel Dari Database

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanvaksin/formlaporan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanvaksin/r_tahun'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_bulan()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanvaksin/r_bulan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tanggal()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanvaksin/r_tanggal'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_vaksin_tahun($tahun)
	{
        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun
        );
        $this->load->view('laporan/laporan_vaksin_tahun', $data); // ini Dinamis
	}

    public function laporan_vaksin_bulan($tahun, $bulan)
	{
        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan
        );
        $this->load->view('laporan/laporan_vaksin_bulan', $data); // ini Dinamis
	}

    public function laporan_vaksin_tanggal($tgl_awal, $tgl_akhir)
	{
        $data = array(
            'judul' => 'Laporan Data Vaksinasi Covid',
            'vaksinasi' => $this->Crud->TampilVaksinTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir
        );
        $this->load->view('laporan/laporan_vaksin_tanggal', $data); // ini Dinamis
	}
}
