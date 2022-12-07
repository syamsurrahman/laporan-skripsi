<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Balita</h3>

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
                      <label for="">Nama Balita</label>
                      <input type="text" class="form-control" id="nama_balita" name="nama_balita"  value="<?php echo $balita['nama_balita']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $balita['tempat_lahir']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $balita['tgl_lahir']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Umur (Bulan 0-24)</label>
                      <input type="text" class="form-control" id="umur" name="umur" value="<?php echo $balita['umur']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jk" name="jk" value="<?php echo $balita['jk']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Nama Ibu</label>
                      <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $balita['nama_ibu']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">NIK Ibu</label>
                      <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" value="<?php echo $balita['nik_ibu']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $balita['alamat']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">No Handphone</label>
                      <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $balita['no_hp']?>" readonly>
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
                      Tambah Data Imunisasi
                    </button>
                    <a href="<?php echo base_url('HalamanImunisasi/laporan_jadwal_imunisasi/' . $balita['id_balita'])?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Vaksin Ke - </th>
                        <th>Jenis Vaksin</th>
                        <th>Tanggal Penyuntikan</th>
                        <th>Petugas</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($riwayat as $data) { ?> 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->vaksin_ke ?></td>
                            <td><?php echo $data->jenis_vaksin ?></td>
                            <td><?php echo $data->tgl_penyuntikan ?></td>
                            <td><?php echo $data->nama_bidan ?></td>
                            <td>Vaksin Selanjutnya Tgl <?php echo $data->keterangan ?></td>
                            <td>
                              <a href="<?php echo base_url('HalamanImunisasi/hapus_imunisasi/'. $data->id_imunisasi)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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
              <h4 class="modal-title">Input Data Imunisasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanImunisasi/input_imunisasi') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Vaksin Ke-</label>
                  <input type="hidden" class="form-control" id="id_balita" name="id_balita" value="<?php echo $balita['id_balita']?>" readonly>
                  <select class="form-control" name="vaksin_ke" id="vaksin_ke" required>
                    <option value="" disabled selected>- Pilih Vaksin Ke-  -</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12+">12+</option>
                    <option value="18">18</option>
                    <option value="24">24</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Jenis Vaksin</label>
                  <select class="form-control" name="id_vaksinbalita" id="id_vaksinbalita" required>
                    <option value="" disabled selected>- Pilih Vaksin -</option>
                    <?php foreach ($vaksinbalita as $data) :?>
                      <option value="<?php echo $data->id_vaksinbalita ?>"><?php echo $data->jenis_vaksin ?> | <?php echo $data->waktu_tepat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Penyuntikan</label>
                  <input type="date" class="form-control" id="tgl_penyuntikan" name="tgl_penyuntikan" placeholder="Masukan Nama Poli"required>
                </div>
                <div class="form-group">
                  <label for="">Petugas</label>
                  <select class="form-control" name="id_bidan" id="id_bidan" required>
                    <option value="" disabled selected>- Pilih Vaksin -</option>
                    <?php foreach ($bidan as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tgl Vaksin Selanjutnya</label>
                  <input type="date" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"required>
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