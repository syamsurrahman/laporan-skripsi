<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <form action="<?php echo base_url('HalamanPelayanan/input_pelayanan') ?>" method="POST">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pasien</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">No Pelayanan</label>
                    <input type="hidden" name="id_pasien" value="<?php echo $pasien['id_pasien'] ?>">
                    <input type="text" class="form-control" id="no_pelayanan" name="no_pelayanan" placeholder="" value="<?php echo $no_pelayanan?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No RM</label>
                    <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukan No RM" value="<?php echo $pasien['no_rm']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No BPJS</label>
                    <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukan No BPJS" value="<?php echo $pasien['no_bpjs']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Nama_Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukan Nama Pasien" value="<?php echo $pasien['nama_pasien']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukan Nama Pasien" 
                    value="<?php if ($pasien['jk'] == "l") {
                        echo "Laki-Laki";
                    } else {
                        echo "Perempuan";
                    }?>" readonly>

                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pasien['alamat']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $pasien['no_hp']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $pasien['tgl_lahir']?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="">Poli</label>
                      <select class="form-control" name="id_poli" id="id_poli" required>
                        <option value="" disabled selected>- Pilih Poli -</option>
                        <?php foreach ($poli as $data) :?>
                        <option value="<?php echo $data->id_poli ?>"><?php echo $data->nama_poli ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="">Keluhan</label>
                    <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Masukan Keluhan"required>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" id="tgl_pelayanan" name="tgl_pelayanan" placeholder="Masukan Tanggal"required>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo base_url('HalamanPelayanan/daftar_pelayanan')?>"  class="btn btn-warning">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan Data</button>
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