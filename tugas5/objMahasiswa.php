<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1 align="center">Form Nilai Ujian</h1>
<form action="#" method="POST" style="width:70%; margin: 50px auto;">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM :</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Mahasiswa : </label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kampus" class="col-4 col-form-label">Perguruan Tinggi :</label> 
    <div class="col-8">
      <select id="kampus" name="kampus" class="custom-select">
        <option value="ANDA BELUM MEMILIH KAMPUS">--- PILIH KAMPUS ---</option>
        <option value="STT Terpadu Nurul Fikri">STT Terpadu Nurul Fikri</option>
        <option value="Universitas Indonesia">Universitas Indonesia</option>
        <option value="Universitas Negeri Jakarta">Universitas Negeri Jakarta</option>
        <option value="Sekolah Tinggi Batam">Sekolah Tinggi Batam</option>
        <option value="Universitas Gunadarma">Universitas Gunadarma</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah :</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ANDA BELUM MEMILIH MATKUL">--- PILIH MATKUL ---</option>
        <option value="PHP">PHP</option>
        <option value="Java Script">Java Script</option>
        <option value="UI/UX">UI/UX</option>
        <option value="Laravel">Laravel</option>
        <option value="MySQL">MySQL</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai :</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<?php
require_once 'Mahasiswa.php';
//tangkap data dari form
error_reporting(0);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kampus = $_POST['kampus'];
$matkul= $_POST['matkul'];
$nilai=$_POST['nilai'];
$proses = $_POST['proses'];

//buat objek
$ns = new Mahasiswa($nim, $nama, $kampus, $matkul, $nilai, $proses);


if(isset($proses)){ //sebagai eror handling
?>
<h2 align="center">Daftar Nilai Mahasiswa</h2>
<table border="1" width="80%" align="center">
    <thead>
        <tr align="center">
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Perguruan Tinggi</th>
            <th>Mata kuliah</th>
            <th>Nilai</th>
            <th>Predikat</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
                echo '<tr>';
                echo '<td>'. $ns->nim. '</td>';
                echo '<td>'. $ns->nama. '</td>';
                echo '<td>'. $ns->kampus. '</td>';
                echo '<td>'. $ns->matkul. '</td>';
                echo '<td>'. $ns->nilai.'</td>';
                echo '<td>'. $ns->getGrade(). '</td>';
                echo '<td>'. $ns->getPredikat(). '</td>';
                echo '<td>'. $ns->getStatus(). '</td>';
                echo '</tr>';
        }?> </tbody>
       <table>
       <div style="text-align:center; background-color:white; color:blue;">
Copyright @shofiyyah N.K - 2024
    </div>
        

        