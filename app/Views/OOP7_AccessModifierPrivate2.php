<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
    class Buku{
        /* Variabel yang ada didalam kelas buku */
        private $judul;
        public $test;
        
        public function setJudul($namajudul)
        {
            $this->judul = $namajudul;
            $this->test = $this->judul;
        }
    
        public function getJudul()
        {
            echo $this->test . " <br/>";
        }        
    }

    /* Buat sebuah object bkAnak dari kelas buku */
    $bkAnak = new Buku();

    /* Mengakses Method/Function setJudul*/
    $bkAnak->setJudul("Kisah Nabi dan Rasul");

    /* Mengakses Method/Function getJudul*/
    $bkAnak->getJudul();
?>

<?= $this->endSection(); ?>