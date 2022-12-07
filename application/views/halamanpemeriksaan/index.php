<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $totPoliAnak ?></h3>
              <h2>POLI ANAK</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_anak')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $totPoliGigi ?></h3>
              <h2>POLI GIGI</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_gigi')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $totPoliKiaKB ?></h3>
              <h2>POLI KIA & KB</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_kiakb')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $totPoliUmum ?></h3>
              <h2>POLI UMUM</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_umum')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $totPoliLab ?></h3>
              <h2>POLI LAB</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_lab')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $totPoliTB ?></h3>
              <h2>POLI TB</h2>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url('HalamanPemeriksaan/poli_tb')?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
          </div>
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
              <h4 class="modal-title">Input Data Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanDokter/input_dokter') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" required>
                </div>
                <div class="form-group">
                  <label for="">Nama Dokter</label>
                  <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Masukan Nama Dokter" required>
                  
                </div>
                <div class="form-group">
                  <label for="">Jabatan</label>
                  <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukan Jabatan" required>
                </div>
                <div class="form-group">
                  <label for="">Golongan</label>
                  <select class="form-control" name="golongan" id="golongan" required>
                    <option value="" disabled selected>- PILIH -</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Keterangan" required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Keterangan" required>
                </div>
                <div class="form-group">
                  <label for="">Keahlian</label>
                  <input type="text" class="form-control" id="keahlian" name="keahlian" placeholder="Masukan Keterangan" required>
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
                  <label for="">No Handphone</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan Keterangan" required>
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
              <h4 class="modal-title">Edit Data Dokter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- Awal Form -->
            <!-- Form Action Berfungsi mengarahkan Inputan u/ di Proses di Controller  -->
            <form action="<?php echo base_url('HalamanDokter/edit_dokter') ?>" method="POST"> 
              <div class="modal-body">
                <div class="form-group">
                  <label for="">NIP</label>
                  <input type="hidden" id="edit-id_dokter" name="id_dokter">
                  <input type="text" class="form-control" id="edit-nip" name="nip" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Nama Dokter</label>
                  <input type="text" class="form-control" id="edit-nama_dokter" name="nama_dokter" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Jabatan</label>
                  <input type="text" class="form-control" id="edit-jabatan" name="jabatan" placeholder="Masukan Nama Poli">
                </div>
                <div class="form-group">
                  <label for="">Golongan</label>
                  <select class="form-control" name="golongan" id="edit-golongan" required>
                    <option value="" disabled selected>- PILIH -</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" class="form-control" id="edit-tgl_lahir" name="tgl_lahir" placeholder="Masukan Keterangan">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="edit-alamat" name="alamat" placeholder="Masukan Keterangan">
                </div>
                <div class="form-group">
                  <label for="">Keahlian</label>
                  <input type="text" class="form-control" id="edit-keahlian" name="keahlian" placeholder="Masukan Keterangan">
                </div>
                
                <div class="form-group">
                  <label for="">Poli</label>
                  <input type="text" class="form-control" id="edit-nama_poli" name="nama_poli" placeholder="Masukan Keterangan" readonly>
                </div>
                <div class="form-group">
                  <label for="">Ubah Poli *</label>
                  <select class="form-control" name="id_poli" required>
                  <option id="edit-id_poli">- Pilih Poli -</option>
                    <?php foreach ($poli as $data) :?>
                      <option value="<?php echo $data->id_poli ?>"><?php echo $data->nama_poli ?></option>
                    <?php endforeach; ?>
                  </select>
                  <span>*) Pilih Poli Jika Ingin Mengubah Data</span>
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

<!-- java-script -->

<script>
  $(document).ready(function() {
    $(document).on('click', '#edit', function() {
      var id_dokter = $(this).data('id_dokter');
      var nip = $(this).data('nip');
      var nama_dokter = $(this).data('nama_dokter');
      var jabatan = $(this).data('jabatan');
      var golongan = $(this).data('golongan');
      var tgl_lahir = $(this).data('tgl_lahir');
      var alamat = $(this).data('alamat');
      var keahlian = $(this).data('keahlian');
      var no_hp = $(this).data('no_hp');
      //  Tambah ini
      var nama_poli = $(this).data('nama_poli'); 
      var id_poli = $(this).data('id_poli');

      $('#edit-id_dokter').val(id_dokter);
      $('#edit-nip').val(nip);
      $('#edit-nama_dokter').val(nama_dokter);
      $('#edit-jabatan').val(jabatan);
      $('#edit-golongan').val(golongan);
      $('#edit-tgl_lahir').val(tgl_lahir);
      $('#edit-alamat').val(alamat);
      $('#edit-keahlian').val(keahlian);
      $('#edit-no_hp').val(no_hp);
      // Tambah ini
      $('#edit-nama_poli').val(nama_poli);
      $('#edit-id_poli').val(id_poli);
    });
  });
</script>