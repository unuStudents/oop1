<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
   class Buku{
      /* Variabel yang ada didalam kelas buku */
      var $judul;
      var $harga;
      
      function getHarga(){
         echo $this->harga ."<br/>";
      }
       
      function getJudul(){
         echo $this->judul ." <br/>";
      }
	  
      /* Fungsi Spesial Construct didalam kelas buku */
      function __construct( $parameter1, $parameter2 ){
         $this->judul = $parameter1;
         $this->harga = $parameter2;
      }
   }
   
   Class Komik extends Buku{
      var $penerbit;
      
      /*Nilai Harga dikurangi 5000 */
      function getHarga(){
         echo $this->harga-5000 ."<br/>";
      }
      
      function setPenerbit($parameter){
         $this->penerbit = $parameter;
      }
      
      function getPenerbit(){
         echo $this->penerbit. "<br />";
      }      
      /* Fungsi Spesial Construct didalam kelas Komik */
      function __construct( $parameter1, $parameter2, $parameter3 ){
         $this->judul = $parameter1;
         $this->harga = $parameter2;
         $this->penerbit = $parameter3;
      }
   }
	/* Buat sebuah object komikjenaka dari kelas komik */
	$komikjenaka = new Komik("Komik Si Juki Berani Gagal", 55000, "Bukune");
   
   /* Memanggil Method pada kelas komik */
	$komikjenaka->getJudul();
	$komikjenaka->getHarga();
	$komikjenaka->getPenerbit();
?>

<?= $this->endSection(); ?>