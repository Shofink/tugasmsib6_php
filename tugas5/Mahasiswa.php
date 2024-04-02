<?php

class Mahasiswa{

//variabel
public $nim;
public $nama;
public $kampus;
public $matkul;
public $nilai;
public $grade;
// public $status;
// public $predikat;


public function __construct($nim, $nama, $kampus, $matkul, $nilai, $grade){// $status, $predikat){
    $this->nim = $nim;
    $this->nama = $nama;
    $this->kampus = $kampus;
    $this->matkul = $matkul;
    $this->nilai = $nilai;
    $this->grade = $grade;
    // $this->status = $status;
    // $this->predikat = $predikat;
}

public function getGrade() {
    if ($this->nilai >= 85) return $this->grade = 'A';
    else if ($this->nilai >= 70) return $this->grade='B';
    else if ($this->nilai >= 60) return $this->grade ='C';
    elseif ($this->nilai >= 65) return $this->grade ='D';
    else return $this->grade = ''; }
    


public function getPredikat(){
    if ($this->grade = 'A') return  'Sangat Memuaskan';
    else if ($this->grade='B') return  'Memuaskan';
    else if ($this->grade='C') return 'Cukup';
    elseif ($this->grade='D') return 'Kurang';
    else return '';}



public function getStatus(){
    if ($this->grade = 'D') return "Lulus";
        else return "Tidak Lulus";
    }    
    
}
 
?>