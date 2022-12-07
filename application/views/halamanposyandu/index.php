<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <!-- <h3><?php echo $totPoliAnak ?></h3> -->
              <h2>Daftar Posyandu</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPosyandu/daftar_posyandu')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <!-- <h3><?php echo $totPoliGigi ?></h3> -->
              <h2>Jadwal Posyandu</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPosyandu/jadwal_posyandu')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Data Posyandu</h3> -->

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
                      Tambah Data Kegiatan
                    </button>
                    <!-- <a href="<?php echo base_url('HalamanPosyandu/laporan_kegiatanposyandu')?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a> -->
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Posyandu</th>
                          <th>Alamat</th>
                          <th>Tanggal</th>
                          <th>Nama Petugas</th>
                          <th>Kegiatan</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        foreach ($kegiatan as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_posyandu ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->tanggal ?></td>
                            <td>
                              <?php echo $data->nama_bidan1 ?> <br>
                              <?php echo $data->nama_bidan2 ?> <br>
                              <?php echo $data->nama_perawat1 ?> <br>
                              <?php echo $data->nama_perawat2 ?>
                            </td>
                            <td><?php echo $data->kegiatan ?></td>
                            <td><?php echo $data->keterangan ?></td>
                            <td>
                              <button class="btn btn-warning btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                data-id_kegiatanposyandu="<?php echo $data->id_kegiatanposyandu?>"
                                data-id_posyandu="<?php echo $data->id_posyandu?>"
                                data-nama_posyandu="<?php echo $data->nama_posyandu?>" 
                                data-tanggal="<?php echo $data->tanggal ?>"
                                data-id_bidan1="<?php echo $data->id_bidan1 ?>"
                                data-id_bidan2="<?php echo $data->id_bidan2 ?>"
                                data-id_perawat1="<?php echo $data->id_perawat1 ?>"
                                data-id_perawat2="<?php echo $data->id_perawat2 ?>"
                                data-kegiatan="<?php echo $data->kegiatan ?>"
                                data-keterangan="<?php echo $data->keterangan ?>"
                                >Edit
                              </button>
                              <a href="<?php echo base_url('HalamanPosyandu/hapus_kegiatanposyandu/'. $data->id_kegiatanposyandu)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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
              <h4 class="modal-title">Input Data Kegiatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/input_kegiatan') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Posyandu</label>
                  <select class="form-control" name="id_posyandu" id="id_posyandu" required>
                    <option value="" disabled selected>- Pilih posyandu -</option>
                    <?php foreach ($posyandu as $data) :?>
                      <option value="<?php echo $data->id_posyandu ?>"><?php echo $data->nama_posyandu ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="" required>
                </div>
                
                <div class="form-group">
                  <label for="">Nama Petugas (Bidan 1)</label>
                  <select class="form-control" name="id_bidan1" id="id_bidan1" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan1 as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Petugas (Bidan 2)</label>
                  <select class="form-control" name="id_bidan2" id="id_bidan2" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan2 as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Petugas (Perawat 1)</label>
                  <select class="form-control" name="id_perawat1" id="id_perawat1" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat2 as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Nama Petugas (Perawat 2)</label>
                  <select class="form-control" name="id_perawat2" id="id_perawat2" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat2 as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Kegiatan</label>
                  <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukan Kegiatan" required>
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
              <h4 class="modal-title">Edit Data Kegiatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/edit_kegiatan') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Posyandu</label>
                  <input type="hidden" id="edit-id_kegiatanposyandu" name="id_kegiatanposyandu">
                  <input type="hidden" id="edit-id_posyandu" name="id_posyandu">
                  <input type="text" class="form-control" id="edit-nama_posyandu" name="nama_posyandu" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" class="form-control" id="edit-tanggal" name="tanggal" placeholder="" required>
                </div>
                
                <div class="form-group">
                  <label for="">Nama Petugas (Bidan 1)</label>
                  <select class="form-control" name="id_bidan1" id="edit-id_bidan1" required>
                    <option value="" selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan1 as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Petugas (Bidan 2)</label>
                  <select class="form-control" name="id_bidan2" id="edit-id_bidan2" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan2 as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Petugas (Perawat 1)</label>
                  <select class="form-control" name="id_perawat1" id="edit-id_perawat1" required>
                    <option value="" selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat2 as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Nama Petugas (Perawat 2)</label>
                  <select class="form-control" name="id_perawat2" id="edit-id_perawat2" required>
                    <option value="" selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat2 as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Kegiatan</label>
                  <input type="text" class="form-control" id="edit-kegiatan" name="kegiatan" placeholder="Masukan Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="edit-keterangan" name="keterangan" placeholder="Masukan Keterangan" required>
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
      var id_kegiatanposyandu = $(this).data('id_kegiatanposyandu');
      var id_posyandu = $(this).data('id_posyandu');
      var nama_posyandu = $(this).data('nama_posyandu');
      var tanggal = $(this).data('tanggal');
      var id_bidan1 = $(this).data('id_bidan1');
      var id_bidan2 = $(this).data('id_bidan2');
      var id_perawat1 = $(this).data('id_perawat1');
      var id_perawat2 = $(this).data('id_perawat2');
      var kegiatan = $(this).data('kegiatan');
      var keterangan = $(this).data('keterangan');

      $('#edit-id_kegiatanposyandu').val(id_kegiatanposyandu);
      $('#edit-id_posyandu').val(id_posyandu);
      $('#edit-nama_posyandu').val(nama_posyandu);
      $('#edit-tanggal').val(tanggal);
      $('#edit-id_bidan1').val(id_bidan1);
      $('#edit-id_bidan2').val(id_bidan2);
      $('#edit-id_perawat1').val(id_perawat1);
      $('#edit-id_perawat2').val(id_perawat2);
      $('#edit-kegiatan').val(kegiatan);
      $('#edit-keterangan').val(keterangan);
    });
  });
</script>