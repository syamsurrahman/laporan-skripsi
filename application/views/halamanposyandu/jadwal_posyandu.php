<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jadwal Posyandu</h3>

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
                      Tambah Data Jadwal Posyandu
                    </button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#">
                      Cetak Data Jadwal Posyandu
                    </button>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Posyandu</th>
                          <th>Alamat</th>
                          <th>Hari/Minggu Ke 1</th>
                          <th>Jan</th>
                          <th>Feb</th>
                          <th>Mar</th>
                          <th>Apr</th>
                          <th>Mei</th>
                          <th>Jun</th>
                          <th>Jul</th>
                          <th>Agust</th>
                          <th>Sept</th>
                          <th>okt</th>
                          <th>Nov</th>
                          <th>Des</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        foreach ($jadwal_posyandu as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_posyandu ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->keterangan ?></td>
                            <td>
                                <?php echo $data->jan ?>
                            </td>
                            <td>
                                <?php echo $data->feb ?>
                            </td>
                            <td><?php echo $data->mar ?></td>
                            <td><?php echo $data->apr ?></td>
                            <td><?php echo $data->mei ?></td>
                            <td><?php echo $data->jun ?></td>
                            <td><?php echo $data->jul ?></td>
                            <td><?php echo $data->agust ?></td>
                            <td><?php echo $data->sep ?></td>
                            <td><?php echo $data->okt ?></td>
                            <td><?php echo $data->nov ?></td>
                            <td><?php echo $data->des ?></td>
                            <td>
                              <?php if ($data->status == NULL) { ?>
                                <button class="btn btn-warning btn-sm" id="input" type="button" data-toggle="modal" data-target="#modal-input" 
                                    data-id_posyandu="<?php echo $data->id_posyandu?>"
                                    data-nama_posyandu="<?php echo $data->nama_posyandu?>">
                                    Atur Jadwal
                                </button>
                              <?php } else { ?>
                                <button class="btn btn-success btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                    data-id_posyandu="<?php echo $data->id_posyandu?>"
                                    data-nama_posyandu="<?php echo $data->nama_posyandu?>"
                                    data-jan="<?php echo $data->jan ?>"
                                    data-feb="<?php echo $data->feb ?>"
                                    data-mar="<?php echo $data->mar ?>"
                                    data-apr="<?php echo $data->apr ?>"
                                    data-mei="<?php echo $data->mei ?>"
                                    data-jun="<?php echo $data->jun ?>"
                                    data-jul="<?php echo $data->jul ?>"
                                    data-agust="<?php echo $data->agust ?>"
                                    data-sep="<?php echo $data->sep ?>"
                                    data-okt="<?php echo $data->okt ?>"
                                    data-nov="<?php echo $data->nov ?>"
                                    data-des="<?php echo $data->des ?>"
                                    >
                                    Edit
                                </button>
                              <?php }?> 
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
              <h4 class="modal-title">Input Data Jadwal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/input_jadwal') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama posyandu</label>
                  <input type="hidden" id="id_posyandu" name="id_posyandu">
                  <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Januari</label>
                  <input type="date" class="form-control" id="jan" name="jan" placeholder="" value="2022-01-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Februari</label>
                  <input type="date" class="form-control" id="feb" name="feb" placeholder="" value="2022-02-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Maret</label>
                  <input type="date" class="form-control" id="mar" name="mar" placeholder="" value="2022-03-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal April</label>
                  <input type="date" class="form-control" id="apr" name="apr" placeholder="" value="2022-04-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Mei</label>
                  <input type="date" class="form-control" id="mei" name="mei" placeholder="" value="2022-05-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Juni</label>
                  <input type="date" class="form-control" id="jun" name="jun" placeholder="" value="2022-06-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Juli</label>
                  <input type="date" class="form-control" id="jul" name="jul" placeholder="" value="2022-07-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Agustus</label>
                  <input type="date" class="form-control" id="agust" name="agust" placeholder="" value="2022-08-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal September</label>
                  <input type="date" class="form-control" id="sep" name="sep" placeholder="" value="2022-09-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Oktober</label>
                  <input type="date" class="form-control" id="okt" name="okt" placeholder="" value="2022-10-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal November</label>
                  <input type="date" class="form-control" id="nov" name="nov" placeholder="" value="2022-11-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Desember</label>
                  <input type="date" class="form-control" id="des" name="des" placeholder="" value="2022-12-01" required>
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
              <h4 class="modal-title">Edit Data Jadwal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/edit_jadwal') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Posyandu</label>
                  <input type="hidden" id="edit-id_posyandu" name="id_posyandu">
                  <input type="text" class="form-control" id="edit-nama_posyandu" name="nama_posyandu" placeholder="Masukan Nama Posyandu" readonly >
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Januari</label>
                  <input type="date" class="form-control" id="edit-jan" name="jan" placeholder="" value="2022-01-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Februari</label>
                  <input type="date" class="form-control" id="edit-feb" name="feb" placeholder="" value="2022-02-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Maret</label>
                  <input type="date" class="form-control" id="edit-mar" name="mar" placeholder="" value="2022-03-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal April</label>
                  <input type="date" class="form-control" id="edit-apr" name="apr" placeholder="" value="2022-04-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Mei</label>
                  <input type="date" class="form-control" id="edit-mei" name="mei" placeholder="" value="2022-05-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Juni</label>
                  <input type="date" class="form-control" id="edit-jun" name="jun" placeholder="" value="2022-06-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Juli</label>
                  <input type="date" class="form-control" id="edit-jul" name="jul" placeholder="" value="2022-07-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Agustus</label>
                  <input type="date" class="form-control" id="edit-agust" name="agust" placeholder="" value="2022-08-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal September</label>
                  <input type="date" class="form-control" id="edit-sep" name="sep" placeholder="" value="2022-09-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Oktober</label>
                  <input type="date" class="form-control" id="edit-okt" name="okt" placeholder="" value="2022-10-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal November</label>
                  <input type="date" class="form-control" id="edit-nov" name="nov" placeholder="" value="2022-11-01" required>
                </div>
                <div class="form-group">
                  <label for="">Masukan Jadwal Desember</label>
                  <input type="date" class="form-control" id="edit-des" name="des" placeholder="" value="2022-12-01" required>
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

<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var id_posyandu = $(this).data('id_posyandu');
      var nama_posyandu = $(this).data('nama_posyandu');
      var jan = $(this).data('jan');
      var feb = $(this).data('feb');
      var mar = $(this).data('mar');
      var apr = $(this).data('apr');
      var mei = $(this).data('mei');
      var jun = $(this).data('jun');
      var jul = $(this).data('jul');
      var agust = $(this).data('agust');
      var sep = $(this).data('sep');
      var okt = $(this).data('okt');
      var nov = $(this).data('nov');
      var des = $(this).data('des');
      

      $('#edit-id_posyandu').val(id_posyandu);
      $('#edit-nama_posyandu').val(nama_posyandu);
      $('#edit-jan').val(jan);
      $('#edit-feb').val(feb);
      $('#edit-mar').val(mar);
      $('#edit-apr').val(apr);
      $('#edit-mei').val(mei);
      $('#edit-jun').val(jun);
      $('#edit-jul').val(jul);
      $('#edit-agust').val(agust);
      $('#edit-sep').val(sep);
      $('#edit-okt').val(okt);
      $('#edit-nov').val(nov);
      $('#edit-des').val(des);

    });
  });
</script>

<script>
  $(document).ready(function() {
    $(document).on('click', '#input', function() {
      var id_posyandu = $(this).data('id_posyandu');
      var nama_posyandu = $(this).data('nama_posyandu');

      $('#id_posyandu').val(id_posyandu);
      $('#nama_posyandu').val(nama_posyandu);
    });
  });
</script>