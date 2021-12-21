<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php

class  Manusia{
      /* Variabel yang ada didalam kelas Manusia. */
      var $nama;
         
      function getNama(){
         echo $this->nama. "<br />";
      }

      function makan(){
          echo" makan nasi ";
      }
        
      /* Fungsi Spesial Construct di dalam kelas Manusia */
      function __construct( $parameter){
         $this->nama = $parameter;
      }
   }

   Class ManusiaMilenial extends Manusia{
      var $email;
      
      function getEmail(){
         echo $this->email. "<br />";
      }
      
      /* Fungsi Spesial Construct didalam kelas ManusiaMilenial */
      function __construct($parameter1,$parameter2){
         $this->nama = $parameter1;
         $this->email = $parameter2;
      }
   }
   
   	/* Buat sebuah object dosen dari kelas ManusiaMilenial */
	$dosen = new ManusiaMilenial("Sry Sony Somad","sry.s3@bsi.ac.id");
   
    /* Memanggil Method pada kelas ManusiaMilenial */
	$dosen->getNama();
   $dosen->getEmail();
	$dosen->makan();
?>

<?= $this->endSection(); ?>