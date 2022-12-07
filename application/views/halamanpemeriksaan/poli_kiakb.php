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
                    <a href="<?php echo base_url('HalamanPemeriksaan/laporan_poli_kiakb')?>" target="_blank" class="btn btn-success">
                      Cetak Laporan
                    </a>
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>No RM</th>
                          <th>No Pelayanan</th>
                          <th>Nama Pasien</th>
                          <th>Tanggal Daftar</th>
                          <th>HPHT</th>
                          <th>HTP</th>
                          <th>Hamil Ke-</th>
                          <th>Dokter</th>
                          <th>Keterangan</th>
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
                                <td><?php echo $data->no_pelayanan ?></td>
                                <td><?php echo $data->nama_pasien?></td>
                                <td><?php echo $data->tgl_pelayanan ?></td>
                                <td><?php echo $data->hpht ?></td>
                                <td><?php echo $data->htp ?></td>
                                <td><?php echo $data->hamil_ke ?></td>
                                <td><?php echo $data->nama_dokter ?></td>
                                <td><?php echo $data->keterangan ?></td>
                            <td>
                            <?php if ($data->status_pemeriksaan == NULL) : ?>
                              <a href="<?php echo base_url('HalamanPemeriksaan/periksa_poli_kiakb/'. $data->id_pelayanan)?>" class="btn btn-warning btn-sm">Lengkapi Data</a>
                            <?php elseif ($data->status_pemeriksaan == 1) : ?>
                              <a href="<?php echo base_url('HalamanPemeriksaan/catatan_poli_kiakb/'. $data->id_pemeriksaan)?>" class="btn btn-primary btn-sm">Catatan</a>
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