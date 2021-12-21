<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php

    class Buku{
        /* Variabel yang ada didalam kelas buku */
        public $judul;
        protected $editor;
        
        public function getJudul(){
            echo $this->judul . " <br/>";
        }
        
        public function getEditor(){
            echo $this->editor . " <br/>";
        }
        
    }

    class Komik extends Buku{
        public $harga;
        
        function __construct($parameter1, $parameter2, $parameter3 ){
            $this->judul = $parameter1;
            $this->harga = $parameter2;
            $this->editor = $parameter3;
        }
    }

    /* Buat sebuah object kmAnak dari kelas Buku */
    $kmAnak = new Komik("Nussa Belajar Ikhlas",80000,"Nussa Edutainment");

    /* Mengakses Method/Function */
    echo $kmAnak->getEditor();

    /* Mengakses variable editor secara langsung dari luar Class Child */
    //echo $kmAnak->editor . " <br/>";
    /* Tentu saja hasilnya error karena akses modifier protected */
?>

<?= $this->endSection(); ?>