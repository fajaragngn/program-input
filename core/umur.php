<?php

$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
$sekarang = new DateTime("today");
if ($tanggal_lahir > $sekarang) { 
  $tgl = "0";
  $bln = "0";
  $thn = "0";
}
$tgl = $sekarang->diff($tanggal_lahir)->d;
$bln = $sekarang->diff($tanggal_lahir)->m;
$thn = $sekarang->diff($tanggal_lahir)->y;
echo $thn;
?>