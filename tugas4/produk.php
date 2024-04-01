<?php

$a1 = ['kode'=>'1111', 'buah'=>'mangga', 'harga'=>20000, 'jumlah'=>5];
$a2 = ['kode'=>'2222', 'buah'=>'apel', 'harga'=>25000, 'jumlah'=>6];
$a3 = ['kode'=>'3333', 'buah'=>'pisang', 'harga'=>30000, 'jumlah'=>9];
$a4 = ['kode'=>'4444', 'buah'=>'anggur', 'harga'=>40000, 'jumlah'=>7];
$a5 = ['kode'=>'5555', 'buah'=>'jambu', 'harga'=>35000, 'jumlah'=>3];

$ar_buah = [$a1, $a2, $a3, $a4, $a5];

//deklarasikan nama2 judul pada tabel header menggunakan looping
$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];
$jumlah_harga = array_column($ar_buah, 'harga' );
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata2 = $harga_total / $jumlah_transaksi; //harga rata2 ini kalau misal ditaro di atas dia gabisa karena variabel harga total dan harga transaksinya belum terbaca

$keterangan = [
    'Harga Total'=>$harga_total,
    'Harga Tertinggi'=>$harga_tertinggi,
    'Harga Terendah'=>$harga_terendah,
    'Jumlah Transaksi'=>$jumlah_transaksi,
    'Rata-Rata harga'=>$harga_rata2
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
</head>
<body>
    <h3 align="center" style="text-align: center; color: #336a8f;">Daftar Buah-Buahan</h3>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
        <thead>
            <tr >
            <?php
                foreach($ar_judul as $judul){?>
                    <th><?= $judul ?></th>
                    <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($ar_buah as $buah){ 
                //harga kotor
                $bruto = $buah['harga']*$buah['jumlah'];
                //diskon = jika durian dengan jumlah beli >=5 dapat diskon 20% selain itu 10%
                $diskon = ($buah['buah'] == 'apel' && $buah['jumlah'] >=5 ) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;


            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td><?= $buah['harga'] ?></td>
                <td><?= $buah['jumlah'] ?></td>
                <td><?= $bruto?></td>
                <td><?=$harga_diskon?></td>
                <td><?=$harga_bayar?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php foreach($keterangan as $ket => $hasil){ ?>

                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>

          <?php }?>
        </tfoot>
    </table>
</body>
</html>