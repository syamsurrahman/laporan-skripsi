<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pelayanan</h3>

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
                    <a href="<?php echo base_url('HalamanPelayanan/daftar_pelayanan')?>" class="btn btn-success">
                      Daftar Pelayanan
                    </a>
                    <a href="<?php echo base_url('HalamanPelayanan/laporan_pelayanan')?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>No Pelayanan</th>
                        <th>No RM</th>
                        <th>No BPJS</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Poli</th>
                        <th>Keluhan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($pelayanan as $data) { ?> 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->no_pelayanan ?></td>
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
                            <td><?php echo $data->alamat ?></td>
                            <td><?php echo $data->no_hp ?></td>
                            <td><?php echo $data->tgl_lahir ?></td>
                            <td><?php echo $data->nama_poli ?></td>
                            <td><?php echo $data->keluhan ?></td>
                            <td><?php echo $data->tgl_pelayanan ?></td>
                            <td>
                              <a href="<?php echo base_url('HalamanPelayanan/hapus_pelayanan/'. $data->id_pelayanan)?>" class="btn btn-danger btn-sm" onclick="return confirm ('Yakin ingin menghapus data ini');">Hapus</a>
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