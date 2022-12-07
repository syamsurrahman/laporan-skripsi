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
        <div class="row pb-2 pt-1">
            <div class="col text-center">
                <!-- <h4>Rekap Data <?= $judul ?></h4> -->
                <h4>Laporan Data Jadwal Imunisasi Selanjutnya</h4>
            </div>
        </div>
        <div class="row pt-2">
            <div class="col">
                <table class="table table-bordered table-sm">
                    <thead class="text-center">
                    <th>No</th>
                          <th>Tanggal Vaksin Selanjutnya</th> <!-- Di ambil dari keterangan -->
                          <th>Nama Balita</th>
                          <th>Nama Ibu</th>
                          <th>Tanggal Lahir</th>
                          <th>Umur</th>
                          <th>Vaksin Terakhir </th> <!-- Di ambil nama jenis Vaksin Terakhir -->
                    </thead>
                    <tbody>
                        <?php if (!empty($imunisasi)) {
                            $no = 1;
                            foreach ($imunisasi as $data) : ?>
                                <tr>
                                <td><?php echo $no++ ?></td>
                              <td><?php echo $data->keterangan ?></td>
                              <td><?php echo $data->nama_balita ?></td>
                              <td><?php echo $data->nama_ibu ?></td>
                              <td><?php echo $data->tgl_lahir ?></td>
                              <td><?php echo $data->umur ?></td>
                              <td><?php echo $data->jenis_vaksin ?></td>                     
                                </tr>
                            <?php endforeach;
                        } else { ?>
                            <td colspan="8" class="text-center">Data Tidak Ada</td>
                        <?php } ?>
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