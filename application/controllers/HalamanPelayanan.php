<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPelayanan extends CI_Controller {


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
            'judul' => 'Data Pelayanan',
            'pelayanan' => $this->Crud->TampilPelayanan()->result() // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function formlaporan_pelayanan()
	{
        $data = array(
            'judul' => 'Data Pelayanan',
            'pelayanan' => $this->Crud->TampilPelayanan()->result() // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/formlaporan_pelayanan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_pelayanan()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/r_tahun_pelayanan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_pelayanan_tahun($tahun)
	{

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_pelayanan_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_pelayanan()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/r_bulan_pelayanan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_pelayanan_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_pelayanan_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_pelayanan()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/r_tanggal_pelayanan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_pelayanan_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Data Pelayanan',
            'filter' => $this->Crud->TampilPelayananTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_pelayanan_tanggal', $data); // ini Dinamis

	}

    public function daftar_pelayanan()
	{
        $data = array(
            'judul' => 'Tambah Data Pelayanan',
            'pasien' => $this->Crud->TampilData('tb_pasien')->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/daftar_pelayanan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function form_tambah()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $data = array(
            'judul' => 'Tambah Data Pelayanan',
            'no_pelayanan' => $this->Crud->generateNoPelayanan(), // Buat Menampilkan Tabel Dari Database1
            'pasien' => $this->Crud->TampilData('tb_pasien', $this->db->where('id_pasien', $id_pasien))->row_array(), // Buat Menampilkan Tabel Dari Database
            'poli' => $this->Crud->TampilData('tb_poli')->result() // Buat Menampilkan Pilihan Nama Poli Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpelayanan/form_tambah'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_pelayanan()
	{
        $no_pelayanan = $this->input->post('no_pelayanan'); // Data yang diambil dari form inputan
        $id_pasien = $this->input->post('id_pasien');
        $id_poli = $this->input->post('id_poli');
        $keluhan  = $this->input->post('keluhan');
        $tgl_pelayanan = $this->input->post('tgl_pelayanan');

        $data = array(
            'no_pelayanan' => $no_pelayanan, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_pasien' => $id_pasien,
            'id_poli' => $id_poli,
            'keluhan' => $keluhan,
            'tgl_pelayanan' => $tgl_pelayanan
        );

        $this->Crud->InputData('tb_pelayanan',$data); // Untuk menyimpan ke database
        redirect('HalamanPelayanan');
	}

    // public function edit_dokter()
	// {
    //     $id_dokter = $this->input->post('id_dokter'); // Data yang diambil dari form inputan
    //     $nip = $this->input->post('nip');
    //     $nama_dokter = $this->input->post('nama_dokter');
    //     $jabatan = $this->input->post('jabatan');
    //     $golongan  = $this->input->post('golongan');
    //     $tgl_lahir = $this->input->post('tgl_lahir');
    //     $alamat = $this->input->post('alamat');
    //     $keahlian = $this->input->post('keahlian');
    //     $no_hp = $this->input->post('no_hp');

    //     $data = array(
    //         // Data Yang ada Didatabase => Data yang ada diinputan
    //         'nip' => $nip,
    //         'nama_dokter' => $nama_dokter,
    //         'jabatan' => $jabatan,
    //         'golongan' => $golongan,
    //         'tgl_lahir' => $tgl_lahir,
    //         'alamat' => $alamat,
    //         'keahlian' => $keahlian,
    //         'no_hp' => $no_hp
    //     );

    //     // Fungsi Where adalah untuk mencari data mana yang mau di ubah
    //     $where = array(
    //         'id_dokter' => $id_dokter, // Data Yang ada Didatabase => Data yang ada diinputan
    //     );

    //     $this->Crud->EditData('tb_dokter', $data, $where); // Untuk menyimpan ke database
    //     redirect('HalamanDokter');
	// }

    public function hapus_pelayanan($id_pelayanan)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_pelayanan' => $id_pelayanan, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_pelayanan', $where); // Untuk menyimpan ke database
    redirect('HalamanPelayanan');
    }

    public function laporan_pelayanan()
	{
        $data = array(
            'judul' => 'Laporan Pelayanan',
            'pelayanan' => $this->Crud->TampilPelayanan()->result(), // Buat Memanggil Tabel Dari Database
        );
        $this->load->view('laporan/laporan_pelayanan', $data); // ini Dinamis
	}
}
