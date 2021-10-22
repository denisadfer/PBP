<?php 

include '../model/kelasKeranjang.php';


//membangun objek
$Kj = new keranjang();
$belanjaa = $Kj->tampilkan_barang();
$total = $Kj->total();

//unboxing belanja
foreach ($belanjaa as $b) {
  echo $b["nama"]." - ".$b["harga"]."<br>";
}

echo "Total Bayar ".$total;
?>