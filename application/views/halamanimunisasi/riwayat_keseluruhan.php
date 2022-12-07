<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Imunisasi</h3>

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
                    <a href="<?php echo base_url('HalamanImunisasi')?>" class="btn btn-success">
                      Daftar Imunisasi
                    </a>
                    <!-- <a href="<?php echo base_url('HalamanImunisasi/laporan_imunisasi')?>" target="_blank" class="btn btn-primary">
                      Cetak Laporan
                    </a> -->
                  </div>
                  <div class="col-md-12">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Balita</th>
                        <th>Nama Ibu</th>
                        <!-- <th>Tanggal Lahir</th> -->
                        <th>Umur</th>
                        <!-- <th>No Hp</th> -->
                        <th>Vaksin Ke - </th>
                        <th>Jenis Vaksin</th>
                        <th>Tanggal Penyuntikan</th>
                        <th>Petugas</th>
                        <th>Keterangan</th>
                      </tr>
                      </thead>
                        <?php 
                        $no = 1;
                        // Menampilkan Data Dari Database
                        foreach ($imunisasi as $data) { ?> 
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_balita ?></td>
                            <td><?php echo $data->nama_ibu?> <br> <?php echo $data->nik_ibu?> </td>
                            <!-- <td><?php echo $data->tgl_balita ?></td> -->
                            <td><?php echo $data->umur ?></td>
                            <!-- <td><?php echo $data->no_hp ?></td> -->
                            <td>Vaksin ke- <?php echo $data->vaksin_ke ?></td>
                            <td><?php echo $data->jenis_vaksin ?></td>
                            <td><?php echo $data->tgl_penyuntikan ?></td>
                            <td><?php echo $data->nama_bidan ?></td>
                            <td>Vaksin Selanjutnya tgl <?php echo $data->keterangan ?></td>
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