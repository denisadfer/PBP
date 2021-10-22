<?php 

include '../kelas/kelasKalkulator.php';

//membuat objek
$K = new kalkulator();
$K->nilai1 = $_POST["nilai1"];
$K->nilai2 = $_POST["nilai2"];

echo "Hasil Tambah ".$K->tambah();
echo "<br>";
echo "Keterangan ".$K->cek_bilangan();

?>