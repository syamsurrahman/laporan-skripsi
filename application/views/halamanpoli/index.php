<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Poli</h3>
              </div>
              <div class="card-body">
                <!-- Awal Tampilan Tabel -->
                <div class="row">
                  <div class="col-md-12 pb-3">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                      Tambah Data Poli
                    </button>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($poli as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_poli ?></td>
                            <td><?php echo $data->ket_poli ?></td>
                            <td>
                              <a href="#" class="btn btn-warning btn-sm" id="button-edit-item" >Edit</a>
                              <a href="#" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- Akhir Tampilan Tabel -->
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

    <!-- Awal Modal -->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Input Data Poli</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanPoli/input_poli') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">Nama Poli</label>
                  <input type="text" class="form-control" id="nama_poli" name="nama_poli" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Keterangan</label>
                  <input type="text" class="form-control" id="ket_poli" name="ket_poli" placeholder="Masukan Keterangan">
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
    <!-- / Akhir Modal -->