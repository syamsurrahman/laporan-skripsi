<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <form action="<?php echo base_url('HalamanImunisasi/riwayat') ?>" method="POST">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Cari Data Balita</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama Balita/NIK Ibu</label>
                    <select name="id_balita" id="id_balita" class="form-control select2bs4" required>
                        <option selected="selected">- Pilih -</option>
                        <?php foreach ($balita as $data) { ?>
                            <option value="<?= $data->id_balita ?>">
                                <?= $data->nama_balita?> | <?= $data->nik_ibu ?>
                            </option>
                        <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
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