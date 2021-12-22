<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
   class  Manusia{
      /* Variabel yang ada didalam kelas Manusia. */
      var $nama;
         
      function getNama(){
         echo $this->nama;
      }

      function makan(){
          echo" makan nasi ";
      }
        
      /* Fungsi Spesial Construct di dalam kelas buku */
      function __construct( $parameter){
         $this->nama = $parameter;
      }
   }
   
   	/* Buat sebuah object petani dari kelas komik */
	$petani = new Manusia("Sry Sony Somad");
   
    /* Memanggil Method pada kelas komik */
	$petani->getNama();
	$petani->makan();
?>

<?= $this->endSection(); ?>