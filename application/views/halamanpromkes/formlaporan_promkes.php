<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Data Promkes</h3>

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
                    <form action="<?= base_url('HalamanPromkes/filter_tahun_promkes') ?>" method="post">
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
                    <form action="<?= base_url('HalamanPromkes/filter_bulan_promkes') ?>" method="post">
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
                    <form action="<?= base_url('HalamanPromkes/filter_tanggal_promkes') ?>" method="post">
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
                          <button type="reset" class="btn btn-block btn-outline-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Petugas</th>
                          <th>Kegiatan</th>
                          <th>Tanggal</th>
                          <th>Alamat</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                        <?php 
                          $no = 1;
                          // Menampilkan Data Dari Database
                          foreach ($kegiatan as $data) { ?> 
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td>
                                <?php echo $data->nama_kesmas ?> <br>
                                <?php echo $data->nama_bidan ?> <br>
                                <?php echo $data->nama_perawat ?> <br>
                              </td>
                              <td><?php echo $data->kegiatan ?></td>
                              <td><?php echo $data->tgl_promkes ?></td>
                              <td><?php echo $data->alamat ?></td>
                              <td><?php echo $data->keterangan ?></td>
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