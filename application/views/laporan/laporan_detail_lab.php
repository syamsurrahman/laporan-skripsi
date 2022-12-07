<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/laporan.css">

    <title><?= $judul ?></title>
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-1">
                <img src="<?= base_url() ?>assets/dist/img/logo.png" class="kiri" alt="">
            </div>
            <div class="col-md-11">
                <h3 class="a">PEMERINTAH KOTA BANJARMASIN</h3>
                <h2 class="a">DINAS KESEHATAN</h2>
                <h2 class="a">PUSKESMAS KELAYAN DALAM</h2>
                <p class="alamat">Jl. Kelayan A, Gg. 12 Rt. 19, Kelurahan Kelayan Dalam, Banjarmasin <br>Kode Pos 70242, Telp. (0511) 6776856, Email: pkmkelayan@gmail.com</p>
            </div>
        </div>
        <hr style="border: 1px solid black;">
        <div class="row">
            <div class="col text-center">
                <h4><?= $judul ?></h4>
            </div>
        </div>
        <div class="row pb-3 pt-3">
            <div class="col text-left">
                <table>
                    <tbody>
                    <tr>
                  <td width="50%"><strong>Nomor Pelayanan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['no_pelayanan']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Nama</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['nama_pasien']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Tanggal Lahir</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['tgl_lahir']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Jenis Kelamin</strong></td>
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
                  <td width="50%"><strong>Alamat</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['alamat']?></td>
                </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="col text-left">
                <table>
                    <tbody>
                    <tr>
                  <td width="50%"><strong>Spesimen</strong></td>
                  <td>:</td>
                  <td>
                  <?php echo $pelayanan['spesimen']?>
                  </td>
                </tr>
                <tr>
                  <td width="50%"><strong>Tgl pengambilan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['tgl_pengambilan']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Jam pengambilan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['jam_pengambilan']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Tgl Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['tgl_pemeriksaan']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Jam Pemeriksaan</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['jam_pemeriksaan']?></td>
                </tr>
                <tr>
                  <td width="50%"><strong>Petugas</strong></td>
                  <td>:</td>
                  <td><?php echo $pelayanan['nama_pranata']?></td>
                </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row pt-1">
            <div class="col-6">
                <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                      <th style="width: 10px">No.</th>
                      <th style="width: 100px">Jenis Pemeriksaan</th>
                      <th style="width: 100px">Hasil</th>
                      <th style="width: 100px">Nilai Rujukan</th>
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

            <div class="col-6"> 
            <table class="table table-bordered table-sm">
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


        <div class="row pt-4">
            <div class="col-md-8">

            </div>
            <div class="col-md-4 text-center">
                <p id="tanggalwaktu"></p>
                <p class="ex1">Kepala Puskemas</p>
                <b><u>dr. Hj. SORAYA KAUSALLIAH</u></b><br>
                Penata Tk.I / III-d <br>
                19760528 200604 2 019
            </div>
        </div>

    </div>

    <script>
        // window.print();
        // window.onafterprint = window.close;
    </script>

    <script>
        var tw = new Date();
        if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
        else(a = tw.getTime());
        tw.setTime(a);
        var tahun = tw.getFullYear();
        var hari = tw.getDay();
        var bulan = tw.getMonth();
        var tanggal = tw.getDate();
        var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
        var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
        document.getElementById("tanggalwaktu").innerHTML = "Banjarmasin, "  + tanggal + " " + bulanarray[bulan] + " " + tahun;
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>