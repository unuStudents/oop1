<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php
   class  Buku{
   /* Variabel yang ada didalam kelas buku. Dalam PHP tidak wajib mendeklarasikan variabel */
      var $judul;
      var $harga;
      
	  /* Sekumpulan Method yang ada didalam kelas buku */
      function SetHarga($parameter){
         $this->harga = $parameter;
      }
      
	  /*br adalah tag html untuk membuat garis baru */
      function GetHarga(){
         echo $this->harga ."<br/>";
      }
      
      function SetJudul($parameter){
         $this->judul = $parameter;
      }
      
      function GetJudul(){
         echo $this->judul ." <br/>";
      }

   }
   
	$daspro = new Buku;
	$psbo = new Buku;
   
	$daspro->setJudul("Dasar Pemrograman Python");
	$daspro->setHarga(80000);

	$psbo->setJudul("Pemodelan Sistem Berorientasi Objek");
	$psbo->setHarga(100000);
	
	$daspro->getJudul();
	$daspro->getHarga();
	$psbo->getJudul();
	$psbo->getHarga();
?>

<?= $this->endSection(); ?>