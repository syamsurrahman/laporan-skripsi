<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <form action="<?php echo base_url('HalamanPelayanan/form_tambah') ?>" method="POST">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Cari Data Pasien</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">No RM</label>
                    <select name="id_pasien" id="id_pasien" class="form-control select2bs4" required>
                        <option selected="selected">- Pilih -</option>
                        <?php foreach ($pasien as $data) { ?>
                            <option value="<?= $data->id_pasien ?>">
                                <?= $data->no_rm?> | <?= $data->nama_pasien ?>
                            </option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo base_url('HalamanPelayanan')?>"  class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-success">Cari Data</button>
                </div>
                <!-- /.card-body -->
              </div>
              </form>
              <!-- /.card -->
            </div>
        
        </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->