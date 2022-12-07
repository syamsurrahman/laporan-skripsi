<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanDokter extends CI_Controller {


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
            'judul' => 'Data Dokter',
            'dokter' => $this->Crud->TampilDokter()->result(), // Buat Memanggil Tabel Dari Database
            'poli' => $this->Crud->TampilData('tb_poli')->result() // Buat Menampilkan Pilihan Nama Poli Dari Database
        );
		$this->load->view('layout/head', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/header');
        $this->load->view('halamandokter/index'); // ini Dinamis
        $this->load->view('layout/footer');
	}

    public function input_dokter()
	{
        $nip = $this->input->post('nip'); // Data yang diambil dari form inputan
        $nama_dokter = $this->input->post('nama_dokter');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $keahlian = $this->input->post('keahlian');
        $id_poli = $this->input->post('id_poli');
        $no_hp = $this->input->post('no_hp');
        $id_poli = $this->input->post('id_poli');

        $data = array(
            'nip' => $nip, // Data Yang ada Didatabase => Data yang ada diinputan
            'nama_dokter' => $nama_dokter,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'keahlian' => $keahlian,
            'id_poli' => $id_poli,
            'no_hp' => $no_hp
        );

        $this->Crud->InputData('tb_dokter',$data); // Untuk menyimpan ke database
        $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Diinputakan'
                })");
        redirect('HalamanDokter');
	}

    public function edit_dokter()
	{
        $id_dokter = $this->input->post('id_dokter'); // Data yang diambil dari form inputan
        $nip = $this->input->post('nip');
        $nama_dokter = $this->input->post('nama_dokter');
        $jabatan = $this->input->post('jabatan');
        $golongan  = $this->input->post('golongan');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $keahlian = $this->input->post('keahlian');
        $id_poli = $this->input->post('id_poli');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            // Data Yang ada Didatabase => Data yang ada diinputan
            'nip' => $nip,
            'nama_dokter' => $nama_dokter,
            'jabatan' => $jabatan,
            'golongan' => $golongan,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'keahlian' => $keahlian,
            'id_poli' => $id_poli,
            'no_hp' => $no_hp
        );

        // Fungsi Where adalah untuk mencari data mana yang mau di ubah
        $where = array(
            'id_dokter' => $id_dokter, // Data Yang ada Didatabase => Data yang ada diinputan
        );

        $this->Crud->EditData('tb_dokter', $data, $where); // Untuk menyimpan ke database
        $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Diubah!'
                })");
        redirect('HalamanDokter');
	}

    public function hapus_dokter($id_dokter)
    {
     // Fungsi Where adalah untuk mencari data mana yang mau di hapus
     $where = array(
        'id_dokter' => $id_dokter, // Data Yang ada Didatabase => Data yang ada diinputan
    );

    $this->Crud->HapusData('tb_dokter', $where); // Untuk menyimpan ke database
    $this->session->set_flashdata('notif', "
                Toast.fire({
                icon: 'success',
                title: 'Data Berhasil Dihapus!'
                })");
    redirect('HalamanDokter');
    }

    public function laporan()
	{
		$data['dokter'] = $this->Crud->TampilData('tb_dokter')->result();
		$mpdf = new \Mpdf\Mpdf();
		$cetak = $this->load->view('laporan_dokter', $data, TRUE);
		$mpdf->AddPage(
			'L',
			'',
			'',
			'',
			'',
			10,
			10,
			32,
			5,
			12
		);
		$mpdf->WriteHTML($cetak);
		$mpdf->Output();
	}
}
