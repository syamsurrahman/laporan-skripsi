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
              <div class="card-body">
              <div class="row">
                  <div class="col-md-12 pb-3">
                    <a href="<?php echo base_url('HalamanPasien/form_tambah')?>" class="btn btn-primary">
                      Tambah Data Pasien
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>No RM</th>
                        <th>NO BPJS</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Gol Darah</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $no = 1;
                        foreach ($pasien as $data) { ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->no_rm ?></td>
                            <td><?php echo $data->no_bpjs ?></td>
                            <td><?php echo $data->nama_pasien?></td>
                            <td>
                              <?php if($data->jk == 'l') {
                                echo 'Laki - Laki';
                              } else { 
                                echo 'Perempuan';
                              }  ?>
                            </td>
                            <td><?php echo $data->tempat_lahir ?></td>
                            <td><?php echo $data->tgl_lahir ?></td>
                            <td><?php echo $data->gol_darah ?></td>
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->no_hp ?></td>
                            <td><?php echo $data->tgl_daftar ?></td>
                            <td>
                              <a href="<?php echo base_url('HalamanPasien/form_edit/' . $data->id_pasien)?>" class="btn btn-success btn-sm">
                                Edit
                              </a>
                              <a href="<?php echo base_url('HalamanPasien/hapus_pasien/'. $data->id_pasien)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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