<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <form action="" method="POST">
      <div class="row">
        <div class="col-lg-12 pb-3">
          <a href="<?php echo base_url('HalamanPemeriksaan/laporan_detail_lab/' . $pelayanan['id_periksalab'])?>" target="_blank" class="btn btn-success">Cetak Data</a>
        </div>
      </div>
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Pasien</h5>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <!-- <tr>
                  <td width="15%"><strong>Pasien</strong></td>
                  <td>:</td>
                  <td>Umum/JKN</td>
                </tr> -->
                <tr>
                  <td width="15%"><strong>Nomor Pelayanan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['no_pelayanan']?></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Nama</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['nama_pasien']?></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Tanggal Lahir</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['tgl_lahir']?></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Jenis Kelamin</strong></td>
                  <td>:</td>
                  <td>
                    <?php if ($pelayanan['jk'] == "l") {
                        echo "Laki-Laki";
                    } else {
                        echo "Perempuan";
                    }?>
                  </td>
                </tr>
                <tr>
                  <td width="15%"><strong>Alamat</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['alamat']?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card card-success card-outline">
            <div class="card-header">
              <h5 class="m-0">Data Kelengkapan</h5>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <tr>
                  <td width="15%"><strong>Spesimen</strong></td>
                  <td>:</td>
                  <td>
                  <select class="form-control text-center" name="spesimen" id="spesimen" readonly>
                    <option value="" disabled selected>- Pilih -</option>
                    <option value="Darah" <?php if ($pelayanan['spesimen'] == 'Darah') {
                                            echo 'selected';
                                        } ?>>Darah</option>
                    <option value="Urin" <?php if ($pelayanan['spesimen'] == 'Urin') {
                                            echo 'selected';
                                        } ?>>Urin</option>
                    <option value="Feses" <?php if ($pelayanan['spesimen'] == 'Feses') {
                                            echo 'selected';
                                        } ?>>Feses</option>
                    <option value="Dahak" <?php if ($pelayanan['spesimen'] == 'Dahak') {
                                            echo 'selected';
                                        } ?>>Dahak</option>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td width="15%"><strong>Tgl pengambilan</strong></td>
                  <td>:</td>
                  <td><input type="date" class="form-control text-center" value="<?php echo $pelayanan['tgl_pengambilan']?>" name="tgl_pengambilan" id="tgl_pengambilan" readonly></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Jam pengambilan</strong></td>
                  <td>:</td>
                  <td><input type="time" class="form-control text-center" value="<?php echo $pelayanan['jam_pengambilan']?>" name="jam_pengambilan" id="jam_pengambilan" readonly></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Tgl Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><input type="date" class="form-control text-center" value="<?php echo $pelayanan['tgl_pemeriksaan']?>" name="tgl_pemeriksaan" id="tgl_pemeriksaan" readonly></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Jam Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><input type="time" class="form-control text-center" value="<?php echo $pelayanan['jam_pemeriksaan']?>" name="<?php echo $pelayanan['jam_pemeriksaan']?>" id="jam_pemeriksaan" readonly></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Petugas</strong></td>
                  <td>:</td>
                  <td>
                  <select class="form-control text-center" name="id_pranata" id="id_pranata" readonly>
                    <option value="<?= $pelayanan['id_pranata'] ?>" selected><?= $pelayanan['nama_pranata'] ?></option>
                    <?php foreach ($pranata as $data) { ?>
                            <option value="<?= $data->id_pranata ?>">
                                <?= $data->nama_pranata ?>
                            </option>
                        <?php } ?>
                  </select>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card card-success card-outline">
              <div class="card-header">
              <h5 class="m-0">Data Hasil Lab</h5>
              </div>
              <div class="card-body">
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 100px">Jenis Pemeriksaan</th>
                      <th style="width: 100px">Hasil</th>
                      <th style="width: 100px">Nilai Rujuan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          HEMATOLOGI
                      </td>
                  </tr>
                  <tr>
                      <td>1.</td>
                      <td>Hemoglobin</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?= $pelayanan['hemoglobin']?>" name="hemoglobin" id="hemoglobin" readonly>
                      </td>
                      <td>LK : 13-16 gr/dl <br>Pr : 12 - 14 gr/dl</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Hematocrit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['hematocrit']?>" name="hematocrit" id="hematocrit" readonly>
                      </td>
                      <td>33-55%</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Hitung Eritrosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['hitung_eritrosit']?>" name="hitung_eritrosit" id="hitung_eritrosit" readonly>
                      </td>
                      <td>3,5,5 juta/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Hitung Trombosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['hitung_trombosit']?>" name="hitung_trombosit" id="hitung_trombosit" readonly>
                      </td>
                      <td>150-450 rb/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Hitung Leukosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['hitung_leukosit']?>" name="hitung_leukosit" id="hitung_leukosit" readonly>
                      </td>
                      <td>5000-10.000/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Laju Endap Darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['laju_endap_darah']?>" name="laju_endap_darah" id="laju_endap_darah" readonly>
                      </td>
                      <td>LK : 0-15mm/jam <br>Pr : 0-10mm/jam</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>diffcount</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['diffcount']?>" name="diffcount" id="diffcount" readonly>
                      </td>
                      <td></td>
                  </tr>
                  
                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          Urinalisa
                      </td>
                  </tr>
                  <tr>
                      <td>1.</td>
                      <td>Warna</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['warna']?>" name="warna" id="warna" readonly>
                      </td>
                      <td>Kuning muda-tua</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Kejernihan</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['kejernihan']?>" name="kejernihan" id="kejernihan" readonly>
                      </td>
                      <td>Jernih</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bau</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['bau']?>" name="bau" id="bau" readonly>
                      </td>
                      <td>Bau amoniak</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Volume</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['volume']?>" name="volume" id="volume" readonly>
                      </td>
                      <td>100-300 ml</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>pH</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['ph']?>" name="ph" id="ph" readonly>
                      </td>
                      <td>pH7</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Berat Jenis</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['berat_jenis']?>" name="berat_jenis" id="berat_jenis" readonly>
                      </td>
                      <td>1,003-1,030</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Protein</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['protein']?>" name="protein" id="protein" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>8.</td>
                      <td>Glukosa</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['glukosa']?>" name="glukosa" id="glukosa" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>9.</td>
                      <td>Bilirubin</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['bilirubin']?>" name="bilirubin" id="bilirubin" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>10.</td>
                      <td>Urobilinogen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['urobilinogen']?>" name="urobilinogen" id="urobilinogen" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>11.</td>
                      <td>keton</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['keton']?>" name="keton" id="keton" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>12.</td>
                      <td>Nitrit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['nitrit']?>" name="nitrit" id="nitrit" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>13.</td>
                      <td>Bakteri</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['bakteri']?>" name="bakteri" id="bakteri" readonly>
                      </td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>14.</td>
                      <td>Crystal</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['crystal']?>" name="crystal" id="crystal" readonly>
                      </td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>15.</td>
                      <td>Sedimen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['sedimen']?>" name="sedimen" id="sedimen" readonly>
                      </td>
                      <td></td>
                  </tr>
                  </tbody>
              </table>
              </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card card-success card-outline">
              <div class="card-header">
              <h5 class="m-0">Data Hasil Lab</h5>
              </div>
              <div class="card-body">
              <table class="table table-striped">
                  <thead>
                  <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 100px">Jenis Pemeriksaan</th>
                      <th style="width: 100px">Hasil</th>
                      <th style="width: 100px">Nilai Rujuan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          KIMIA KLINIK
                      </td>
                  </tr>
                  <tr>
                      <td>1.</td>
                      <td>Glukosa Sewaktu</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['glukosa_sewaktu']?>" name="glukosa_sewaktu" id="glukosa_sewaktu" readonly>
                      </td>
                      <td>80-200 mg/dl</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Glukosa Puasa</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['glukosa_puasa']?>" name="glukosa_puasa" id="glukosa_puasa" readonly>
                      </td>
                      <td>80-110 mg/dl</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Asam urat</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['asam_urat']?>" name="asam_urat" id="asam_urat" readonly>
                      </td>
                      <td>LK : 3,5-7,2 mg/dl <br>Pr : 2,6-6,0 mg/dl</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Trigliserida</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['trigliserida']?>" name="trigliserida" id="trigliserida" readonly>
                      </td>
                      <td>s/d 150 mg/dl</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Cholestrol total</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['cholestrol_total']?>" name="cholestrol_total" id="cholestrol_total" readonly>
                      </td>
                      <td>s/d 200 mg/dl</td>
                  </tr>

                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          MIKROBIOLOGI & PARASITOLOGI
                      </td>
                  </tr>

                  <tr>
                      <td>1.</td>
                      <td>M Tuberculosis</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['tuberculosis']?>" name="tuberculosis" id="tuberculosis" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Malaria</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['malaria']?>" name="malaria" id="malaria" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>

                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          IMUNOLOGI
                      </td>
                  </tr>

                  <tr>
                      <td>1.</td>
                      <td>Tes Kehamilan</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['tes_kehamilan']?>" name="tes_kehamilan" id="tes_kehamilan" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Golongan Darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['golongan_darah']?>" name="golongan_darah" id="golongan_darah" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Widal</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['widal']?>" name="widal" id="widal" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Anti HIV</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['anti_hiv']?>" name="anti_hiv" id="anti_hiv" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Antigen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['antigen']?>" name="antigen" id="antigen" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Syphilis</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['syphilis']?>" name="syphilis" id="syphilis" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>

                  <tr>
                    <td></td>
                      <td colspan="3" class="text-bold">
                          FESES
                      </td>
                  </tr>

                  <tr>
                      <td>1.</td>
                      <td>Konsistensi</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['konsistensi']?>" name="konsistensi" id="konsistensi" readonly>
                      </td>
                      <td>Lembek/kenyal</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Warna</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['warna1']?>" name="warna1" id="warna1" readonly>
                      </td>
                      <td>Kuning Coklat</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bau</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['bau1']?>" name="bau1" id="bau1" readonly>
                      </td>
                      <td>Bau Spesifik</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Lendir/darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['lendir_darah']?>" name="lendir_darah" id="lendir_darah" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Telur Cacing</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['telur_cacing']?>" name="telur_cacing" id="telur_cacing" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Amuba</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['amuba']?>" name="amuba" id="amuba" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Eritrosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['eritrosit']?>" name="eritrosit" id="eritrosit" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>8.</td>
                      <td>Leukosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="<?php echo $pelayanan['leukosit']?>" name="leukosit" id="leukosit" readonly>
                      </td>
                      <td>Negatif</td>
                  </tr>

                  </tbody>
              </table>
              </div>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-lg-12 pb-5">
          <a href="<?php echo base_url('HalamanPemeriksaan/poli_lab')?>"  class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </div> -->
    </form>  
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->