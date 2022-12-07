<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanPemeriksaan extends CI_Controller {


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
            'judul' => 'Data Pemeriksaan',
            'totPoliAnak' => $this->Crud->totPoliAnak(),
            'totPoliGigi' => $this->Crud->totPoliGigi(),
            'totPoliKiaKB' => $this->Crud->totPoliKiaKB(),
            'totPoliUmum' => $this->Crud->totPoliUmum(),
            'totPoliGizi' => $this->Crud->totPoliGizi(),
            'totPoliLab' => $this->Crud->totPoliLab(),
            'totPoliTB' => $this->Crud->totPoliTB()
            // 'pemeriksaan' => $this->Crud->TampilData('tb_pemeriksaan')->result() // Buat Memanggil Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanPemeriksaan/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    //function link
    public function poli_anak()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Anak',
            'pelayanan' => $this->Crud->tampilPelayananPoliAnak()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_anak'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_gigi()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Gigi',
            'pelayanan' => $this->Crud->tampilPelayananPoliGigi()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_gigi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_kiakb()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli KIA & KB',
            'pelayanan' => $this->Crud->tampilPelayananPoliKiaKb()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_umum()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Umum',
            'pelayanan' => $this->Crud->tampilPelayananPoliUmum()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_gizi()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Gizi',
            'pelayanan' => $this->Crud->tampilPelayananPoliGizi()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_gizi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_lab()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli LAB',
            'pelayanan' => $this->Crud->tampilPelayananPoliLab()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function poli_tb()
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli TB',
            'pelayanan' => $this->Crud->tampilPelayananPoliTb()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/poli_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    //function periksa
    public function periksa_poli_anak($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Anak',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_anak'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function periksa_poli_gigi($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Gigi',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_gigi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function periksa_poli_kiakb($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli KIA & KB',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function catatan_poli_kiakb($id_pemeriksaan)
	{
        $data = array(
            'judul' => 'Catatan Kesehatan Ibu Hamil',
            'riwayat' => $this->Crud->tampilRiwayatKiaKb($this->db->where('id_pemeriksaan', $id_pemeriksaan))->row_array(),
            'catatan' => $this->Crud->TampilData('tb_periksa_kiakb', $id_pemeriksaan)->result(),
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/catatan_poli_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_catatan_kiakb($id_pemeriksaan)
	{
        $data = array(
            'judul' => 'Laporan Catatan Kesehatan Ibu Hamil',
            'riwayat' => $this->Crud->tampilRiwayatKiaKb($this->db->where('id_pemeriksaan', $id_pemeriksaan))->row_array(),
            'catatan' => $this->Crud->TampilData('tb_periksa_kiakb', $id_pemeriksaan)->result(),

            // 'riwayat' => $this->Crud->TampilData('tb_periksa_kiakb', $id_pemeriksaan)->result(),
            // 'catatan' => $this->Crud->tampilRiwayatKiaKb($this->db->where('id_pemeriksaan', $id_pemeriksaan))->row_array(),
        );
        $this->load->view('laporan/laporan_catatan_poli_kiakb', $data); // ini Dinamis
	}

    public function periksa_poli_umum($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Umum',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function periksa_poli_gizi($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Gizi',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_gizi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function periksa_poli_lab($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli Lab',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(),
            'pranata' => $this->Crud->TampilData('tb_pranata')->result(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_detail_lab($id_periksalab)
	{
        $data = array(
            'judul' => 'Laporan Detail Hasil Lab',
            'pelayanan' => $this->Crud->tampilPelayananPoliLab($this->db->where('id_periksalab', $id_periksalab))->row_array(),
        );
        $this->load->view('laporan/laporan_detail_lab', $data); // ini Dinamis
	}

    public function detail_poli_lab($id_periksalab)
	{
        $data = array(
            'judul' => 'Detail Data Poli Lab',
            'pelayanan' => $this->Crud->tampilPelayananPoliLab($this->db->where('id_periksalab', $id_periksalab))->row_array(),
            'pranata' => $this->Crud->TampilData('tb_pranata')->result(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/detail_poli_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}


    public function periksa_poli_tb($id_pelayanan)
	{
        $data = array(
            'judul' => 'Pemeriksaan Data Poli TB',
            'pelayanan' => $this->Crud->TampilPelayanan($this->db->where('id_pelayanan', $id_pelayanan))->row_array(), // Buat Menampilkan Tabel Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/periksa_poli_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    // tambah data periksa
    public function input_periksa_poli_anak()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $tb = $this->input->post('tb');
        $bb = $this->input->post('bb');
        $diagnosa = $this->input->post('diagnosa');
        $rujukan = $this->input->post('rujukan');
        $keterangan = $this->input->post('keterangan');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 11,
            'id_pelayanan' => $id_pelayanan,
            'tb' => $tb,
            'bb' => $bb,
            'diagnosa' => $diagnosa,
            'rujukan' => $rujukan,
            'keterangan' => $keterangan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_anak');
	}

    public function input_periksa_poli_gigi()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $diagnosa = $this->input->post('diagnosa');
        $rujukan = $this->input->post('rujukan');
        $keterangan = $this->input->post('keterangan');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 6,
            'id_pelayanan' => $id_pelayanan,
            'diagnosa' => $diagnosa,
            'rujukan' => $rujukan,
            'keterangan' => $keterangan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_gigi');
	}

    public function input_periksa_poli_kiakb()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $hpht = $this->input->post('hpht');
        $htp = $this->input->post('htp');
        $hamil_ke = $this->input->post('hamil_ke');
        $rujukan = $this->input->post('rujukan');
        $keterangan = $this->input->post('keterangan');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 7,
            'id_pelayanan' => $id_pelayanan,
            'hpht' => $hpht,
            'htp' => $htp,
            'hamil_ke' => $hamil_ke,
            'rujukan' => $rujukan,
            'keterangan' => $keterangan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_kiakb');
	}

    public function input_catatan_kehamilan()
	{
        $id_pemeriksaan = $this->input->post('id_pemeriksaan'); // Data yang diambil dari form inputan
        $keluhan_sekarang = $this->input->post('keluhan_sekarang');
        $tekanan_darah = $this->input->post('tekanan_darah');
        $bb = $this->input->post('bb');
        $umur_kehamilan = $this->input->post('umur_kehamilan');
        $jarak_kehamilan = $this->input->post('jarak_kehamilan');
        $tinggi_fundus = $this->input->post('tinggi_fundus');
        $letak_janin = $this->input->post('letak_janin');
        $denyut_jantung_janin = $this->input->post('denyut_jantung_janin');
        $kaki_bengkak = $this->input->post('kaki_bengkak');
        $hasil_periksa_lab = $this->input->post('hasil_periksa_lab');
        $tindakan = $this->input->post('tindakan');
        $nasihat = $this->input->post('nasihat');
        $keterangan = $this->input->post('keterangan');
        $harus_kembali = $this->input->post('harus_kembali');

        $data = array(
            'id_pemeriksaan' => $id_pemeriksaan, // Data Yang ada Didatabase => Data yang ada diinputan
            'keluhan_sekarang' => $keluhan_sekarang,
            'tekanan_darah' => $tekanan_darah,
            'bb' => $bb,
            'umur_kehamilan' => $umur_kehamilan,
            'jarak_kehamilan' => $jarak_kehamilan,
            'tinggi_fundus' => $tinggi_fundus,
            'letak_janin' => $letak_janin,
            'denyut_jantung_janin' => $denyut_jantung_janin,
            'kaki_bengkak' => $kaki_bengkak,
            'hasil_periksa_lab' => $hasil_periksa_lab,
            'tindakan' => $tindakan,
            'nasihat' => $nasihat,
            'keterangan' => $keterangan,
            'harus_kembali' => $harus_kembali
        );

        $this->Crud->InputData('tb_periksa_kiakb', $data); // Untuk menyimpan ke database tb pemeriksaan
        redirect('HalamanPemeriksaan/catatan_poli_kiakb/' . $id_pemeriksaan);
	}

    public function input_periksa_poli_umum()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $diagnosa = $this->input->post('diagnosa');
        $rujukan = $this->input->post('rujukan');
        $keterangan = $this->input->post('keterangan');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 10,
            'id_pelayanan' => $id_pelayanan,
            'diagnosa' => $diagnosa,
            'rujukan' => $rujukan,
            'keterangan' => $keterangan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_umum');
	}

    public function input_periksa_poli_gizi()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $diagnosa = $this->input->post('diagnosa');
        $rujukan = $this->input->post('rujukan');
        $keterangan = $this->input->post('keterangan');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 10,
            'id_pelayanan' => $id_pelayanan,
            'diagnosa' => $diagnosa,
            'rujukan' => $rujukan,
            'keterangan' => $keterangan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_gizi');
	}

    public function input_periksa_poli_lab($id_pelayanan)
	{
        $spesimen = $this->input->post('spesimen'); // Data yang diambil dari form inputan
        $tgl_pengambilan = $this->input->post('tgl_pengambilan'); // Data yang diambil dari form inputan
        $jam_pengambilan = $this->input->post('jam_pengambilan'); // Data yang diambil dari form inputan
        $tgl_pemeriksaan = $this->input->post('tgl_pemeriksaan'); // Data yang diambil dari form inputan
        $jam_pemeriksaan = $this->input->post('jam_pemeriksaan'); // Data yang diambil dari form inputan
        $id_pranata = $this->input->post('id_pranata'); // Data yang diambil dari form inputan
        $hemoglobin = $this->input->post('hemoglobin'); // Data yang diambil dari form inputan
        $hematocrit = $this->input->post('hematocrit'); // Data yang diambil dari form inputan
        $hitung_eritrosit = $this->input->post('hitung_eritrosit'); // Data yang diambil dari form inputan
        $hitung_trombosit = $this->input->post('hitung_trombosit'); // Data yang diambil dari form inputan
        $hitung_leukosit = $this->input->post('hitung_leukosit'); // Data yang diambil dari form inputan
        $laju_endap_darah = $this->input->post('laju_endap_darah'); // Data yang diambil dari form inputan
        $diffcount = $this->input->post('diffcount'); // Data yang diambil dari form inputan
        $warna = $this->input->post('warna'); // Data yang diambil dari form inputan
        $kejernihan = $this->input->post('kejernihan'); // Data yang diambil dari form inputan
        $bau = $this->input->post('bau'); // Data yang diambil dari form inputan
        $volume = $this->input->post('volume'); // Data yang diambil dari form inputan
        $ph = $this->input->post('ph'); // Data yang diambil dari form inputan
        $berat_jenis = $this->input->post('berat_jenis'); // Data yang diambil dari form inputan
        $protein = $this->input->post('protein'); // Data yang diambil dari form inputan
        $glukosa = $this->input->post('glukosa'); // Data yang diambil dari form inputan
        $bilirubin = $this->input->post('bilirubin'); // Data yang diambil dari form inputan
        $urobilinogen = $this->input->post('urobilinogen'); // Data yang diambil dari form inputan
        $keton = $this->input->post('keton'); // Data yang diambil dari form inputan
        $nitrit = $this->input->post('nitrit'); // Data yang diambil dari form inputan
        $bakteri = $this->input->post('bakteri'); // Data yang diambil dari form inputan
        $crystal = $this->input->post('crystal'); // Data yang diambil dari form inputan
        $sedimen = $this->input->post('sedimen'); // Data yang diambil dari form inputan
        $glukosa_sewaktu = $this->input->post('glukosa_sewaktu'); // Data yang diambil dari form inputan
        $glukosa_puasa = $this->input->post('glukosa_puasa'); // Data yang diambil dari form inputan
        $asam_urat = $this->input->post('asam_urat'); // Data yang diambil dari form inputan
        $trigliserida = $this->input->post('trigliserida'); // Data yang diambil dari form inputan
        $cholestrol_total = $this->input->post('cholestrol_total'); // Data yang diambil dari form inputan
        $tuberculosis = $this->input->post('tuberculosis'); // Data yang diambil dari form inputan
        $malaria = $this->input->post('malaria'); // Data yang diambil dari form inputan
        $tes_kehamilan = $this->input->post('tes_kehamilan'); // Data yang diambil dari form inputan
        $golongan_darah = $this->input->post('golongan_darah'); // Data yang diambil dari form inputan
        $widal = $this->input->post('widal'); // Data yang diambil dari form inputan
        $anti_hiv = $this->input->post('anti_hiv'); // Data yang diambil dari form inputan
        $antigen = $this->input->post('antigen'); // Data yang diambil dari form inputan
        $syphilis = $this->input->post('syphilis'); // Data yang diambil dari form inputan
        $konsistensi = $this->input->post('konsistensi'); // Data yang diambil dari form inputan
        $warna1 = $this->input->post('warna1'); // Data yang diambil dari form inputan
        $bau1 = $this->input->post('bau1'); // Data yang diambil dari form inputan
        $lendir_darah = $this->input->post('lendir_darah'); // Data yang diambil dari form inputan
        $telur_cacing = $this->input->post('telur_cacing'); // Data yang diambil dari form inputan
        $amuba = $this->input->post('amuba'); // Data yang diambil dari form inputan
        $eritrosit = $this->input->post('eritrosit'); // Data yang diambil dari form inputan
        $leukosit = $this->input->post('leukosit'); // Data yang diambil dari form inputan

        $data1 = array(
            'id_pelayanan' => $id_pelayanan, // Data Yang ada Didatabase => Data yang ada diinputan
            'spesimen' => $spesimen, // Data Yang ada Didatabase => Data yang ada diinputan
            'tgl_pengambilan' => $tgl_pengambilan, // Data Yang ada Didatabase => Data yang ada diinputan
            'jam_pengambilan' => $jam_pengambilan, // Data Yang ada Didatabase => Data yang ada diinputan
            'tgl_pemeriksaan' => $tgl_pemeriksaan, // Data Yang ada Didatabase => Data yang ada diinputan
            'jam_pemeriksaan' => $jam_pemeriksaan, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_pranata' => $id_pranata, // Data Yang ada Didatabase => Data yang ada diinputan
            'hematocrit' => $hematocrit, // Data Yang ada Didatabase => Data yang ada diinputan
            'hemoglobin' => $hemoglobin, // Data Yang ada Didatabase => Data yang ada diinputan
            'hitung_eritrosit' => $hitung_eritrosit, // Data Yang ada Didatabase => Data yang ada diinputan
            'hitung_trombosit' => $hitung_trombosit, // Data Yang ada Didatabase => Data yang ada diinputan
            'hitung_leukosit' => $hitung_leukosit, // Data Yang ada Didatabase => Data yang ada diinputan
            'laju_endap_darah' => $laju_endap_darah, // Data Yang ada Didatabase => Data yang ada diinputan
            'diffcount' => $diffcount, // Data Yang ada Didatabase => Data yang ada diinputan
            'warna' => $warna, // Data Yang ada Didatabase => Data yang ada diinputan
            'kejernihan' => $kejernihan, // Data Yang ada Didatabase => Data yang ada diinputan
            'bau' => $bau, // Data Yang ada Didatabase => Data yang ada diinputan
            'volume' => $volume, // Data Yang ada Didatabase => Data yang ada diinputan
            'ph' => $ph, // Data Yang ada Didatabase => Data yang ada diinputan
            'berat_jenis' => $berat_jenis, // Data Yang ada Didatabase => Data yang ada diinputan
            'protein' => $protein, // Data Yang ada Didatabase => Data yang ada diinputan
            'glukosa' => $glukosa, // Data Yang ada Didatabase => Data yang ada diinputan
            'bilirubin' => $bilirubin, // Data Yang ada Didatabase => Data yang ada diinputan
            'urobilinogen' => $urobilinogen, // Data Yang ada Didatabase => Data yang ada diinputan
            'keton' => $keton, // Data Yang ada Didatabase => Data yang ada diinputan
            'nitrit' => $nitrit, // Data Yang ada Didatabase => Data yang ada diinputan
            'bakteri' => $bakteri, // Data Yang ada Didatabase => Data yang ada diinputan
            'crystal' => $crystal, // Data Yang ada Didatabase => Data yang ada diinputan
            'sedimen' => $sedimen, // Data Yang ada Didatabase => Data yang ada diinputan
            'glukosa_sewaktu' => $glukosa_sewaktu, // Data Yang ada Didatabase => Data yang ada diinputan
            'glukosa_puasa' => $glukosa_puasa, // Data Yang ada Didatabase => Data yang ada diinputan
            'asam_urat' => $asam_urat, // Data Yang ada Didatabase => Data yang ada diinputan
            'trigliserida' => $trigliserida, // Data Yang ada Didatabase => Data yang ada diinputan
            'cholestrol_total' => $cholestrol_total, // Data Yang ada Didatabase => Data yang ada diinputan
            'tuberculosis' => $tuberculosis, // Data Yang ada Didatabase => Data yang ada diinputan
            'malaria' => $malaria, // Data Yang ada Didatabase => Data yang ada diinputan
            'tes_kehamilan' => $tes_kehamilan, // Data Yang ada Didatabase => Data yang ada diinputan
            'golongan_darah' => $golongan_darah, // Data Yang ada Didatabase => Data yang ada diinputan
            'widal' => $widal, // Data Yang ada Didatabase => Data yang ada diinputan
            'anti_hiv' => $anti_hiv, // Data Yang ada Didatabase => Data yang ada diinputan
            'antigen' => $antigen, // Data Yang ada Didatabase => Data yang ada diinputan
            'syphilis' => $syphilis, // Data Yang ada Didatabase => Data yang ada diinputan
            'konsistensi' => $konsistensi, // Data Yang ada Didatabase => Data yang ada diinputan
            'warna1' => $warna1, // Data Yang ada Didatabase => Data yang ada diinputan
            'bau1' => $bau1, // Data Yang ada Didatabase => Data yang ada diinputan
            'lendir_darah' => $lendir_darah, // Data Yang ada Didatabase => Data yang ada diinputan
            'telur_cacing' => $telur_cacing, // Data Yang ada Didatabase => Data yang ada diinputan
            'amuba' => $amuba, // Data Yang ada Didatabase => Data yang ada diinputan
            'eritrosit' => $eritrosit, // Data Yang ada Didatabase => Data yang ada diinputan
            'leukosit' => $leukosit, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_periksa_lab', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_lab');
	}

    public function input_periksa_poli_tb()
	{
        $id_pasien = $this->input->post('id_pasien'); // Data yang diambil dari form inputan
        $id_poli = $this->input->post('id_poli');
        $id_pelayanan = $this->input->post('id_pelayanan');
        $kelas = $this->input->post('kelas');
        $tgl_berobat = $this->input->post('tgl_berobat');
        $memori_hasil = $this->input->post('memori_hasil');

        $data1 = array(
            'id_pasien' => $id_pasien, // Data Yang ada Didatabase => Data yang ada diinputan
            'id_poli' => $id_poli,
            'id_dokter' => 10,
            'id_pelayanan' => $id_pelayanan,
            'kelas' => $kelas,
            'tgl_berobat' => $tgl_berobat,
            'memori_hasil' => $memori_hasil
        );

        $data2 = array(
            'status_pemeriksaan' => 1
        );

        $where = array(
            'id_pelayanan' => $id_pelayanan,
        );


        $this->Crud->InputData('tb_pemeriksaan', $data1); // Untuk menyimpan ke database tb pemeriksaan
        $this->Crud->EditData('tb_pelayanan', $data2, $where); // Untuk menyimpan ke database tb pelayanan
        redirect('HalamanPemeriksaan/poli_tb');
	}


    public function hapus_pelayanan($id_pelayanan)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_pelayanan' => $id_pelayanan, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_pelayanan', $where); // Untuk menyimpan ke database
    redirect('HalamanPelayanan');
    }

    //FILTER DAN LAPORAN POLI UMUM
    public function formlaporan_umum()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'pelayanan' => $this->Crud->tampilPelayananPoliUmum()->result() // Buat Menampilkan Pilihan pasien/no RM

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_umum()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_poliumum_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_poliumum_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_umum()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_poliumum_bulan($tahun, $bulan)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_poliumum_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_umum()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_umum'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_poliumum_tanggal($tgl_awal, $tgl_akhir)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'filter' => $this->Crud->TampilPoliUmumTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_poliumum_tanggal', $data); // ini Dinamis

	}

    //FILTER DAN LAPORAN POLI GIGI
    public function formlaporan_gigi()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'pelayanan' => $this->Crud->tampilPelayananPoliGigi()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_gigi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_gigi()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_gigi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_poligigi_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_poligigi_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_gigi()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_gigi'); // ini Dinamis
        $this->load->view('layout/footer');

	}

    public function laporan_poligigi_bulan($tahun, $bulan)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_poligigi_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_gigi()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_gigi'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_poligigi_tanggal($tgl_awal, $tgl_akhir)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'filter' => $this->Crud->TampilPoliGigiTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_poligigi_tanggal', $data); // ini Dinamis

	}
    
    //FILTER DAN LAPORAN POLI ANAK
    public function formlaporan_anak()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'pelayanan' => $this->Crud->tampilPelayananPoliAnak()->result() // Buat Menampilkan Pilihan pasien/no RM

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_anak'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_anak()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Data Poli anak',
            'filter' => $this->Crud->TampilPoliAnakTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_anak'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polianak_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'filter' => $this->Crud->TampilPoliAnakTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_polianak_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_anak()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Data Poli anak',
            'filter' => $this->Crud->TampilPoliAnakBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_anak'); // ini Dinamis
        $this->load->view('layout/footer');

	}

    public function laporan_polianak_bulan($tahun, $bulan)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'filter' => $this->Crud->TampilPoliAnakBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_polianak_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_anak()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'filter' => $this->Crud->TampilPoliAnakTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_anak'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polianak_tanggal($tgl_awal, $tgl_akhir)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'filter' => $this->Crud->TampilPoliAnakTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_polianak_tanggal', $data); // ini Dinamis

	}

    //FILTER DAN LAPORAN POLI KIAKB
    public function formlaporan_kiakb()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'pelayanan' => $this->Crud->tampilPelayananPoliKiaKb()->result() // Buat Menampilkan Pilihan pasien/no RM

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_kiakb()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Data Poli Kia & Kb',
            'filter' => $this->Crud->TampilPoliKiaKbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    // public function laporan_polikiakb_tahun($tahun)
	// {

    //     $data = array(
    //         'judul' => 'Laporan Data Poli Kia & KB',
    //         'filter' => $this->Crud->TampilPoliKiaKbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
    //         'tahun' => $tahun

    //     );
    //     $this->load->view('laporan/laporan_polikiakb_tahun', $data); // ini Dinamis

	// }

    public function laporan_polikiakb_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'filter' => $this->Crud->TampilPoliKiaKbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_polikiakb_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_kiakb()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'filter' => $this->Crud->TampilPoliKiaKbBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');

	}

    public function laporan_polikiakb_bulan($tahun, $bulan)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'filter' => $this->Crud->tampilPoliKiaKbBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_polikiakb_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_kiakb()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'filter' => $this->Crud->TampilPoliKiaKbTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_kiakb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polikiakb_tanggal($tgl_awal, $tgl_akhir)
	{
        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'filter' => $this->Crud->TampilPoliKiaKbTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_polikiakb_tanggal', $data); // ini Dinamis

	}

    //FILTER DAN LAPORAN POLI TB
    public function formlaporan_tb()
	{
        $data = array(
            'judul' => 'Laporan Poli TB',
            'pelayanan' => $this->Crud->tampilPelayananPoliTb()->result() // Buat Menampilkan Pilihan pasien/no RM

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_tb()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Poli TB',
            'filter' => $this->Crud->TampilPoliTbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_politb_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli TB',
            'filter' => $this->Crud->TampilPoliTbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_politb_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_tb()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Poli TB',
            'filter' => $this->Crud->TampilPoliTbBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_politb_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Laporan Data Poli TB',
            'filter' => $this->Crud->TampilPoliTbBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_politb_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_tb()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Poli TB',
            'filter' => $this->Crud->TampilPoliTbTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_tb'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_politb_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Laporan Data Poli TB',
            'filter' => $this->Crud->TampilPoliTbTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_politb_tanggal', $data); // ini Dinamis

	}

    //FILTER DAN LAPORAN POLI LAB
    public function formlaporan_lab()
	{
        $data = array(
            'judul' => 'Laporan Poli Lab',
            'pelayanan' => $this->Crud->tampilPelayananPoliLab()->result() // Buat Menampilkan Pilihan pasien/no RM

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/formlaporan_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function filter_tahun_lab()
	{
        $tahun = $this->input->post('tahun');

        $data = array(
            'judul' => 'Laporan Poli Lab',
            'filter' => $this->Crud->TampilPoliLabTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tahun_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polilab_tahun($tahun)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Lab',
            'filter' => $this->Crud->TampilPoliLabTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun

        );
        $this->load->view('laporan/laporan_polilab_tahun', $data); // ini Dinamis

	}

    public function filter_bulan_lab()
	{
        $tahun = $this->input->post('tahun');
        $bulan = $this->input->post('bulan');

        $data = array(
            'judul' => 'Laporan Poli Lab',
            'filter' => $this->Crud->TampilPoliLabBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_bulan_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polilab_bulan($tahun, $bulan)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Lab',
            'filter' => $this->Crud->TampilPoliLabBulan($tahun, $bulan)->result(), // Buat Menampilkan Tabel Dari Database
            'tahun' => $tahun,
            'bulan' => $bulan

        );
        $this->load->view('laporan/laporan_polilab_bulan', $data); // ini Dinamis

	}

    public function filter_tanggal_lab()
	{
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');

        $data = array(
            'judul' => 'Laporan Poli Lab',
            'filter' => $this->Crud->TampilPoliLabTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamanpemeriksaan/r_tanggal_lab'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function laporan_polilab_tanggal($tgl_awal, $tgl_akhir)
	{

        $data = array(
            'judul' => 'Laporan Data Poli Lab',
            'filter' => $this->Crud->TampilPoliLabTanggal($tgl_awal, $tgl_akhir)->result(), // Buat Menampilkan Tabel Dari Database
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir

        );
        $this->load->view('laporan/laporan_polilab_tanggal', $data); // ini Dinamis

	}

    // public function laporan_polikiakb_tahun($tahun)
	// {

    //     $data = array(
    //         'judul' => 'Data Poli Kia & KB',
    //         'filter' => $this->Crud->TampilPoliKiaKbTahun($tahun)->result(), // Buat Menampilkan Tabel Dari Database
    //         'tahun' => $tahun

    //     );
    //     $this->load->view('laporan/laporan_polikiakb_tahun', $data); // ini Dinamis

	// }
    
    //function laporan
    public function laporan_poli_anak()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Anak',
            'pelayanan' => $this->Crud->tampilPelayananPoliAnak()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_poli_anak', $data); // ini Dinamis
	}

    public function laporan_poli_gigi()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Gigi',
            'pelayanan' => $this->Crud->tampilPelayananPoliGigi()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_poli_gigi', $data); // ini Dinamis
	}

    public function laporan_poli_kiakb()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Kia & KB',
            'pelayanan' => $this->Crud->tampilPelayananPoliKiaKb()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_poli_kiakb', $data); // ini Dinamis
	}

    public function laporan_poli_umum()
	{
        $data = array(
            'judul' => 'Laporan Data Poli Umum',
            'pelayanan' => $this->Crud->tampilPelayananPoliUmum()->result() // Buat Menampilkan Pilihan pasien/no RM
        );
        $this->load->view('laporan/laporan_poli_umum', $data); // ini Dinamis
	}
}
