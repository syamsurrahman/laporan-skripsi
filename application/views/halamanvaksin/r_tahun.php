<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan Data Vaksinasi Covid Tahun</h3>

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
                  <!-- Filter Tahun -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanVaksin/filter_tahun') ?>" method="post">
                      <div class="row">
                        <div class="col-6">
                          <input type="number" class="form-control" name="tahun" placeholder="Tahun (20XX)" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Tahun)</button>
                        </div>
                        <div class="col">
                          <a href="<?php echo base_url('HalamanVaksin/laporan_vaksin_tahun/') . $tahun ?>" target="_blank" class="btn btn-block btn-outline-success">Cetak</a>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Filter Bulan -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanVaksin/filter_bulan') ?>" method="post">
                      <div class="row">
                        <div class="col-3">
                          <input type="number" class="form-control" name="bulan" placeholder="Bulan (1-12)" required>
                        </div>
                        <div class="col-3">
                          <input type="number" class="form-control" name="tahun" placeholder="Tahun (20XX)" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Bulan)</button>
                        </div>
                        <div class="col">
                          <button type="reset" class="btn btn-block btn-outline-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <!-- Filter Bulan -->
                  <div class="col-md-12 pb-3">    
                    <form action="<?= base_url('HalamanVaksin/filter_tanggal') ?>" method="post">
                      <div class="row">
                        <div class="col-3">
                          <input type="date" class="form-control" name="tgl_awal" placeholder="" required>
                        </div>
                        <div class="col-3">
                          <input type="date" class="form-control" name="tgl_akhir" placeholder="" required>
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-block btn-outline-primary">Filter (Periode Tanggal)</button>
                        </div>
                        <div class="col">
                          <button type="reset" class="btn btn-block btn-outline-danger">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>No Tiket</th>
                          <th>NIK</th>
                          <th>Nama Lengkap</th>
                          <th>Tanggal Lahir</th>
                          <th>No Handphone</th>
                          <th>Alamat</th>
                          <th>Lokasi Vaksin</th>
                          <th>Tanggal Vaksin</th>
                          <th>Nama Vaksin</th>
                          <th>Dokter</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <?php if (!empty($vaksinasi)) {
                            $no = 1;
                            foreach ($vaksinasi as $data) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data->no_tiket ?></td>
                                    <td><?php echo $data->nik ?></td>
                                    <td><?php echo $data->nama_lengkap?></td>
                                    <td><?php echo $data->tgl_lahir ?></td>
                                    <td><?php echo $data->no_hp ?></td>
                                    <td><?php echo $data->alamat ?></td>
                                    <td><?php echo $data->lokasi_vaksin ?></td>
                                    <td><?php echo $data->tgl_vaksin ?></td>
                                    <td><?php echo $data->nama_vaksin ?></td>
                                    <td><?php echo $data->nama_dokter ?></td>
                                    <td><?php echo $data->keterangan ?></td>
                                </tr>
                            <?php endforeach;
                        } else { ?>
                            <td colspan="12" class="text-center">Data Tidak Ada</td>
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