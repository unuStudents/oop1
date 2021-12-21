<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
    class Buku{
        /* Variabel yang ada didalam kelas buku */
        public $judul;
    
        public function getJudul(){
            echo $this->judul . " <br/>";
        }
        
    }

    /* Buat sebuah object bkAjar dari kelas buku */
    $bkAjar = new Buku();
    $bkAjar->judul="Cepat Pintar Codeigniter";

    /* Mengakses variable/property */
    echo $bkAjar->judul . " <br/>";

    /* Mengakses Method/Function */
    echo $bkAjar->getJudul();
?>

<?= $this->endSection(); ?>