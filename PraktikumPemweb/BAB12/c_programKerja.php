<?php
 include_once("m_programKerja.php");
 class c_programKerja {
    public $model;

    public function __construct() {
         $this->model = new m_programKerja();
     }
     public function invoke() {
        $proker = $this->model->getSemuaPogramKerja();
        include 'v_programKerja.php';
    }
     function insert() {
         $this->model->setProgramKerja($_POST['nomor'], $_POST['nama_program'], $_POST['surat_keterangan']);
         header('Location: index.php');
     }
     function viewInsert() {
         include "v_insertProgramKerja.php";
     }
     function update() {
         $this->model->editProgramKerja($_POST['nomor'], $_POST['nama_program'], $_POST['surat_keterangan']);
         header('Location: index.php');
     }
     function viewUpdate($nomorProgram) {
         $proker = $this->model->getProgramKerja($nomorProgram);
         include "v_editProgramKerja.php";
     }
     function delete($nomorProgram) {
         $this->model->deleteProgramKerja($nomorProgram);
         header('Location: index.php');
     }
 }