<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanImunisasi extends CI_Controller {


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
            'judul' => 'Data Imunisasi',
            'balita' => $this->Crud->TampilData('tb_balita')->result() // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/daftar_imunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function riwayat()
	{
        $id_balita = $this->input->post('id_balita');

        $data = array(
            'judul' => 'Data Riwayat',
            'balita' => $this->Crud->TampilData('tb_balita', $this->db->where('id_balita', $id_balita))->row_array(), // Buat Memanggil Tabel Dari Database
            'riwayat' => $this->Crud->TampilRiwayatImunisasi($id_balita)->result(), // Buat Memanggil Tabel Dari Database
            'vaksinbalita' => $this->Crud->TampilData('tb_vaksinbalita')->result(), // Buat Menampilkan Pilihan Nama vaksinbalita Dari Database
            'bidan' => $this->Crud->TampilData('tb_bidan')->result() // Buat Menampilkan Pilihan Nama bidan Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/riwayat'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function riwayat_keseluruhan()
	{
        $data = array(
            'judul' => 'Data Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasi()->result(), // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/riwayat_keseluruhan'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function formlaporan_imunisasi()
	{
        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasi()->result(), // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/formlaporan_imunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_imunisasi()
	{
        $tahun = $this->input->post('tahun');
        
        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'filter' => $this->Crud->TampilImunisasiTahun($tahun)->result(), // Buat Memanggil Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_tahun_imunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_imunisasi_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasiTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database1
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_imunisasi_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_imunisasi()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        
        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'filter' => $this->Crud->TampilImunisasiBulan($tahun, $bulan)->result(), // Buat Memanggil Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_bulan_imunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_imunisasi_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasiBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database1
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_imunisasi_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_imunisasi()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        
        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'filter' => $this->Crud->TampilImunisasiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Memanggil Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_tanggal_imunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_imunisasi_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Laporan Data Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database1
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_imunisasi_tanggal', $data); // ini Dinamis

	}

    public function formlaporan_jadwalimunisasi()
	{
        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasi()->result(), // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/formlaporan_jadwalimunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_jadwalimunisasi()
	{
        $tahun = $this->input->post('tahun');
        
        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'filter' => $this->Crud->TampilJadwalImunisasiTahun($tahun)->result(), // Buat Memanggil Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_tahun_jadwalimunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_jadwalimunisasi_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'imunisasi' => $this->Crud->TampilJadwalImunisasiTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database1
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_jadwalimunisasi_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_jadwalimunisasi()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        
        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'filter' => $this->Crud->TampilJadwalImunisasiBulan($tahun, $bulan)->result(), // Buat Memanggil Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_bulan_jadwalimunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_jadwalimunisasi_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'imunisasi' => $this->Crud->TampilJadwalImunisasiBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database1
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_jadwalimunisasi_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_jadwalimunisasi()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        
        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'filter' => $this->Crud->TampilJadwalImunisasiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Memanggil Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanimunisasi/r_tanggal_jadwalimunisasi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_jadwalimunisasi_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Laporan Data Jadwal Imunisasi',
            'imunisasi' => $this->Crud->TampilJadwalImunisasiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database1
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_jadwalimunisasi_tanggal', $data); // ini Dinamis

	}

    public function input_imunisasi()
	{
        $vaksin_ke = $this->input->post('vaksin_ke'); // Data yang diambil dari form inputan
        $id_balita = $this->input->post('id_balita');
        $id_vaksinbalita = $this->input->post('id_vaksinbalita');
        $tgl_penyuntikan = $this->input->post('tgl_penyuntikan');
        $id_bidan  = $this->input->post('id_bidan');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'vaksin_ke' => $vaksin_ke, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_balita' => $id_balita,
            'id_vaksinbalita' => $id_vaksinbalita,
            'tgl_penyuntikan' => $tgl_penyuntikan,
            'id_bidan' => $id_bidan,
            'keterangan' => $keterangan
        );

        $this->Crud->InputData('tb_imunisasi',$data); // Untuk menyimpan ke database
        redirect('HalamanImunisasi/riwayat_keseluruhan');
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

    public function hapus_imunisasi($id_imunisasi)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_imunisasi' => $id_imunisasi, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_imunisasi', $where); // Untuk menyimpan ke database
    redirect('HalamanImunisasi');
    }

    public function laporan_jadwal_imunisasi($id_balita)
	{
        $data = array(
            'judul' => 'Laporan Jadwal Imunisasi',
            'balita' => $this->Crud->TampilData('tb_balita', $this->db->where('id_balita', $id_balita))->row_array(), // Buat Memanggil Tabel Dari Database
            'riwayat' => $this->Crud->TampilRiwayatImunisasi($id_balita)->result(), // Buat Memanggil Tabel Dari Database
        );
        $this->load->view('laporan/laporan_jadwal_imunisasi', $data); // ini Dinamis
	}

    public function laporan_imunisasi()
	{
        $data = array(
            'judul' => 'Laporan Imunisasi',
            'imunisasi' => $this->Crud->TampilImunisasi()->result(), // Buat Memanggil Tabel Dari Database
        );
        $this->load->view('laporan/laporan_imunisasi1', $data); // ini Dinamis
	}
}
