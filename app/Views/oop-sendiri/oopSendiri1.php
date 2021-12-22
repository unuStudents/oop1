<?= $this->extend('templates/index'); ?>

<?= $this->section('konten'); ?>
<?php

    class Binatang{
        // Variable yang ada di dalam class binatang
        var $jenis;
        var $makan;
        var $gerak;
        var $beranak;

        // sekumpulan method yang ada di dalam class binatang
        function setJenis($parameter){
            $this->jenis = $parameter;
        } 
        function getJenis(){
            echo $this->jenis ."<br/>";
        }

        function setMakan($parameter){
            $this->makan = $parameter;
        } 
        function getMakan(){
            echo $this->makan ."<br/>";
        }
        
        function setGerak($parameter){
            $this->gerak = $parameter;
        } 
        function getGerak(){
            echo $this->gerak ."<br/>";
        }
        
        function setBeranak($parameter){
            $this->beranak = $parameter;
        } 
        function getBeranak(){
            echo $this->beranak ."<br/> <br/>";
        }
    }

    $karnivora = new Binatang;
    $herbivora = new Binatang;

    $karnivora->setJenis("<strong>Hewan Karnivora :</strong>");
    $karnivora->setMakan("Singa makan daging");
    $karnivora->setGerak("Singa bergerak dengan berjalan dan berlari");
    $karnivora->setBeranak("Singa beranak dengan melahirkan");

    $herbivora->setJenis("<strong>Hewan Herbivora :</strong>");
    $herbivora->setMakan("Burung Merpati makan biji-bijian");
    $herbivora->setGerak("Burung Merpati bergerak dengan berjalan dan tebang");
    $herbivora->setBeranak("Burung Merpati beranak dengan bertelur");

echo '<div class="table-responsive">';
echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
echo '<thead>';
echo '<tr>';
echo '<th>';
$karnivora->getJenis();
echo '</th>'; 
echo '<th>';
$herbivora->getJenis();
echo '</th>'; 
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';
echo '<td>';
$karnivora->getMakan();
echo '</td>';
echo '<td>';
$herbivora->getMakan();
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
$karnivora->getGerak();
echo '</td>';
echo '<td>';
$herbivora->getGerak();
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
$karnivora->getBeranak();
echo '</td>';
echo '<td>';
$herbivora->getBeranak();
echo '</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '</div>';


$karnivora->getJenis();
$karnivora->getMakan();
$karnivora->getGerak();
$karnivora->getBeranak();

$herbivora->getJenis();
$herbivora->getMakan();
$herbivora->getGerak();
$herbivora->getBeranak();
?>
<?= $this->endSection(); ?>