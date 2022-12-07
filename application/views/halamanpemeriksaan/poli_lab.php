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
                    <a href="<?php echo base_url('HalamanPemeriksaan/laporan_poli_lab')?>" target="_blank" class="btn btn-success">
                      Cetak Laporan
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>No RM</th>
                          <th>Nama Pasien</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Daftar</th>
                          <th>Spesimen</th>
                          <th>Tgl/Jam Pengambilan</th>
                          <th>Tgl/Jam Pemeriksaan</th>
                          <th>Petugas</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($pelayanan as $data) { ?> 
                          <tr>
                          <td><?php echo $no++ ?></td>
                              <td><?php echo $data->no_rm ?></td>
                              <td><?php echo $data->nama_pasien?></td>
                              <td>
                                <?php if($data->jk == 'l') {
                                  echo 'Laki - Laki';
                                } else { 
                                  echo 'Perempuan';
                                }  ?>
                              </td>
                              <td><?php echo $data->tgl_pelayanan ?></td>
                              <td><?php echo $data->spesimen ?></td>
                              <td>
                                <?php echo $data->tgl_pengambilan ?> <br>
                                <?php echo $data->jam_pengambilan ?> WITA
                              </td>
                              <td>
                                <?php echo $data->tgl_pemeriksaan ?> <br>
                                <?php echo $data->jam_pemeriksaan ?> WITA
                              </td>
                              <td><?php echo $data->nama_pranata ?></td>
                            <td>
                            <?php if ($data->status_pemeriksaan == NULL) : ?>
                              <a href="<?php echo base_url('HalamanPemeriksaan/periksa_poli_lab/'. $data->id_pelayanan)?>" class="btn btn-warning btn-sm">Periksa</a>
                            <?php elseif ($data->status_pemeriksaan == 1) : ?>
                              <a href="<?php echo base_url('HalamanPemeriksaan/detail_poli_lab/'. $data->id_periksalab)?>" class="btn btn-primary btn-sm">Lihat Hasil Lab</a>
                            <?php endif; ?>
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