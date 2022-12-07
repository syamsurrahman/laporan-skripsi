<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <form action="<?php echo base_url('HalamanPasien/input_pasien') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <label for="">No RM</label>
                  <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukan No RM" value="<?php echo $no_rm?>" readonly>
                </div>
                <div class="form-group">
                  <label for="">No BPJS</label>
                  <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukan No BPJS"required>
                </div>
                <div class="form-group">
                  <label for="">Nama Pasien</label>
                  <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukan Nama Pasien"required>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select class="form-control" name="jk" id="jk" required>
                    <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                    <option value="l">Laki-laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir"required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir"required>
                </div>
                <div class="form-group">
                  <label for="">Gol Darah</label>
                  <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masukan Golongan Darah"required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat"required>
                </div>
                <div class="form-group">
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Handphone"required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Daftar</label>
                  <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan Tanggal"required>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="<?php echo base_url('HalamanPasien')?>"  class="btn btn-default">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
              </form>
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