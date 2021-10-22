<?php 

include '../model/kelasKeranjang.php';


//membangun objek
$Kj = new keranjang();
$belanjaaa = $Kj->tampilkan_detail("Nutri Sari");

//unboxing belanja
foreach ($belanjaaa as $b2) {
  echo $b2["nama"]." - ".$b2["harga"]."<br>";
}

?>