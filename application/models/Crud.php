<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Model
{
    public function TampilData($table)
    {
        return $this->db->get($table);
    }

    public function InputData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function EditData($table, $data, $where)
    {
        $this->db->Where($where);
        $this->db->update($table, $data);
    }

    public function HapusData($table, $where)
    {
        $this->db->delete($table, $where);
    }

    // Tampilan Perawat Join Table dengan Table Poli
    public function TampilPerawat()
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_perawat'); // Pilih Database Asal
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_perawat.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();

    }

    public function TampilDokter()
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_dokter'); // Pilih Database Asal
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_dokter.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilPelayanan()
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_pelayanan.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilPelayananTahun($tahun)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_pelayanan.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun);
        return $this->db->get();
    }

    public function TampilPelayananBulan($tahun, $bulan)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_pelayanan.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun);
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan);
        return $this->db->get();
    }

    public function TampilPelayananTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_poli', 'tb_poli.id_poli = tb_pelayanan.id_poli'); // Gabungkan ke Database Tujuan lalu Cari id nya
        
        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        return $this->db->get();
    }

    public function TampilVaksin()
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_vaksinasi'); // Pilih Database Asal
        $this->db->join('tb_vaksin', 'tb_vaksin.id_vaksin = tb_vaksinasi.id_vaksin'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_vaksinasi.id_dokter'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilVaksinTahun($tahun)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_vaksinasi'); // Pilih Database Asal
        $this->db->join('tb_vaksin', 'tb_vaksin.id_vaksin = tb_vaksinasi.id_vaksin'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_vaksinasi.id_dokter'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_vaksinasi.tgl_vaksin)', $tahun);
        $this->db->order_by('tgl_vaksin', 'DESC');
        return $this->db->get();
    }

    public function TampilVaksinBulan($tahun, $bulan)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_vaksinasi'); // Pilih Database Asal
        $this->db->join('tb_vaksin', 'tb_vaksin.id_vaksin = tb_vaksinasi.id_vaksin'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_vaksinasi.id_dokter'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_vaksinasi.tgl_vaksin)', $tahun);
        $this->db->where('MONTH(tb_vaksinasi.tgl_vaksin)', $bulan);
        return $this->db->get();
    }

    public function TampilVaksinTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_vaksinasi'); // Pilih Database Asal
        $this->db->join('tb_vaksin', 'tb_vaksin.id_vaksin = tb_vaksinasi.id_vaksin'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_vaksinasi.id_dokter'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_vaksinasi.tgl_vaksin >=', $tgl_awal);
        $this->db->where('tb_vaksinasi.tgl_vaksin <=', $tgl_akhir);
        return $this->db->get();
    }

    public function TampilRiwayatImunisasi($id_balita)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_balita.id_balita', $id_balita);
        return $this->db->get();
    }

    public function TampilImunisasi()
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilImunisasiTahun($tahun)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_imunisasi.tgl_penyuntikan)', $tahun);
        return $this->db->get();
    }

    public function TampilImunisasiBulan($tahun, $bulan)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_imunisasi.tgl_penyuntikan)', $tahun);
        $this->db->where('MONTH(tb_imunisasi.tgl_penyuntikan)', $bulan);
        return $this->db->get();
    }

    public function TampilImunisasiTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        
        $this->db->where('tb_imunisasi.tgl_penyuntikan >=', $tgl_awal);
        $this->db->where('tb_imunisasi.tgl_penyuntikan <=', $tgl_akhir);
        return $this->db->get();
    }

    public function TampilJadwalImunisasiTahun($tahun)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_imunisasi.keterangan)', $tahun);
        return $this->db->get();
    }

    public function TampilJadwalImunisasiBulan($tahun, $bulan)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(tb_imunisasi.keterangan)', $tahun);
        $this->db->where('MONTH(tb_imunisasi.keterangan)', $bulan);
        return $this->db->get();
    }

    public function TampilJadwalImunisasiTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_balita'); // Pilih Database Asal
        $this->db->join('tb_imunisasi', 'tb_imunisasi.id_balita = tb_balita.id_balita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_vaksinbalita', 'tb_vaksinbalita.id_vaksinbalita = tb_imunisasi.id_vaksinbalita'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan', 'tb_bidan.id_bidan = tb_imunisasi.id_bidan'); // Gabungkan ke Database Tujuan lalu Cari id nya
        
        $this->db->where('tb_imunisasi.keterangan >=', $tgl_awal);
        $this->db->where('tb_imunisasi.keterangan <=', $tgl_akhir);
        return $this->db->get();
    }

    public function TampilJadwal()
    {
        $this->db->select('a.*, b.jan as jan, b.feb as feb, b.mar as mar, b.apr as apr, b.mei as mei, b.jun as jun, b.jul as jul, b.agust as agust, b.sep as sep, b.okt as okt, b.nov as nov, b.des as des, b.status as status'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_posyandu a'); // Pilih Database Asal
        $this->db->join('tb_jadwalposyandu b', 'b.id_posyandu = a.id_posyandu', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }
    
    //KEGIATANPOSYANDU
    public function TampilKegiatan()
    {
        $this->db->select('a.*, b.nama_posyandu as nama_posyandu, b.alamat as alamat, c.nama_bidan as nama_bidan1, d.nama_bidan as nama_bidan2, e.nama_perawat as nama_perawat1, f.nama_perawat as nama_perawat2'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_kegiatanposyandu a'); // Pilih Database Asal
        $this->db->join('tb_posyandu b', 'b.id_posyandu = a.id_posyandu', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan c', 'c.id_bidan = a.id_bidan1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan d', 'd.id_bidan = a.id_bidan2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat e', 'e.id_perawat = a.id_perawat1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat f', 'f.id_perawat = a.id_perawat2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilKegiatanTahun($tahun)
    {
        $this->db->select('a.*, b.nama_posyandu as nama_posyandu, b.alamat as alamat, c.nama_bidan as nama_bidan1, d.nama_bidan as nama_bidan2, e.nama_perawat as nama_perawat1, f.nama_perawat as nama_perawat2'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_kegiatanposyandu a'); // Pilih Database Asal
        $this->db->join('tb_posyandu b', 'b.id_posyandu = a.id_posyandu', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan c', 'c.id_bidan = a.id_bidan1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan d', 'd.id_bidan = a.id_bidan2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat e', 'e.id_perawat = a.id_perawat1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat f', 'f.id_perawat = a.id_perawat2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(a.tanggal)', $tahun);

        return $this->db->get();
    }

    public function TampilKegiatanBulan($tahun, $bulan)
    {
        $this->db->select('a.*, b.nama_posyandu as nama_posyandu, b.alamat as alamat, c.nama_bidan as nama_bidan1, d.nama_bidan as nama_bidan2, e.nama_perawat as nama_perawat1, f.nama_perawat as nama_perawat2'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_kegiatanposyandu a'); // Pilih Database Asal
        $this->db->join('tb_posyandu b', 'b.id_posyandu = a.id_posyandu', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan c', 'c.id_bidan = a.id_bidan1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan d', 'd.id_bidan = a.id_bidan2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat e', 'e.id_perawat = a.id_perawat1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat f', 'f.id_perawat = a.id_perawat2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(a.tanggal)', $tahun);
        $this->db->where('MONTH(a.tanggal)', $bulan);

        return $this->db->get();
    }

    public function TampilKegiatanTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('a.*, b.nama_posyandu as nama_posyandu, b.alamat as alamat, c.nama_bidan as nama_bidan1, d.nama_bidan as nama_bidan2, e.nama_perawat as nama_perawat1, f.nama_perawat as nama_perawat2'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_kegiatanposyandu a'); // Pilih Database Asal
        $this->db->join('tb_posyandu b', 'b.id_posyandu = a.id_posyandu', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan c', 'c.id_bidan = a.id_bidan1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_bidan d', 'd.id_bidan = a.id_bidan2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat e', 'e.id_perawat = a.id_perawat1', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat f', 'f.id_perawat = a.id_perawat2', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        
        $this->db->where('a.tanggal >=', $tgl_awal);
        $this->db->where('a.tanggal <=', $tgl_akhir);
        return $this->db->get();
    }

    //KEGIATANPROMKES
    public function TampilPromkes()
    {
        $this->db->select('a.*, b.nama_bidan as nama_bidan, c.nama_perawat as nama_perawat, d.nama_kesmas as nama_kesmas'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_promkes a'); // Pilih Database Asal
        $this->db->join('tb_bidan b', 'b.id_bidan = a.id_bidan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat c', 'c.id_perawat = a.id_perawat', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_kesmas d', 'd.id_kesmas = a.id_kesmas', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function TampilPromkesTahun($tahun)
    {
        $this->db->select('a.*, b.nama_bidan as nama_bidan, c.nama_perawat as nama_perawat, d.nama_kesmas as nama_kesmas'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_promkes a'); // Pilih Database Asal
        $this->db->join('tb_bidan b', 'b.id_bidan = a.id_bidan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat c', 'c.id_perawat = a.id_perawat', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_kesmas d', 'd.id_kesmas = a.id_kesmas', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(a.tgl_promkes)', $tahun);

        return $this->db->get();
    }

    public function TampilPromkesBulan($tahun, $bulan)
    {
        $this->db->select('a.*, b.nama_bidan as nama_bidan, c.nama_perawat as nama_perawat, d.nama_kesmas as nama_kesmas'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_promkes a'); // Pilih Database Asal
        $this->db->join('tb_bidan b', 'b.id_bidan = a.id_bidan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat c', 'c.id_perawat = a.id_perawat', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_kesmas d', 'd.id_kesmas = a.id_kesmas', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('YEAR(a.tgl_promkes)', $tahun);
        $this->db->where('MONTH(a.tgl_promkes)', $bulan);

        return $this->db->get();
    }

    public function TampilPromkesTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('a.*, b.nama_bidan as nama_bidan, c.nama_perawat as nama_perawat, d.nama_kesmas as nama_kesmas'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_promkes a'); // Pilih Database Asal
        $this->db->join('tb_bidan b', 'b.id_bidan = a.id_bidan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_perawat c', 'c.id_perawat = a.id_perawat', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_kesmas d', 'd.id_kesmas = a.id_kesmas', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        
        $this->db->where('a.tgl_promkes >=', $tgl_awal);
        $this->db->where('a.tgl_promkes <=', $tgl_akhir);
        return $this->db->get();
    }

    public function generateNoRM()
    {
        $this->db->select('RIGHT(no_rm,4) as no_rm', false);
        $this->db->order_by('no_rm', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_pasien');

        if($query->num_rows() <> 0)
        {
            $data     = $query->row();
            $no_rekam = intval($data->no_rm) + 1;
        } else {
            $no_rekam = 1;
        }

        $lastKode = str_pad($no_rekam, 4, "0", STR_PAD_LEFT);
        $tahun = date('Y');

        $new_no_rm = $tahun . $lastKode;

        return $new_no_rm;
        
    }

    public function generateNoPelayanan()
    {
        $this->db->select('RIGHT(no_pelayanan,4) as no_pelayanan', false);
        $this->db->order_by('no_pelayanan', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_pelayanan');

        if($query->num_rows() <> 0)
        {
            $data     = $query->row();
            $no_pelayanan = intval($data->no_pelayanan) + 1;
        } else {
            $no_pelayanan = 1;
        }

        $lastKode = str_pad($no_pelayanan, 4, "0", STR_PAD_LEFT);
        $tahun = date('dmY');

        $new_no_pelayanan = "PKM-KD/" . $tahun . $lastKode;

        return $new_no_pelayanan;
    }


    public function generateTiketVaksin()
    {
        $this->db->select('RIGHT(no_tiket,4) as no_tiket', false);
        $this->db->order_by('no_tiket', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_vaksinasi');

        if($query->num_rows() <> 0)
        {
            $data     = $query->row();
            $no_tiket = intval($data->no_tiket) + 1;
        } else {
            $no_tiket = 1;
        }

        $lastKode = str_pad($no_tiket, 4, "0", STR_PAD_LEFT);
        $tahun = date('mY');

        $new_no_tiket = "P-KD-" . $tahun . $lastKode;

        return $new_no_tiket;
    }

    // Model Buat Menampilkan Total Kunjungan Poli Anak
    public function totPoliAnak()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 1); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliGigi()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 2); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliKiaKB()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 3); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliUmum()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 4); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliGizi()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 5); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliLab()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 6); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    public function totPoliTB()
    {
        $this->db->select('tb_pelayanan.*'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->where('id_poli =', 7); // Pilih Poli Sesuai ID
        return $this->db->get()->num_rows();
    }

    // Tampil Data Poli Anak Menggunakan Filter "WHERE"
    // POLIANAK
    public function tampilPelayananPoliAnak()
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.bb as bb, tb_pemeriksaan.tb as tb'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 1); // Pilih Poli Sesuai ID Poli Anak
        return $this->db->get();
    }

    public function tampilPoliAnakTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.bb as bb, tb_pemeriksaan.tb as tb'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 1); // Pilih Poli Sesuai ID Poli Anak
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliAnakBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.bb as bb, tb_pemeriksaan.tb as tb'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 1); // Pilih Poli Sesuai ID Poli Anak
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliAnakTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.bb as bb, tb_pemeriksaan.tb as tb'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 1); // Pilih Poli Sesuai ID Poli Anak

        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        return $this->db->get();
    }

    
    //POLIGIGI
    public function tampilPelayananPoliGigi()
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 2); // Pilih Poli Sesuai ID Poli Gigi
        return $this->db->get();
    }

    public function tampilPoliGigiTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 2); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliGigiBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 2); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliGigiTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 2); // Pilih Poli Sesuai ID Poli Gigi
        
        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        return $this->db->get();
    }

    //POLIKIAKB
    public function tampilPelayananPoliKiaKb()
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.hpht as hpht, tb_pemeriksaan.htp  as htp, tb_pemeriksaan.hamil_ke as hamil_ke, tb_pemeriksaan.id_pemeriksaan as id_pemeriksaan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 3); // Pilih Poli Sesuai ID Poli Gigi
        return $this->db->get();
    }

    public function tampilRiwayatKiaKb()
    {
        $this->db->select('tb_pemeriksaan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.hpht as hpht, tb_pemeriksaan.htp  as htp, tb_pemeriksaan.hamil_ke as hamil_ke, tb_pemeriksaan.id_pemeriksaan as id_pemeriksaan, tb_pelayanan.tgl_pelayanan as tgl_pelayanan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pemeriksaan'); // Pilih Database Asal
        $this->db->join('tb_pelayanan', 'tb_pelayanan.id_pelayanan = tb_pemeriksaan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pemeriksaan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        return $this->db->get();
    }

    public function tampilPoliKiaKbTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.hpht as hpht, tb_pemeriksaan.htp  as htp, tb_pemeriksaan.hamil_ke as hamil_ke, tb_pemeriksaan.id_pemeriksaan as id_pemeriksaan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 3); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliKiaKbBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.hpht as hpht, tb_pemeriksaan.htp  as htp, tb_pemeriksaan.hamil_ke as hamil_ke, tb_pemeriksaan.id_pemeriksaan as id_pemeriksaan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 3); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliKiaKbTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.hpht as hpht, tb_pemeriksaan.htp  as htp, tb_pemeriksaan.hamil_ke as hamil_ke, tb_pemeriksaan.id_pemeriksaan as id_pemeriksaan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 3); // Pilih Poli Sesuai ID Poli Gigi
        
        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        return $this->db->get();
    }

    //POLIUMUM
    public function tampilPelayananPoliUmum()
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.tekanan_darah as tekanan_darah, tb_pemeriksaan.denyut_jantung as denyut_jantung'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 4); // Pilih Poli Sesuai ID Poli Gigi
        return $this->db->get();
    }

    public function tampilPoliUmumTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.tekanan_darah as tekanan_darah, tb_pemeriksaan.denyut_jantung as denyut_jantung'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 4); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->order_by('tgl_pelayanan', 'DESC');

        return $this->db->get();
    }

    public function tampilPoliUmumBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.tekanan_darah as tekanan_darah, tb_pemeriksaan.denyut_jantung as denyut_jantung'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 4); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->order_by('tgl_pelayanan', 'DESC');

        return $this->db->get();
    }

    public function tampilPoliUmumTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pemeriksaan.diagnosa as diagnosa, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan, tb_pasien.no_rm as no_rm, tb_pemeriksaan.tekanan_darah as tekanan_darah, tb_pemeriksaan.denyut_jantung as denyut_jantung'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 4); // Pilih Poli Sesuai ID Poli Gigi

        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        $this->db->order_by('tgl_pelayanan', 'DESC');
        return $this->db->get();
    }

    //POLILAB
    public function tampilPelayananPoliLab()
    {
        $this->db->select('tb_pelayanan.*, tb_periksa_lab.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.no_rm as no_rm, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pranata.nama_pranata as nama_pranata, tb_periksa_lab.spesimen as spesimen, tb_periksa_lab.tgl_pengambilan as tgl_pengambilan, tb_periksa_lab.jam_pengambilan as jam_pengambilan, tb_periksa_lab.tgl_pemeriksaan as tgl_pemeriksaan, tb_periksa_lab.jam_pemeriksaan as jam_pemeriksaan, tb_periksa_lab.id_periksalab as id_periksalab'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_periksa_lab', 'tb_periksa_lab.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pranata', 'tb_pranata.id_pranata = tb_periksa_lab.id_pranata', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 6); // Pilih Poli Sesuai ID Poli Gigi
        return $this->db->get();
    }

    public function tampilPoliLabTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_periksa_lab.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.no_rm as no_rm, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pranata.nama_pranata as nama_pranata, tb_periksa_lab.spesimen as spesimen, tb_periksa_lab.tgl_pengambilan as tgl_pengambilan, tb_periksa_lab.jam_pengambilan as jam_pengambilan, tb_periksa_lab.tgl_pemeriksaan as tgl_pemeriksaan, tb_periksa_lab.jam_pemeriksaan as jam_pemeriksaan, tb_periksa_lab.id_periksalab as id_periksalab'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_periksa_lab', 'tb_periksa_lab.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pranata', 'tb_pranata.id_pranata = tb_periksa_lab.id_pranata', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 6); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliLabBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_periksa_lab.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.no_rm as no_rm, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pranata.nama_pranata as nama_pranata, tb_periksa_lab.spesimen as spesimen, tb_periksa_lab.tgl_pengambilan as tgl_pengambilan, tb_periksa_lab.jam_pengambilan as jam_pengambilan, tb_periksa_lab.tgl_pemeriksaan as tgl_pemeriksaan, tb_periksa_lab.jam_pemeriksaan as jam_pemeriksaan, tb_periksa_lab.id_periksalab as id_periksalab'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_periksa_lab', 'tb_periksa_lab.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pranata', 'tb_pranata.id_pranata = tb_periksa_lab.id_pranata', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 6); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pelayanan.tgl_pelayanan)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pelayanan.tgl_pelayanan)', $bulan); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliLabTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_periksa_lab.*, tb_pasien.nama_pasien as nama_pasien, tb_pasien.no_rm as no_rm, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pranata.nama_pranata as nama_pranata, tb_periksa_lab.spesimen as spesimen, tb_periksa_lab.tgl_pengambilan as tgl_pengambilan, tb_periksa_lab.jam_pengambilan as jam_pengambilan, tb_periksa_lab.tgl_pemeriksaan as tgl_pemeriksaan, tb_periksa_lab.jam_pemeriksaan as jam_pemeriksaan, tb_periksa_lab.id_periksalab as id_periksalab'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_periksa_lab', 'tb_periksa_lab.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pranata', 'tb_pranata.id_pranata = tb_periksa_lab.id_pranata', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 6); // Pilih Poli Sesuai ID Poli Gigi
        
        $this->db->where('tb_pelayanan.tgl_pelayanan >=', $tgl_awal);
        $this->db->where('tb_pelayanan.tgl_pelayanan <=', $tgl_akhir);
        return $this->db->get();
    }

    //POLILAB
    public function tampilPelayananPoliTb()
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.no_rm as no_rm, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pemeriksaan.kelas as kelas, tb_pemeriksaan.tgl_berobat as tgl_berobat, tb_pemeriksaan.memori_hasil as memori_hasil, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 7); // Pilih Poli Sesuai ID Poli Gigi
        return $this->db->get();
    }

    public function tampilPoliTbTahun($tahun)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.no_rm as no_rm, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pemeriksaan.kelas as kelas, tb_pemeriksaan.tgl_berobat as tgl_berobat, tb_pemeriksaan.memori_hasil as memori_hasil, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 7); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pemeriksaan.tgl_berobat)', $tahun); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliTbBulan($tahun, $bulan)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.no_rm as no_rm, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pemeriksaan.kelas as kelas, tb_pemeriksaan.tgl_berobat as tgl_berobat, tb_pemeriksaan.memori_hasil as memori_hasil, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 7); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('YEAR(tb_pemeriksaan.tgl_berobat)', $tahun); // Pilih Poli Sesuai ID Poli Gigi
        $this->db->where('MONTH(tb_pemeriksaan.tgl_berobat)', $bulan); // Pilih Poli Sesuai ID Poli Gigi

        return $this->db->get();
    }

    public function tampilPoliTbTanggal($tgl_awal, $tgl_akhir)
    {
        $this->db->select('tb_pelayanan.*, tb_pasien.no_rm as no_rm, tb_pasien.nama_pasien as nama_pasien, tb_pasien.jk as jk, tb_pasien.tgl_lahir as tgl_lahir, tb_pasien.alamat as alamat, tb_pemeriksaan.kelas as kelas, tb_pemeriksaan.tgl_berobat as tgl_berobat, tb_pemeriksaan.memori_hasil as memori_hasil, tb_dokter.nama_dokter as nama_dokter, tb_pemeriksaan.rujukan as rujukan, tb_pemeriksaan.keterangan as keterangan'); // Pilih Semua Field yang ada di Database
        $this->db->from('tb_pelayanan'); // Pilih Database Asal
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien = tb_pelayanan.id_pasien'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_pemeriksaan', 'tb_pemeriksaan.id_pelayanan = tb_pelayanan.id_pelayanan', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->join('tb_dokter', 'tb_dokter.id_dokter = tb_pemeriksaan.id_dokter', 'left'); // Gabungkan ke Database Tujuan lalu Cari id nya
        $this->db->where('tb_pelayanan.id_poli =', 7); // Pilih Poli Sesuai ID Poli Gigi
        
        $this->db->where('tb_pemeriksaan.tgl_berobat >=', $tgl_awal);
        $this->db->where('tb_pemeriksaan.tgl_berobat <=', $tgl_akhir);
        return $this->db->get();
    }

}