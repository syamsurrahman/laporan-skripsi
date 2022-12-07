<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Data Poli LAB</h3>

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
                  
                  <!-- Filter Tahun -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanPemeriksaan/filter_tahun_lab') ?>" method="post">
                      <div class="row">
                        <div class="col-6">
                          <input type="number" class="form-control" name="tahun" placeholder="Tahun (20XX)" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Tahun)</button>
                        </div>
                        <div class="col">
                          <button type="reset" class="btn btn-block btn-outline-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Filter Bulan -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanPemeriksaan/filter_bulan_lab') ?>" method="post">
                      <div class="row">
                        <div class="col-3">
                          <input type="number" class="form-control" name="bulan" placeholder="Bulan (1-12)" required>
                        </div>
                        <div class="col-3">
                          <input type="number" class="form-control" name="tahun" placeholder="Tahun (20XX)" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Bulan)</button>
                        </div>
                        <div class="col">
                          <button type="reset" class="btn btn-block btn-outline-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Filter Tanggal -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanPemeriksaan/filter_tanggal_lab') ?>" method="post">
                      <div class="row">
                        <div class="col-3">
                          <input type="date" class="form-control" name="tgl_awal" placeholder="" required>
                        </div>
                        <div class="col-3">
                          <input type="date" class="form-control" name="tgl_akhir" placeholder="" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Periode Tanggal)</button>
                        </div>
                        <div class="col">
                          <a href="<?php echo base_url('HalamanPemeriksaan/laporan_polilab_tanggal/') . $tgl_awal . '/' . $tgl_akhir ?>" target="_blank" class="btn btn-block btn-outline-success">Cetak</a>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No RM</th>
                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Daftar</th>
                          <th>Spesimen</th>
                          <th>Tgl/Jam Pengambilan</th>
                          <th>Tgl/Jam Pemeriksaan</th>
                          <th>Petugas</th>
                        </tr>
                      </thead>
                      <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($filter as $data) { ?> 
                          <tr>
                          <td><?php echo $no++ ?></td>
                              <td><?php echo $data->no_rm ?></td>
                              <td><?php echo $data->nama_pasien?></td>
                              <td>
                                <?php if($data->jk == 'l') {
                                  echo 'Laki - Laki';
                                } else { 
                                  echo 'Perempuan';
                                }  ?>
                              </td>
                              <td><?php echo $data->tgl_pelayanan ?></td>
                              <td><?php echo $data->spesimen ?></td>
                              <td>
                                <?php echo $data->tgl_pengambilan ?> <br>
                                <?php echo $data->jam_pengambilan ?> WITA
                              </td>
                              <td>
                                <?php echo $data->tgl_pemeriksaan ?> <br>
                                <?php echo $data->jam_pemeriksaan ?> WITA
                              </td>
                              <td><?php echo $data->nama_pranata ?></td>
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
              <h4 class="modal-title">Input Data Vaksin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanVaksin/input_vaksin') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">No Tiket</label>
                  <input type="text" class="form-control" id="no_tiket" name="no_tiket" placeholder="Masukan No Tiket" value="<?php echo $tiket_vaksin?>" readonly>
                </div>
                <div class="form-group">
                  <label for="">NIK</label>
                  <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" required> 
                </div>
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                </div>
                <div class="form-group">
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Handphone" required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" required>
                </div>
                <div class="form-group">
                  <label for="">Lokasi Vaksin</label>
                  <input type="text" class="form-control" id="lokasi_vaksin" name="lokasi_vaksin" value="Puskesmas Kelayan Dalam" placeholder="Masukan Lokasi Vaksin" readonly>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Vaksin</label>
                  <input type="date" class="form-control" id="tgl_vaksin" name="tgl_vaksin" required>
                </div>
                <div class="form-group">
                  <label for="">Nama Vaksin</label>
                    <select class="form-control" name="id_vaksin" id="id_vaksin" required>
                        <option value="" disabled selected>- Pilih Vaksin -</option>
                        <?php foreach ($vaksin as $data) :?>
                        <option value="<?php echo $data->id_vaksin ?>"><?php echo $data->nama_vaksin ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Dokter</label>
                    <select class="form-control" name="id_dokter" id="id_dokter" required>
                        <option value="" disabled selected>- Pilih Dokter -</option>
                        <?php foreach ($dokter as $data) :?>
                        <option value="<?php echo $data->id_dokter ?>"><?php echo $data->nama_dokter ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan" required>
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

      <!-- modal-edit -->
      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanDokter/edit_dokter') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">NIP</label>
                  <input type="hidden" id="edit-id_dokter" name="id_dokter">
                  <input type="text" class="form-control" id="edit-nip" name="nip" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Nama Dokter</label>
                  <input type="text" class="form-control" id="edit-nama_dokter" name="nama_dokter" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Jabatan</label>
                  <input type="text" class="form-control" id="edit-jabatan" name="jabatan" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Golongan</label>
                  <select class="form-control" name="golongan" id="edit-golongan" required>
                    <option value="" disabled selected>- PILIH -</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" class="form-control" id="edit-tgl_lahir" name="tgl_lahir" placeholder="Masukan Keterangan">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="edit-alamat" name="alamat" placeholder="Masukan Keterangan">
                </div>
                <div class="form-group">
                  <label for="">Keahlian</label>
                  <input type="text" class="form-control" id="edit-keahlian" name="keahlian" placeholder="Masukan Keterangan">
                </div>
                
                <div class="form-group">
                  <label for="">Poli</label>
                  <input type="text" class="form-control" id="edit-nama_poli" name="nama_poli" placeholder="Masukan Keterangan" readonly>
                </div>
                <div class="form-group">
                  <label for="">Ubah Poli *</label>
                  <select class="form-control" name="id_poli" required>
                  <option id="edit-id_poli">- Pilih Poli -</option>
                    <?php foreach ($poli as $data) :?>
                      <option value="<?php echo $data->id_poli ?>"><?php echo $data->nama_poli ?></option>
                    <?php endforeach; ?>
                  </select>
                  <span>*) Pilih Poli Jika Ingin Mengubah Data</span>
                </div>
                
                <div class="form-group">
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="edit-no_hp" name="no_hp" placeholder="Masukan Keterangan">
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

<!-- java-script -->

<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var id_dokter = $(this).data('id_dokter');
      var nip = $(this).data('nip');
      var nama_dokter = $(this).data('nama_dokter');
      var jabatan = $(this).data('jabatan');
      var golongan = $(this).data('golongan');
      var tgl_lahir = $(this).data('tgl_lahir');
      var alamat = $(this).data('alamat');
      var keahlian = $(this).data('keahlian');
      var no_hp = $(this).data('no_hp');
      //  Tambah ini
      var nama_poli = $(this).data('nama_poli'); 
      var id_poli = $(this).data('id_poli');

      $('#edit-id_dokter').val(id_dokter);
      $('#edit-nip').val(nip);
      $('#edit-nama_dokter').val(nama_dokter);
      $('#edit-jabatan').val(jabatan);
      $('#edit-golongan').val(golongan);
      $('#edit-tgl_lahir').val(tgl_lahir);
      $('#edit-alamat').val(alamat);
      $('#edit-keahlian').val(keahlian);
      $('#edit-no_hp').val(no_hp);
      // Tambah ini
      $('#edit-nama_poli').val(nama_poli);
      $('#edit-id_poli').val(id_poli);
    });
  });
</script>