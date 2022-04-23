<?php
  // variable user
  $nama = 'Aditya';
  $umur = 19;
  $berat = 55;

  $nama = 'Naufal';

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: orange'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
  echo "<br />";

  // variable sistem
  // variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'Makanan Favorite Saya Nasi Goreng');
  // define('makanan', 'jambu');
  echo '<h1 style="color: red">'.makanan.'</h1>';
  echo makanan;
?>