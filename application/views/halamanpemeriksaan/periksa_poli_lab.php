<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <form action="<?php echo base_url('HalamanPemeriksaan/input_periksa_poli_lab/' .  $pelayanan['id_pelayanan']) ?>" method="POST">
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
                  <select class="form-control text-center" name="spesimen" id="spesimen" required>
                    <option value="" disabled selected>- Pilih -</option>
                    <option value="Darah">Darah</option>
                    <option value="Urin">Urin</option>
                    <option value="Feses">Feses</option>
                    <option value="Dahak">Dahak</option>
                  </select>
                  </td>
                </tr>
                <tr>
                  <td width="15%"><strong>Tgl pengambilan</strong></td>
                  <td>:</td>
                  <td><input type="date" class="form-control text-center" value="" name="tgl_pengambilan" id="tgl_pengambilan" required></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Jam pengambilan</strong></td>
                  <td>:</td>
                  <td><input type="time" class="form-control text-center" value="" name="jam_pengambilan" id="jam_pengambilan" required></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Tgl Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><input type="date" class="form-control text-center" value="" name="tgl_pemeriksaan" id="tgl_pemeriksaan" required></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Jam Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><input type="time" class="form-control text-center" value="" name="jam_pemeriksaan" id="jam_pemeriksaan" required></td>
                </tr>
                <tr>
                  <td width="15%"><strong>Petugas</strong></td>
                  <td>:</td>
                  <td>
                  <select class="form-control text-center" name="id_pranata" id="id_pranata" required>
                    <option value="" disabled selected>- Pilih -</option>
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
                        <input type="text" class="form-control text-center" value="" name="hemoglobin" id="hemoglobin">
                      </td>
                      <td>LK : 13-16 gr/dl <br>Pr : 12 - 14 gr/dl</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Hematocrit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="hematocrit" id="hematocrit">
                      </td>
                      <td>33-55%</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Hitung Eritrosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="hitung_eritrosit" id="hitung_eritrosit">
                      </td>
                      <td>3,5,5 juta/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Hitung Trombosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="hitung_trombosit" id="hitung_trombosit">
                      </td>
                      <td>150-450 rb/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Hitung Leukosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="hitung_leukosit" id="hitung_leukosit">
                      </td>
                      <td>5000-10.000/mm <sup>3</sup></td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Laju Endap Darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="laju_endap_darah" id="laju_endap_darah">
                      </td>
                      <td>LK : 0-15mm/jam <br>Pr : 0-10mm/jam</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>diffcount</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="diffcount" id="diffcount">
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
                        <input type="text" class="form-control text-center" value="" name="warna" id="warna">
                      </td>
                      <td>Kuning muda-tua</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Kejernihan</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="kejernihan" id="kejernihan">
                      </td>
                      <td>Jernih</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bau</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="bau" id="bau">
                      </td>
                      <td>Bau amoniak</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Volume</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="volume" id="volume">
                      </td>
                      <td>100-300 ml</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>pH</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="ph" id="ph">
                      </td>
                      <td>pH7</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Berat Jenis</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="berat_jenis" id="berat_jenis">
                      </td>
                      <td>1,003-1,030</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Protein</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="protein" id="protein">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>8.</td>
                      <td>Glukosa</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="glukosa" id="glukosa">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>9.</td>
                      <td>Bilirubin</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="bilirubin" id="bilirubin">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>10.</td>
                      <td>Urobilinogen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="urobilinogen" id="urobilinogen">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>11.</td>
                      <td>keton</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="keton" id="keton">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>12.</td>
                      <td>Nitrit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="nitrit" id="nitrit">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>13.</td>
                      <td>Bakteri</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="bakteri" id="bakteri">
                      </td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>14.</td>
                      <td>Crystal</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="crystal" id="crystal">
                      </td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>15.</td>
                      <td>Sedimen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="sedimen" id="sedimen">
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
                        <input type="text" class="form-control text-center" value="" name="glukosa_sewaktu" id="glukosa_sewaktu">
                      </td>
                      <td>80-200 mg/dl</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Glukosa Puasa</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="glukosa_puasa" id="glukosa_puasa">
                      </td>
                      <td>80-110 mg/dl</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Asam urat</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="asam_urat" id="asam_urat">
                      </td>
                      <td>LK : 3,5-7,2 mg/dl <br>Pr : 2,6-6,0 mg/dl</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Trigliserida</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="trigliserida" id="trigliserida">
                      </td>
                      <td>s/d 150 mg/dl</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Cholestrol total</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="cholestrol_total" id="cholestrol_total">
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
                        <input type="text" class="form-control text-center" value="" name="tuberculosis" id="tuberculosis">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Malaria</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="malaria" id="malaria">
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
                        <input type="text" class="form-control text-center" value="" name="tes_kehamilan" id="tes_kehamilan">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Golongan Darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="golongan_darah" id="golongan_darah">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Widal</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="widal" id="widal">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Anti HIV</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="anti_hiv" id="anti_hiv">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Antigen</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="antigen" id="antigen">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Syphilis</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="syphilis" id="syphilis">
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
                        <input type="text" class="form-control text-center" value="" name="konsistensi" id="konsistensi">
                      </td>
                      <td>Lembek/kenyal</td>
                  </tr>
                  <tr>
                      <td>2.</td>
                      <td>Warna</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="warna1" id="warna1">
                      </td>
                      <td>Kuning Coklat</td>
                  </tr>
                  <tr>
                      <td>3.</td>
                      <td>Bau</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="bau1" id="bau1">
                      </td>
                      <td>Bau Spesifik</td>
                  </tr>
                  <tr>
                      <td>4.</td>
                      <td>Lendir/darah</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="lendir_darah" id="lendir_darah">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>5.</td>
                      <td>Telur Cacing</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="telur_cacing" id="telur_cacing">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>6.</td>
                      <td>Amuba</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="amuba" id="amuba">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>7.</td>
                      <td>Eritrosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="eritrosit" id="eritrosit">
                      </td>
                      <td>Negatif</td>
                  </tr>
                  <tr>
                      <td>8.</td>
                      <td>Leukosit</td>
                      <td>
                        <input type="text" class="form-control text-center" value="" name="leukosit" id="leukosit">
                      </td>
                      <td>Negatif</td>
                  </tr>

                  </tbody>
              </table>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 pb-5">
          <a href="<?php echo base_url('HalamanPemeriksaan/poli_lab')?>"  class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </div>
    </form>  
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->