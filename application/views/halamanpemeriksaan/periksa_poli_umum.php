<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <form action="<?php echo base_url('HalamanPemeriksaan/input_periksa_poli_umum') ?>" method="POST">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Pasien</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="">No Pelayanan</label>
                    <input type="hidden" name="id_pasien" value="<?php echo $pelayanan['id_pasien'] ?>">
                    <input type="hidden" name="id_poli" value="<?php echo $pelayanan['id_poli'] ?>">
                    <input type="hidden" name="id_pelayanan" value="<?php echo $pelayanan['id_pelayanan'] ?>">
                    <input type="text" class="form-control" id="no_pelayanan" name="no_pelayanan" placeholder="" value="<?php echo $pelayanan['no_pelayanan']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No RM</label>
                    <input type="text" class="form-control" id="no_rm" name="no_rm" placeholder="Masukan No RM" value="<?php echo $pelayanan['no_rm']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No BPJS</label>
                    <input type="text" class="form-control" id="no_bpjs" name="no_bpjs" placeholder="Masukan No BPJS" value="<?php echo $pelayanan['no_bpjs']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Nama_Pasien</label>
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukan Nama Pasien" value="<?php echo $pelayanan['nama_pasien']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jk" name="jk" placeholder="Masukan Nama Pasien" 
                    value="<?php if ($pelayanan['jk'] == "l") {
                        echo "Laki-Laki";
                    } else {
                        echo "Perempuan";
                    }?>" readonly>

                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pelayanan['alamat']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $pelayanan['no_hp']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $pelayanan['tgl_lahir']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Keluhan</label>
                    <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?php echo $pelayanan['keluhan']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal Daftar</label>
                    <input type="date" class="form-control" id="tgl_pelayanan" name="tgl_pelayanan" value="<?php echo $pelayanan['tgl_pelayanan']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Diagnosa</label>
                    <input type="text" class="form-control" id="diagnosa" name="diagnosa" required>
                  </div>
                  <div class="form-group">
                    <label for="">Rujukan</label>
                    <input type="text" class="form-control" id="rujukan" name="rujukan" required>
                  </div>
                  <div class="form-group">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                  </div>
                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo base_url('HalamanPemeriksaan/poli_umum')?>"  class="btn btn-warning">Kembali</a>
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