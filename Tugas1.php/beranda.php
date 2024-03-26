<?php
$nama="Shofiyyah Nur Kamilah";
$ttl="Bogor, 28 Mei 2003";
$alamat="Jln.kemuning 3, Cimanggis, Bojonggede";
$hobi="Menonton film, Membaca Buku, Travelling";
$email ="shofi.kamilah28@gmail.com";
$sd="SDIT Ummul Quro Bogor";
$smp="SMPIT Ummul Quro Bogor";
$sma="SMAIT Ummul Quro Bogor";
$kampus="STT Terpadu Nurul Fikri";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body{
            margin-left: 50px;
            margin-right: 60px;
        }

        h1{
            text-align: center;
            margin-bottom: 50px;
            color: #336a8f;
        }

    </style>
</head>
<body>

    <h1>Homepage : Profile </h1>
    <p>
        <img align="middle" src="https://images.pexels.com/photos/36029/aroni-arsa-children-little.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" style="display: block;
        margin-left: auto;
        margin-right: auto;  width: 15%;" >    <br>  <br>
        <p style="text-align: justify; line-height: 30px;">Nama lengkap saya adalah Shofiyyah Nur Kamilah. Saya merupakan mahasiswi semester 6 Program Studi Sistem Informasi di STT Terpadu Nurul Fikri. 
            saat ini saya sedang mengikuti kegiatan studi independen dari program kampus meredeka di NF Academy 
            dengan mengambil program Akademi Fullstack Web Development. Saya memiliki minat yang tinggi terhadap bidang teknologi khususnya di bidang web development, Selain itu saya 
            juga tertarik dengan ui/ux serta ingin mempelajari banyak hal baru lainnya.
        </p>
    </p>


    <fieldset style=" border: 1.5px solid black;">
        <legend>
            <font size="5" color="#336a8f"  >
                Tentang Saya
            </font>
        </legend>
    <ol>
        <br>
        <li>Nama Lengkap : <?= $nama ?></li> <br>
        <li>Tempat, Tanggal Lahir : <?= $ttl?></li> <br>
        <li>Alamat : <?= $alamat ?></li> <br>
        <li>Hobi : <?= $hobi?></li> <br>
        <li>Email : <?= $email?></li> <br>
        <li> Riwayat Pendidikan</li> <br>
            <ul>
                <li>SD : <?= $sd ?></li> <br>
                <li>SMP : <?= $smp ?></li> <br>
                <li>SMA : <?= $sma ?></li> <br>
                <li>Perguruan Tinggi : <?= $kampus ?></li> <br>
            </ul>
       
    </ol>
    </fieldset>

</body>
</html>