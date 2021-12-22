<?php
   class  Buku{
    /* Variabel yang ada didalam kelas buku. Dalam PHP tidak wajib mendeklarasikan variabel */
      var $judul;
      var $harga;
      
      function getHarga(){
         echo $this->harga ."<br/>";
      }
       
      function getJudul(){
         echo $this->judul ." <br/>";
      }
	  
	   /* Fungsi Spesial Construct di dalam kelas buku */
	   function __construct( $parameter1, $parameter2 ){
         $this->judul = $parameter1;
         $this->harga = $parameter2;
      }
   }
?>


