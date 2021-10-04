<?php

class m_programKerja {
  private $nomorProgram; 
  private $namaProgram;
  private $suratKeterangan;
  public $hasil = array();
    private $mysqli;

  public function __construct() {
  require "koneksiMVC.php";
  }

  public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan) {

  $rs = $this->mysqli->query("INSERT INTO program_kerja VALUES ('$this->nomorProgram', '$this->namaProgram', '$this->suratKeterangan')");
  }

  public function getSemuaPogramKerja() {
    $rs = $this->mysqli->query("SELECT * FROM program_kerja");
     
    while($row = $rs->fetch_assoc()) {
        $this->hasil[] = $row;
    }
     
    return $this->hasil;

  }

}