<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- ./col -->
          <!-- small box -->
        <!-- <div class="col-lg-6 col-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $totPoliAnak ?></h3>
              <h2>Daftar Posyandu</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPosyandu/daftar_posyandu')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $totPoliGigi ?></h3>
              <h2>Jadwal Posyandu</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPosyandu/jadwal_posyandu')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
          <!-- small box -->

        <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Promkes</h3>

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
                    <!-- <a href="<?php echo base_url('HalamanPromkes/laporan_kegiatanposyandu')?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a> -->
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
                          <th>Aksi</th>
                        </tr>
                      </thead>
                        <?php 
                         $no = 1;
                         foreach ($promkes as $data) { ?>
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
                            <td>
                              <button class="btn btn-warning btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                data-id_promkes="<?php echo $data->id_promkes?>"
                                data-id_kesmas="<?php echo $data->id_kesmas?>"
                                data-id_bidan="<?php echo $data->id_bidan ?>"
                                data-id_perawat="<?php echo $data->id_perawat ?>"
                                data-kegiatan="<?php echo $data->kegiatan ?>"
                                data-tgl_promkes="<?php echo $data->tgl_promkes ?>"
                                data-alamat="<?php echo $data->alamat ?>"
                                data-keterangan="<?php echo $data->keterangan ?>"
                                >Edit
                              </button>
                              <!-- <button class="btn btn-warning btn-sm">Edit</button> -->
                              <a href="<?php echo base_url('HalamanPromkes/hapus_promkes/'. $data->id_promkes)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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
              <h4 class="modal-title">Input Data Promkes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPromkes/input_Promkes') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Kesmas</label>
                  <select class="form-control" name="id_kesmas" id="id_kesmas" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($kesmas as $data) :?>
                      <option value="<?php echo $data->id_kesmas ?>"><?php echo $data->nama_kesmas ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Bidan</label>
                  <select class="form-control" name="id_bidan" id="id_bidan" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Perawat</label>
                  <select class="form-control" name="id_perawat" id="id_perawat" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Kegiatan</label>
                  <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="Masukan Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" class="form-control" id="tgl_promkes" name="tgl_promkes" placeholder="Masukan tgl_promkes" required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" required>
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
              <h4 class="modal-title">Edit Data Promkes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPromkes/edit_promkes') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Kesmas</label>
                  <input type="hidden" id="edit-id_promkes" name="id_promkes">
                  <select class="form-control" name="id_kesmas" id="edit-id_kesmas" required>
                    <option value="" selected>- Pilih Petugas -</option>
                    <?php foreach ($kesmas as $data) :?>
                      <option value="<?php echo $data->id_kesmas ?>"><?php echo $data->nama_kesmas ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Nama Bidan</label>
                  <select class="form-control" name="id_bidan" id="edit-id_bidan" required>
                    <option value="" selected>- Pilih Petugas -</option>
                    <?php foreach ($bidan as $data) :?>
                      <option value="<?php echo $data->id_bidan ?>"><?php echo $data->nama_bidan ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Nama Perawat</label>
                  <select class="form-control" name="id_perawat" id="edit-id_perawat" required>
                    <option value="" disabled selected>- Pilih Petugas -</option>
                    <?php foreach ($perawat as $data) :?>
                      <option value="<?php echo $data->id_perawat ?>"><?php echo $data->nama_perawat ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Kegiatan</label>
                  <input type="text" class="form-control" id="edit-kegiatan" name="kegiatan" placeholder="Masukan Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" class="form-control" id="edit-tgl_promkes" name="tgl_promkes" placeholder="Masukan Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="edit-alamat" name="alamat" placeholder="Masukan Kegiatan" required>
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
      var id_promkes = $(this).data('id_promkes');
      var id_kesmas = $(this).data('id_kesmas');
      var id_bidan = $(this).data('id_bidan');
      var id_perawat = $(this).data('id_perawat');
      var kegiatan = $(this).data('kegiatan');
      var tgl_promkes = $(this).data('tgl_promkes');
      var alamat = $(this).data('alamat');
      var keterangan = $(this).data('keterangan');

      $('#edit-id_promkes').val(id_promkes);
      $('#edit-id_kesmas').val(id_kesmas);
      $('#edit-id_bidan').val(id_bidan);
      $('#edit-id_perawat').val(id_perawat);
      $('#edit-kegiatan').val(kegiatan);
      $('#edit-tgl_promkes').val(tgl_promkes);
      $('#edit-alamat').val(alamat);
      $('#edit-keterangan').val(keterangan);
    });
  });
</script>