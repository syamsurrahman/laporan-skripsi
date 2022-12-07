<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Ibu Hamil</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <form action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="">No RM</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['no_rm']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Nama Ibu</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['nama_pasien']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['tgl_lahir']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Daftar</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['tgl_pelayanan']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">HPHT</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['hpht']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">HTP</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['htp']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Hamil Ke-</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['hamil_ke']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Dokter</label>
                      <input type="text" class="form-control" value="<?php echo $riwayat['nama_dokter']?>" readonly>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </form>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            

          </div>
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Riwayat</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12 pb-3">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-input">
                      Tambah Catatan Kehamilan
                    </button>
                    <a href="<?php echo base_url('HalamanPemeriksaan/laporan_catatan_kiakb/' . $riwayat['id_pemeriksaan'])?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Tgl</th>
                        <th>Keluhan Sekarang</th>
                        <th>Tekanan Darah (mmHg)</th>
                        <th>Berat Badan (kg)</th>
                        <th>Umur Kehamilan (minggu)</th>
                        <th>Jarak Kehamilan</th>
                        <th>Tinggi Fundus (cm)</th>
                        <th>Letak Janin Kep/Su/Li</th>
                        <th>Denyut Jantung Janin/Menit</th>
                        <th>Kaki Bengkak</th>
                        <th>Hasil Pemeriksaan Lab</th>
                        <th>Tindakan</th>
                        <th>Nasihat</th>
                        <th>Keterangan</th>
                        <th>Kembali Lagi</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($catatan as $data) { ?> 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo date('d-m-Y', strtotime($data->tgl_catatan)) ?></td>
                            <td><?php echo $data->keluhan_sekarang ?></td>
                            <td><?php echo $data->tekanan_darah ?></td>
                            <td><?php echo $data->bb ?> kg</td>
                            <td><?php echo $data->umur_kehamilan ?> minggu</td>
                            <td><?php echo $data->jarak_kehamilan ?></td>
                            <td><?php echo $data->tinggi_fundus ?> cm</td>
                            <td><?php echo $data->letak_janin ?></td>
                            <td><?php echo $data->denyut_jantung_janin ?></td>
                            <td><?php echo $data->kaki_bengkak ?></td>
                            <td><?php echo $data->hasil_periksa_lab ?></td>
                            <td><?php echo $data->tindakan ?></td>
                            <td><?php echo $data->nasihat ?></td>
                            <td><?php echo $data->keterangan ?></td>
                            <td><?php echo $data->harus_kembali ?></td>
                            <td>
                              <a href="<?php echo base_url('HalamanPemeriksaan/hapus_catatan_kehamilam/'. $data->id_pemeriksaan)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>  
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal-input -->
<div class="modal fade" id="modal-input">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Catatan Kehamilan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPemeriksaan/input_catatan_kehamilan') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id_pemeriksaan" name="id_pemeriksaan" value="<?php echo $riwayat['id_pemeriksaan']?>" readonly>
                  <label for="">Keluhan</label>
                  <input type="text" class="form-control" id="keluhan_sekarang" name="keluhan_sekarang" placeholder="Masukan Keluhan Sekarang"required>
                </div>
                <div class="form-group">
                  <label for="">Tekanan Darah</label>
                  <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="Tekanan Darah (mmHg)"required>
                </div>
                <div class="form-group">
                  <label for="">Berat Badan</label>
                  <input type="text" class="form-control" id="bb" name="bb" placeholder="Berat Badan (kg)"required>
                </div>
                <div class="form-group">
                  <label for="">Umur Kehamilan</label>
                  <input type="text" class="form-control" id="umur_kehamilan" name="umur_kehamilan" placeholder="Umur Kehamilan (minggu)"required>
                </div>
                <div class="form-group">
                  <label for="">Jarak Kehamilan</label>
                  <input type="text" class="form-control" id="jarak_kehamilan" name="jarak_kehamilan" placeholder="Jarak Kehamilan"required>
                </div>
                <div class="form-group">
                  <label for="">Tinggi Fundus</label>
                  <input type="text" class="form-control" id="tinggi_fundus" name="tinggi_fundus" placeholder="Tinggi Fundus (cm)"required>
                </div>
                <div class="form-group">
                  <label for="">Letak Janin</label>
                  <input type="text" class="form-control" id="letak_janin" name="letak_janin" placeholder="Letak Janin Kep/Su/Li"required>
                </div>
                <div class="form-group">
                  <label for="">Denyut Jantung Janin</label>
                  <input type="text" class="form-control" id="denyut_jantung_janin" name="denyut_jantung_janin" placeholder="Denyut Jantung Janin/Menit"required>
                </div>
                <div class="form-group">
                  <label for="">Kaki Bengkak</label>
                  <input type="text" class="form-control" id="kaki_bengkak" name="kaki_bengkak" placeholder="Kaki Bengkak -/+"required>
                </div>
                <div class="form-group">
                  <label for="">Hasil Periksaan Lab</label>
                  <input type="text" class="form-control" id="hasil_periksa_lab" name="hasil_periksa_lab" placeholder="Hasil Pemeriksaan Lab"required>
                </div>
                <div class="form-group">
                  <label for="">Tindakan</label>
                  <input type="text" class="form-control" id="tindakan" name="tindakan" placeholder="Tindakan"required>
                </div>
                <div class="form-group">
                  <label for="">Nasihat</label>
                  <input type="text" class="form-control" id="nasihat" name="nasihat" placeholder="Nasihat"required>
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"required>
                </div>
                <div class="form-group">
                  <label for="">Harus Kembali</label>
                  <input type="text" class="form-control" id="harus_kembali" name="harus_kembali" placeholder="Kapan Harus Kembali"required>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form>
            <!-- Akhir Form -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>