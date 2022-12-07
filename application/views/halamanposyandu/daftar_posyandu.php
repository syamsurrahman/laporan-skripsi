<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Daftar Posyandu</h3>

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
                      Tambah Data Posyandu
                    </button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#">
                      Cetak Data Posyandu
                    </button>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Posyandu</th>
                          <th>Alamat</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        foreach ($posyandu as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_posyandu ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->keterangan ?></td>
                            <td>
                              <button class="btn btn-warning btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                data-id_posyandu="<?php echo $data->id_posyandu?>"
                                data-nama_posyandu="<?php echo $data->nama_posyandu?>"
                                data-alamat="<?php echo $data->alamat ?>"
                                data-keterangan="<?php echo $data->keterangan ?>" >
                                Edit
                              </button>
                              <a href="<?php echo base_url('Halamanposyandu/hapus_posyandu/'. $data->id_posyandu)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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
              <h4 class="modal-title">Input Data Posyandu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/input_posyandu') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama posyandu</label>
                  <input type="text" class="form-control" id="nama_posyandu" name="nama_posyandu" placeholder="Masukan Nama posyandu"required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat"required>
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"required>
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
              <h4 class="modal-title">Edit Data Posyandu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPosyandu/edit_posyandu') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Posyandu</label>
                  <input type="hidden" id="edit-id_posyandu" name="id_posyandu">
                  <input type="text" class="form-control" id="edit-nama_posyandu" name="nama_posyandu" placeholder="Masukan Nama Posyandu">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="edit-alamat" name="alamat" placeholder="Masukan Alamat">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="edit-keterangan" name="keterangan" placeholder="Masukan Keterangan">
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
      var alamat = $(this).data('alamat');
      var keterangan = $(this).data('keterangan');

      $('#edit-id_posyandu').val(id_posyandu);
      $('#edit-nama_posyandu').val(nama_posyandu);
      $('#edit-alamat').val(alamat);
      $('#edit-keterangan').val(keterangan);

    });
  });
</script>