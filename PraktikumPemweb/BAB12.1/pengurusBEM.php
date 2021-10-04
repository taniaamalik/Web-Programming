<?php

class pengurusBEM {

   public $nama;
   public $nim;
   public $angkatan;
   private $jabatan;
   private $foto;

   public function setNama($nama) { 
      $this->nama = $nama;
   }

   public function getNama() {
      echo "Nama : $this->nama<br>";
   }

   public function setJabatan($jabatan) {    
      $this->jabatan = $jabatan;
   }
  
   public function getJabatan() {
      echo "Jabatan : $this->jabatan<br>";
   }

   public function setNIM($nim) { 
      $this->nim = $nim;
   }

   public function getNIM() {
      echo "NIM : $this->nim<br>";
   }

   public function setAngkatan($angkatan) {    
      $this->angkatan = $angkatan;
   }
  
   public function getAngkatan() {
      echo "Angkatan : $this->angkatan<br>";
   }

   public function setFoto($foto) { 
      $this->foto = $foto;
   }

   public function getFoto() {
      echo " Foto : <br><img src=$this->foto>";
   }
   public function pilih(){
      $jabat = $this->getJabatan();
      $nama = $this->getNama();
      $nim = $this->getNim();
      if($jabat == "Kepala Departement"){
         echo "<meta http-equiv=\"refresh\" content=\"0;indexx.php?name=$nama&nim=$nim&jabatan=$jabat\">";
       } else if($jabat="Menteri"){
         echo "<meta http-equiv=\"refresh\" content=\"0;menteri.php?name=$nama&nim=$nim&jabatan=$jabat\">";
       } else{
       header('location: formLogin.php?e=2');
       }
   }     
}