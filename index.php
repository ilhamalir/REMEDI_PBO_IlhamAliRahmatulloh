<?php

require_once "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi Studio Foto</title>

    <style>

        body{
            font-family:Arial;
            background:#f5f5f5;
            margin:30px;
        }

        h2{
            text-align:center;
        }

        h3{
            background:#dddddd;
            padding:10px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-bottom:30px;
            background:white;
        }

        th,td{
            border:1px solid black;
            padding:8px;
            text-align:center;
        }

        th{
            background:#4CAF50;
            color:white;
        }

    </style>

</head>

<body>

<h2>DATA RESERVASI STUDIO FOTO</h2>

<!-- REGULER -->

<h3>Reservasi Reguler</h3>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Durasi</th>
<th>Tarif/Jam</th>
<th>Background</th>
<th>Cetak Foto</th>

</tr>

<?php

$query=mysqli_query($koneksi,"SELECT * FROM tabel_reservasi WHERE jenis_paket='Reguler'");

while($data=mysqli_fetch_array($query))
{

?>

<tr>

<td><?= $data['id_reservasi']; ?></td>
<td><?= $data['nama_pelanggan']; ?></td>
<td><?= $data['tanggal_booking']; ?></td>
<td><?= $data['durasi_jam']; ?></td>
<td><?= number_format($data['tarif_dasar_per_jam']); ?></td>
<td><?= $data['tipe_background']; ?></td>
<td><?= $data['cetak_foto_lembar']; ?></td>

</tr>

<?php

}

?>

</table>


<!-- PREMIUM -->

<h3>Reservasi Premium</h3>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Durasi</th>
<th>Tarif/Jam</th>
<th>Talent</th>
<th>Makeup</th>

</tr>

<?php

$query=mysqli_query($koneksi,"SELECT * FROM tabel_reservasi WHERE jenis_paket='Premium'");

while($data=mysqli_fetch_array($query))
{

?>

<tr>

<td><?= $data['id_reservasi']; ?></td>
<td><?= $data['nama_pelanggan']; ?></td>
<td><?= $data['tanggal_booking']; ?></td>
<td><?= $data['durasi_jam']; ?></td>
<td><?= number_format($data['tarif_dasar_per_jam']); ?></td>
<td><?= $data['kuota_talent_orang']; ?></td>
<td><?= $data['layanan_makeup']; ?></td>

</tr>

<?php

}

?>

</table>


<!-- EVENT -->

<h3>Reservasi Event</h3>

<table>

<tr>

<th>ID</th>
<th>Nama</th>
<th>Tanggal</th>
<th>Durasi</th>
<th>Tarif/Jam</th>
<th>Lokasi</th>
<th>Transportasi</th>

</tr>

<?php

$query=mysqli_query($koneksi,"SELECT * FROM tabel_reservasi WHERE jenis_paket='Event'");

while($data=mysqli_fetch_array($query))
{

?>

<tr>

<td><?= $data['id_reservasi']; ?></td>
<td><?= $data['nama_pelanggan']; ?></td>
<td><?= $data['tanggal_booking']; ?></td>
<td><?= $data['durasi_jam']; ?></td>
<td><?= number_format($data['tarif_dasar_per_jam']); ?></td>
<td><?= $data['nama_lokasi_luar']; ?></td>
<td><?= number_format($data['biaya_transportasi_tim']); ?></td>

</tr>

<?php

}

?>

</table>

</body>
</html>