<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
    class Buku{
        /* Variabel private di dalam kelas buku */
        private $judul;        
        
        public function setJudul($namajudul){
            $this->judul = $namajudul;
        }
    
        public function getJudul(){
            echo $this->judul . " <br/>";
        }        
    }

    /* Buat sebuah object bkAjar dari kelas buku */
    $bkAjar = new Buku();

    /* Mengakses Method/Function setJudul*/
    $bkAjar->setJudul("Buku Master OOP");

    /* Mengakses Method/Function getJudul*/
    $bkAjar->getJudul();

    /*Mencoba akses langsung variable judul (private) dari luar Class*/
    //echo $bkAjar->judul;
    /*hasilnya error karena dengan pesan Cannot access private property Buku*/
?>

<?= $this->endSection(); ?>