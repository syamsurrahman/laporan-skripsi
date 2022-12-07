<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kesmas</h3>

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
                      Tambah Data Kesmas
                    </button>
                    <!-- <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#">
                      Cetak Data Kesmas
                    </button> -->
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                          <th>Golongan</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Handphone</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                        <?php 
                          $no = 1;
                          foreach ($kesmas as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nip ?></td>
                            <td><?php echo $data->nama_kesmas?></td>
                            <td><?php echo $data->jabatan ?></td>
                            <td><?php echo $data->golongan ?></td>
                            <td><?php echo $data->tgl_lahir ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->no_hp ?></td>
                            <td>
                              <button class="btn btn-warning btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                data-id_kesmas="<?php echo $data->id_kesmas?>"
                                data-nip="<?php echo $data->nip?>" 
                                data-nama_kesmas="<?php echo $data->nama_kesmas ?>"
                                data-jabatan="<?php echo $data->jabatan ?>"
                                data-golongan="<?php echo $data->golongan ?>"
                                data-tgl_lahir="<?php echo $data->tgl_lahir ?>"
                                data-alamat="<?php echo $data->alamat ?>"
                                data-no_hp="<?php echo $data->no_hp ?>" >
                                Edit
                              </button>
                              <a href="<?php echo base_url('HalamanKesmas/hapus_kesmas/'. $data->id_kesmas)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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
              <h4 class="modal-title">Input Data Kesmas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanKesmas/input_kesmas') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan Nama Poli"required>
                </div>
                <div class="form-group">
                  <label for="">Nama Kesmas</label>
                  <input type="text" class="form-control" id="nama_kesmas" name="nama_kesmas" placeholder="Masukan Nama Poli"required>
                </div>
                <div class="form-group">
                  <label for="">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Nama Poli"required>
                </div>
                <div class="form-group">
                  <label for="">Golongan</label>
                  <input type="text" class="form-control" id="golongan" name="golongan" placeholder="Masukan Nama Poli"required>
                </div>
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Keterangan"required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Keterangan"required>
                </div>
                <div class="form-group">
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Keterangan"required>
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
              <h4 class="modal-title">Input Data Kesmas</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanKesmas/edit_kesmas') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">NIP</label>
                  <input type="hidden" id="edit-id_kesmas" name="id_kesmas">
                  <input type="text" class="form-control" id="edit-nip" name="nip" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Nama kesmas</label>
                  <input type="text" class="form-control" id="edit-nama_kesmas" name="nama_kesmas" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Jabatan</label>
                  <input type="text" class="form-control" id="edit-jabatan" name="jabatan" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Golongan</label>
                  <input type="text" class="form-control" id="edit-golongan" name="golongan" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="edit-tgl_lahir" name="tgl_lahir" placeholder="Masukan Keterangan">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="edit-alamat" name="alamat" placeholder="Masukan Keterangan">
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

<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var id_kesmas = $(this).data('id_kesmas');
      var nip = $(this).data('nip');
      var nama_kesmas = $(this).data('nama_kesmas');
      var jabatan = $(this).data('jabatan');
      var golongan = $(this).data('golongan');
      var tgl_lahir = $(this).data('tgl_lahir');
      var alamat = $(this).data('alamat');
      var no_hp = $(this).data('no_hp');

      $('#edit-id_kesmas').val(id_kesmas);
      $('#edit-nip').val(nip);
      $('#edit-nama_kesmas').val(nama_kesmas);
      $('#edit-jabatan').val(jabatan);
      $('#edit-golongan').val(golongan);
      $('#edit-tgl_lahir').val(tgl_lahir);
      $('#edit-alamat').val(alamat);
      $('#edit-no_hp').val(no_hp);
    });
  });
</script>