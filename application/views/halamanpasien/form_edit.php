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
              <form action="<?php echo base_url('HalamanPasien/edit_pasien/' . $pasien['id_pasien'] ) ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                  <label for="">No RM</label>
                  <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukan No RM" value="<?php echo $pasien['no_rm']?>" readonly>
                </div>
                <div class="form-group">
                  <label for="">No BPJS</label>
                  <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukan No BPJS" value="<?php echo $pasien['no_bpjs']?>" required>
                </div>
                <div class="form-group">
                  <label for="">Nama_Pasien</label>
                  <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukan Nama Pasien" value="<?php echo $pasien['nama_pasien']?>" required>
                </div>
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select name="jk" id="jk" class="form-control">
                    <option value="" disabled>- Pilih -</option>
                    <option value="l" <?php if ($pasien['jk'] == 'l') {
                                            echo 'selected';
                                        } ?>>Laki-Laki</option>
                    <option value="p" <?php if ($pasien['jk'] == 'p') {
                                            echo 'selected';
                                        } ?>>Perempuan</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" value="<?php echo $pasien['tempat_lahir']?>" required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" value="<?php echo $pasien['tgl_lahir']?>" required>
                </div>
                <div class="form-group">
                  <label for="">Gol Darah</label>
                  <input type="text" class="form-control" id="gol_darah" name="gol_darah" placeholder="Masukan Golongan Darah"  value="<?php echo $pasien['gol_darah']?>"required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?php echo $pasien['alamat']?>" required>
                </div>
                <div class="form-group">
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Handphone" value="<?php echo $pasien['no_hp']?>" required>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Daftar</label>
                  <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" placeholder="Masukan Tanggal" value="<?php echo $pasien['tgl_daftar']?>" required>
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

<!-- java-script -->

<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var id_pasien = $(this).data('id_pasien');
      var no_rm = $(this).data('no_rm');
      var no_bpjs = $(this).data('no_bpjs');
      var nama_pasien = $(this).data('nama_pasien');
      var jk = $(this).data('jk');
      var tempat_lahir = $(this).data('tempat_lahir');
      var tgl_lahir = $(this).data('tgl_lahir');
      var gol_darah = $(this).data('gol_darah');
      var alamat = $(this).data('alamat');
      var no_hp = $(this).data('no_hp');
      var tgl_daftar = $(this).data('tgl_daftar');
      //  Tambah ini
    //   var nama_poli = $(this).data('nama_poli'); 
    //   var id_poli = $(this).data('id_poli');

      $('#-id_pasien').val(id_pasien);
      $('#-no_rm').val(no_rm);
      $('#-no_bpjs').val(no_bpjs);
      $('#-nama_pasien').val(nama_pasien);
      $('#-jk').val(jk);
      $('#-tempat_lahir').val(tempat_lahir);
      $('#-tgl_lahir').val(tgl_lahir);
      $('#-gol_darah').val(gol_darah);
      $('#-alamat').val(alamat);
      $('#-no_hp').val(no_hp);
      $('#-tgl_daftar').val(tgl_daftar);
      // Tambah ini
    //   $('#edit-nama_poli').val(nama_poli);
    //   $('#edit-id_poli').val(id_poli);
    });
  });
</script>