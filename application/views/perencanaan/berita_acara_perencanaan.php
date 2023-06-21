<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
<div style="text-align: center; font-weight: bold;">
    BERITA ACARA
    </div>
    <div style="text-align: center; font-weight: bold;">
    PERSETUJUAN KESESUAIAN KEGIATAN PEMANFAATAN RUANG (PKKPR) FORUM PENATAAN RUANG KOTA MALANG
    </div>
    <div style="text-align: center; font-weight: bold;">
    NOMOR : <?php echo $counter; ?>/PKKPR-FPR/<?php echo $current_date; ?>/<?php echo $current_dateY; ?>
    </div>
    <div style="text-align: justify;">
    Pada hari ini <?php echo $hari; ?>, tanggal <?php echo $current_dateD ?> <?php echo $bulan; ?> tahun <?php echo $current_dateY; ?> (<?php echo $current_dateD; ?>/<?php echo $current_dateM; ?>/<?php echo $current_dateY; ?>), telah dibuat dan disepakati oleh anggota Forum Penataan Ruang (FPR) Kota Malang yang dibentuk berdasarkan Keputusan Walikota Malang Nomor : 188.45/102/35.73.112/2022 tentang Pembentukan Forum Penataan Ruang Tahun 2022 – 2027, Berita Acara Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang (PKKPR) untuk :
    <br>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td><?= $counter; ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><?= $hari . ", " . $current_dateD . " " . $bulan . " " . $current_dateY; ?></td>
        </tr>
    </table>
    <h2>Identitas Kegiatan</h2>
    <table>
        
        <tr>
            <td>Bidang</td>
            <td>:</td>
            <td><?= $data['bidang']; ?></td>
        </tr>
        <tr>
            <td>ID Perencanaan</td>
            <td>:</td>
            <td><?= $data["id_perencanaan"]; ?></td>
        </tr>
        <tr>
            <td>Judul Kegiatan</td>
            <td>:</td>
            <td><?= $data["judul_kegiatan"]; ?></td>
        </tr>
        <tr>
            <td>Uraian Kegiatan</td>
            <td>:</td>
            <td><?= $data["uraian_kegiatan"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Kegiatan</td>
            <td>:</td>
            <td><?= $data["tanggal_kegiatan"]; ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $data["status"]; ?></td>
        </tr>
    </table>
</body>
</html>
