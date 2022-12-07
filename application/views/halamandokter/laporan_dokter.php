<htmlpageheader name="myheader">
    <table width="100%">
        <tr>
            <td align="center" width="20%">
                <img src="<?php echo base_url('/assets/dist/img/logo.jpeg') ?>" alt="Logo Hesti" width="100" height="100">
            </td>
            <td width="80%" style="text-align: center;">
                <p>
                    <span style="font-weight: bold; font-size: 14pt; text-transform: uppercase;">PEMERINTAH KOTA BANJARMASIN</span><br>
                    <span style="font-weight: bold; font-size: 16pt; text-transform: uppercase;">DINAS KESEHATAN</span><br>
                    <span style="font-size: 14pt; bold; word-spacing: 1px;">PUSKESMAS KELAYAN DALAM</span><br>
                    <span style="font-size: 12pt; word-spacing: 1px;">Jl. Kelayan A, Gg. 12 Rt. 19, Kelurahan Kelayan Dalam, Banjarmasin <br>Kode Pos 70242, Telp. (0511) 6776856, Email: pkmkelayan@gmail.com</span><br>
                    <span style="font-size: 12pt; word-spacing: 1px;"></span>
                </p>
            </td>
        </tr>
    </table>
</htmlpageheader>
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpageheader name="myheader" value="off" show-this-page="-1" />
<br>
<br>
<hr>
<h3 style="text-align: center;">
    <title>LAPORAN DATA DOKTER</title>
</h3>
<br>
<div class="card">
    <div class="card-body">
        <table border="1" cellspacing="0" width="100%" cellpading="7">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Dokter</th>
                    <th>Jabatan</th>
                    <th>Golongan</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Keahlian</th>
                    <th>Poli</th>
                    <th>No Handphone</th>
                  </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                    foreach ($dokter as $row) { ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nip ?></td>
                        <td><?php echo $data->nama_dokter?></td>
                        <td><?php echo $data->jabatan ?></td>
                        <td><?php echo $data->golongan ?></td>
                        <td><?php echo $data->tgl_lahir ?></td>
                        <td><?php echo $data->alamat ?></td>
                        <td><?php echo $data->keahlian ?></td>
                        <td><?php echo $data->nama_poli ?></td>
                        <td><?php echo $data->no_hp ?></td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <div style="width:450px;float:right">
        <p align='center'>
            Banjarmasin, <?php echo date('d F Y') ?>
            <br /><strong>Dekan Universitas Sari Mulia</strong>
            <br>
            <br>
            <br>
            <br>
             H. Ali Rakhman Hakim, M.Farm., Apt.
        </p>
    </div>
    <div style="clear:both"></div>
</div>