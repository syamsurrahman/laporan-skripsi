<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Dokter</h3>

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
                  <?php if($this->session->userdata('ses_level') == 1) {?>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-input">
                      Tambah Data Dokter
                    </button>
                  <?php } elseif($this->session->userdata('ses_level') == 2) {}?>

                    <!-- <a href="<?php echo base_url('HalamanDokter/laporan') ?>" class="btn btn-primary" target="_blank">Cetak Data Dokter</a> -->
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
                        <th>TTL</th>
                        <th>Alamat</th>
                        <th>keahlian</th>
                        <th>Poli</th>
                        <th>Handphone</th>
                        <?php if($this->session->userdata('ses_level') == 1) {?>
                        <th>Aksi</th>
                        <?php } elseif($this->session->userdata('ses_level') == 2) {}?>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($dokter as $data) { ?> 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nip ?></td>
                            <td><?php echo $data->nama_dokter?></td>
                            <td><?php echo $data->jabatan ?></td>
                            <td><?php echo $data->golongan ?></td>
                            <td><?php echo $data->tgl_lahir ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->keahlian ?></td>
                            <td><?php echo $data->nama_poli ?></td>
                            <td><?php echo $data->no_hp ?></td>
                            
                            <?php if($this->session->userdata('ses_level') == 1) {?>
                            <td>
                              <button class="btn btn-warning btn-sm" id="edit" type="button" data-toggle="modal" data-target="#modal-edit" 
                                data-id_dokter="<?php echo $data->id_dokter?>"
                                data-nip="<?php echo $data->nip?>" 
                                data-nama_dokter="<?php echo $data->nama_dokter ?>"
                                data-jabatan="<?php echo $data->jabatan ?>"
                                data-golongan="<?php echo $data->golongan ?>"
                                data-tgl_lahir="<?php echo $data->tgl_lahir ?>"
                                data-alamat="<?php echo $data->alamat ?>"
                                data-keahlian="<?php echo $data->keahlian ?>"
                                data-nama_poli="<?php echo $data->nama_poli ?>"
                                data-id_poli="<?php echo $data->id_poli ?>"
                                data-no_hp="<?php echo $data->no_hp ?>" >
                                Edit
                              </button>
                              <a href="<?php echo base_url('HalamanDokter/hapus_dokter/'. $data->id_dokter)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
                            </td>
                            <?php } elseif($this->session->userdata('ses_level') == 2) {}?>
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
                    <option value="" disabled selected>- PILIH GOLONGAN -</option>
                    <option value="III/b">III/b</option>
                    <option value="III/c">III/c</option>
                    <option value="III/d">III/d</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" required>
                </div>
                <div class="form-group">
                  <label for="">Keahlian</label>
                  <input type="text" class="form-control" id="keahlian" name="keahlian" placeholder="Masukan Keahlian" required>
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
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan NO Handphone" required>
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
                    <option value="" disabled selected>- PILIH GOLONGAN-</option>
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