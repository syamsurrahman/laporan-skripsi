<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPosyandu extends CI_Controller {


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
            'judul' => 'Data Posyandu',
            'posyandu' => $this->Crud->TampilData('tb_posyandu')->result(), // Buat Menampilkan Tabel Dari Database1
            'bidan1' => $this->Crud->TampilData('tb_bidan')->result(), // Buat Menampilkan Tabel Dari Database1
            'bidan2' => $this->Crud->TampilData('tb_bidan')->result(), // Buat Menampilkan Tabel Dari Database1
            'perawat1' => $this->Crud->TampilData('tb_perawat')->result(), // Buat Menampilkan Tabel Dari Database1
            'perawat2' => $this->Crud->TampilData('tb_perawat')->result(), // Buat Menampilkan Tabel Dari Database1
            'kegiatan' => $this->Crud->TampilKegiatan()->result(), // Buat Menampilkan Tabel Dari Database1

            // 'totPoliAnak' => $this->Crud->totPoliAnak()
            
            // 'posyandu' => $this->Crud->TampilData('tb_posyandu')->result() // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanPosyandu/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function formlaporan_posyandu()
	{
        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'kegiatan' => $this->Crud->TampilKegiatan()->result(), // Buat Menampilkan Tabel Dari Database1

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/formlaporan_posyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}
    
    public function filter_tahun_kegiatanposyandu()
	{
        $tahun = $this->input->post('tahun');
        
        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/r_tahun_kegiatanposyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_bulan_kegiatanposyandu()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');
        
        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/r_bulan_kegiatanposyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tanggal_kegiatanposyandu()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        
        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/r_tanggal_kegiatanposyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_kegiatanposyandu_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_kegiatan_tahun', $data); // ini Dinamis

	}

    public function laporan_kegiatanposyandu_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_kegiatan_bulan', $data); // ini Dinamis

	}
    
    public function laporan_kegiatanposyandu_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Laporan Data Posyandu',
            'filter' => $this->Crud->TampilKegiatanTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_kegiatan_tanggal', $data); // ini Dinamis

	}

    public function input_kegiatan()
	{
        $id_posyandu = $this->input->post('id_posyandu'); // Data yang diambil dari form inputan
        $tanggal = $this->input->post('tanggal'); // Data yang diambil dari form inputan
        $id_bidan1 = $this->input->post('id_bidan1');
        $id_bidan2 = $this->input->post('id_bidan2');
        $id_perawat1 = $this->input->post('id_perawat1');
        $id_perawat2 = $this->input->post('id_perawat2');
        $kegiatan = $this->input->post('kegiatan');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
            'tanggal' => $tanggal,
            'id_bidan1' => $id_bidan1,
            'id_bidan2' => $id_bidan2,
            'id_perawat1' => $id_perawat1,
            'id_perawat2' => $id_perawat2,
            'kegiatan' => $kegiatan,
            'keterangan' => $keterangan
        );

        $this->Crud->InputData('tb_kegiatanposyandu',$data); // Untuk menyimpan ke database
        redirect('HalamanPosyandu');
	}

    public function edit_kegiatan()
	{
        $id_kegiatanposyandu = $this->input->post('id_kegiatanposyandu'); // Data yang diambil dari form inputan
        $id_posyandu = $this->input->post('id_posyandu'); // Data yang diambil dari form inputan
        $tanggal = $this->input->post('tanggal'); // Data yang diambil dari form inputan
        $id_bidan1 = $this->input->post('id_bidan1');
        $id_bidan2 = $this->input->post('id_bidan2');
        $id_perawat1 = $this->input->post('id_perawat1');
        $id_perawat2 = $this->input->post('id_perawat2');
        $kegiatan = $this->input->post('kegiatan');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
            'tanggal' => $tanggal,
            'id_bidan1' => $id_bidan1,
            'id_bidan2' => $id_bidan2,
            'id_perawat1' => $id_perawat1,
            'id_perawat2' => $id_perawat2,
            'kegiatan' => $kegiatan,
            'keterangan' => $keterangan
        );

        $where = array(
            'id_kegiatanposyandu' => $id_kegiatanposyandu
        );

        $this->Crud->EditData('tb_kegiatanposyandu',$data,$where); // Untuk menyimpan ke database
        redirect('HalamanPosyandu');
	}

    //function link
    //daftar posyandu
    public function daftar_posyandu()
	{
        $data = array(
            'judul' => 'Daftar Nama Posyandu',
            'posyandu' => $this->Crud->TampilData('tb_posyandu')->result(), // Buat Menampilkan Tabel Dari Database1
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/daftar_posyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_posyandu()
	{
        $nama_posyandu = $this->input->post('nama_posyandu'); // Data yang diambil dari form inputan
        $alamat = $this->input->post('alamat');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'nama_posyandu' => $nama_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
            'alamat' => $alamat,
            'keterangan' => $keterangan
        );

        $this->Crud->InputData('tb_posyandu',$data); // Untuk menyimpan ke database
        redirect('HalamanPosyandu/daftar_posyandu');
	}

    public function edit_posyandu()
	{
        $id_posyandu = $this->input->post('id_posyandu');
        $nama_posyandu = $this->input->post('nama_posyandu'); // Data yang diambil dari form inputan
        $alamat = $this->input->post('alamat');
        $keterangan = $this->input->post('keterangan');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_posyandu' => $nama_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
            'alamat' => $alamat,
            'keterangan' => $keterangan
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_posyandu', $data, $where); // Untuk menyimpan ke database
        redirect('HalamanPosyandu/daftar_posyandu');
	}

    public function hapus_posyandu($id_posyandu)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_posyandu', $where); // Untuk menyimpan ke database
    redirect('HalamanPosyandu');
    }

    //Jadwal Posyandu
    public function jadwal_posyandu()
	{
        $data = array(
            'judul' => 'Jadwal Posyandu',
            'jadwal_posyandu' => $this->Crud->TampilJadwal()->result(), // Buat Menampilkan Tabel Dari Database1
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanposyandu/jadwal_posyandu'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_jadwal()
	{
        $id_posyandu = $this->input->post('id_posyandu'); // Data yang diambil dari form inputan
        $jan = $this->input->post('jan');
        $feb = $this->input->post('feb');
        $mar = $this->input->post('mar');
        $apr = $this->input->post('apr');
        $mei = $this->input->post('mei');
        $jun = $this->input->post('jun');
        $jul = $this->input->post('jul');
        $agust = $this->input->post('agust');
        $sep = $this->input->post('sep');
        $okt = $this->input->post('okt');
        $nov = $this->input->post('nov');
        $des = $this->input->post('des');

        $data = array(
            'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
            'jan' => $jan,
            'feb' => $feb,
            'mar' => $mar,
            'apr' => $apr,
            'mei' => $mei,
            'jun' => $jun,
            'jul' => $jul,
            'agust' => $agust,
            'sep' => $sep,
            'okt' => $okt,
            'nov' => $nov,
            'des' => $des,
            'status' => 1
        );

        $this->Crud->InputData('tb_jadwalposyandu',$data); // Untuk menyimpan ke database
        redirect('HalamanPosyandu/jadwal_posyandu');
	}

    public function edit_jadwal()
	{
        $id_posyandu = $this->input->post('id_posyandu'); // Data yang diambil dari form inputan
        $jan = $this->input->post('jan');
        $feb = $this->input->post('feb');
        $mar = $this->input->post('mar');
        $apr = $this->input->post('apr');
        $mei = $this->input->post('mei');
        $jun = $this->input->post('jun');
        $jul = $this->input->post('jul');
        $agust = $this->input->post('agust');
        $sep = $this->input->post('sep');
        $okt = $this->input->post('okt');
        $nov = $this->input->post('nov');
        $des = $this->input->post('des');

        $data = array(
            'jan' => $jan,
            'feb' => $feb,
            'mar' => $mar,
            'apr' => $apr,
            'mei' => $mei,
            'jun' => $jun,
            'jul' => $jul,
            'agust' => $agust,
            'sep' => $sep,
            'okt' => $okt,
            'nov' => $nov,
            'des' => $des
        );

        $where = array(
            'id_posyandu' => $id_posyandu, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_jadwalposyandu',$data, $where); // Untuk menyimpan ke database
        redirect('HalamanPosyandu/jadwal_posyandu');
	}

    public function hapus_kegiatanposyandu($id_kegiatanposyandu)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_kegiatanposyandu' => $id_kegiatanposyandu, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_kegiatanposyandu', $where); // Untuk menyimpan ke database
    redirect('HalamanPosyandu');
    }

    //function laporan
    public function laporan_kegiatanposyandu()
	{
        $data = array(
            'judul' => 'Laporan Data Kegiatan Posyandu',
            'kegiatan' => $this->Crud->TampilKegiatan()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_kegiatanposyandu', $data); // ini Dinamis
	}

    public function laporan_poli_gigi()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'pelayanan' => $this->Crud->tampilPelayananPoliGigi()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_poli_gigi', $data); // ini Dinamis
	}

}
