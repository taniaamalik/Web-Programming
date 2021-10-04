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

  public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
    $rs = $this->mysqli->query("INSERT INTO program_kerja VALUES ('$this->nomorProgram', '$this->namaProgram', '$this->suratKeterangan')");
  }

  public function getSemuaPogramKerja() {
    $rs = $this->mysqli->query("SELECT * FROM program_kerja");
     
    while($row = $rs->fetch_assoc()) {
        $this->hasil[] = $row;
    }   
    return $this->hasil;
  }

  public function getProgramKerja($nomorProgram) {
    $rs = $this->mysqli->query( "SELECT * FROM program_kerja WHERE nomor = $nomorProgram");
    $this->hasil = $rs->fetch_array();
    return $this->hasil;
  }

  public function deleteProgramKerja($nomorProgram) {
    $rs = $this->mysqli->query( "DELETE from program_kerja WHERE nomor = $nomorProgram");
  }

  public function editProgramKerja($nomorProgram, $namaProgram, $suratKeterangan) {
    $rs = $this->mysqli->query( "UPDATE program_kerja SET nama_program = '$namaProgram', surat_keterangan = '$suratKeterangan' WHERE nomor = $nomorProgram");
  }
}