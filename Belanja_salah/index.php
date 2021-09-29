<?php 

// $barang = array("Keyboard", "Mouse", "Monitor", "Printer", "Speaker");
// $harga = array(80000, 100000, 600000, 1000000, 300000);
// $total = 0;

// function rp($harga)
// {
//     $harga = number_format($harga);
//     $harga = str_replace(',', '.', $harga);
//     $harga = "Rp. " . "$harga";
//     return $harga;
// }

// echo "<form action='' method=post>";
// echo "<table border=1 align=center width=300px height=300px>";
// echo "<th>NO</th><th>Nama Barang</th><th>Harga</th><th >Beli</th>";
// for ($i = 0; $i < count($barang); $i++) {
//     $j = $i + 1;
//     echo "<tr><td align=center>$j</td><td>$barang[$i]</td><td>" . rp($harga[$i]) . "</td><td align=center><input type=checkbox name=beli[] value=$barang[$i]></td></tr>";
// }
// echo "<tr><th colspan=4><input type=submit value=Belanja></th></tr>";
// echo "</table>";
// echo "</form><br>";

// echo "<table border=1 align=center width=300px height=100px>";
// echo "<th colspan=2>Keranjang Belanja</th>";
// if (isset($_POST['beli'])) {
//     $beli = $_POST['beli'];
//     for ($i = 0; $i < count($beli); $i++) {
//         echo "<tr><td>$beli[$i]</td><td>" . rp($harga[$i]) . "</td></tr>";
//         $total = $total + $harga[$i];
//     }
// }
//echo "<tr><td><strong>TOTAL</strong></td><td>" . rp($total) . "</td></tr>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping</title>

    <style>
        .tabel1 {
            width: 300px;
        }
    </style>
</head>
<body>

    <?php 

    $barang = ["Keyboard", "Mouse", "Monitor", "Printer", "Speaker"];
    $harga = [80000, 100000, 600000, 1000000, 300000];
    $total = 0;
    
    function rp($harga)
    {
        $harga = number_format($harga);
        $harga = str_replace(',', '.', $harga);
        $harga = "Rp. " . "$harga";
        return $harga;
    }
    ?>

    <div>
        <form action="" method="POST">
            <table class="tabel1" border="1" align="center">
                <th>NO</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Beli</th>
                <?php for ($i = 0; $i < count($barang); $i++) :
                    $j = $i + 1;?>
                    <tr>
                        <td align=center><?= $j ?></td>
                        <td><?= $barang[$i] ?></td>
                        <td><?= rp($harga[$i]) ?></td>
                        <td align=center>
                            <input type="checkbox" name="beli[]" value=<?= $barang[$i] ?>>
                        </td>
                    </tr>
                <?php endfor; ?>
                <tr>
                    <th colspan="4"><input type="submit" value="Belanja"></th>
                </tr>
            </table>
        </form>
    </div>

    <br><br>
    
    <div>
        <table class="tabel1" border="1" align="center">
            <th colspan=2>Keranjang Belanja</th>
            <?php if (isset($_POST['beli'])) : ?>
                <?php $beli = $_POST['beli']; ?>
                <?php for ($i = 0; $i < count($beli); $i++) : ?>
                    <tr>
                        <td><?= $beli[$i] ?></td>
                        <td><?= rp($harga[$i]) ?> </td>
                    </tr>
                    <?php $total = $total + $harga[$i]; ?>
                <?php endfor; ?>
            <?php endif; ?>
            <tr>
                <td><strong>TOTAL</strong></td>
                <td><?= rp($total) ?></td>
            </tr>
        </table>
    </div>
</body>
</html>