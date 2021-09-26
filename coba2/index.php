<?php

$barang = array("Keyboard", "Mouse", "Monitor", "Printer", "Speaker");
$harga = array(80000, 100000, 600000, 1000000, 300000);
function rp($harga)
{
    $harga = number_format($harga);
    $harga = str_replace(',', '.', $harga);
    $harga = "Rp. " . "$harga";
    return $harga;
}
$total = 0;

echo "<form action='' method=post>";
echo "<table border=1 align=center width=300px height=300px>";
echo "<th>NO</th><th>Nama Barang</th><th>Harga</th><th >Beli</th>";
for ($i = 0; $i < count($barang); $i++) {
    $j = $i + 1;
    echo "<tr><td align=center>$j</td><td>$barang[$i]</td><td>" . rp($harga[$i]) . "</td><td align=center><input type=checkbox name=beli[] value=$barang[$i]></td></tr>";
}
echo "<tr><th colspan=4><input type=submit value=Belanja></th></tr>";
echo "</table>";
echo "</form><br>";

echo "<table border=1 align=center width=300px height=100px>";
echo "<th colspan=2>Keranjang Belanja</th>";
if (isset($_POST['beli'])) {
    $beli = $_POST['beli'];
    for ($i = 0; $i < count($beli); $i++) {
        echo "<tr><td>$beli[$i]</td><td>" . rp($harga[$i]) . "</td></tr>";
        $total = $total + $harga[$i];
    }
}
echo "<tr><td><strong>TOTAL</strong></td><td>" . rp($total) . "</td></tr>";
