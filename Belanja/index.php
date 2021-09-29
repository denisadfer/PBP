<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping Ulala</title>

    <style>
        .brg, .hrg{
            width: 100px;
        }
        .no{
            width: 20px;
        }
        .noEndBorder tr:last-child th{
            border: 0;
        }
        .tombol {
            width: 65px;
        }
    </style>
</head>
<body>
    
    <?php 
    $data = [
        [
            "barang" => "Keyboard",
            "Keyboard" => 80000
        ],
        [
            "barang" => "Mouse",
            "Mouse" => 100000
        ],
        [
            "barang" => "Monitor",
            "Monitor" => 60000
        ],
        [
            "barang" => "Printer",
            "Printer" => 1000000
        ],
        [
            "barang" => "Speaker",
            "Speaker" => 300000
        ]
        ];
    $i = 1;
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
            <table class="noEndBorder" border="1" align="center">
                <th class="no">NO</th>
                <th class="brg">Nama Barang</th>
                <th class="hrg">Harga</th>
                <th class="buy">Beli</th>
                <?php foreach ($data as $d) : ?>
                    <tr>
                        <td align=center><?= $i ?></td>
                        <td><?= $d["barang"] ?></td>
                        <td><?= rp($d[$d["barang"]]) ?></td>
                        <td align=center>
                            <input type="checkbox" name="beli[]" value=<?= $d["barang"] ?>>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <tr height="40px">
                    <th></th>
                    <th></th>
                    <th align="right">
                        <input class="tombol" type="submit" value="Belanja">
                    </th>
                    <th>
                        <input class="tombol" type="reset" value="Clear">
                    </th>
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
                        <td>
                            <?php for ($j = 0; $j < count($data); $j++) : ?>
                                <?php if ($beli[$i] == $data[$j]["barang"]) :
                                    //echo rp($data[$j][$data[$j]["barang"]]); 
                                    echo rp($data[$j][$beli[$i]]);
                                    $total = $total + $data[$j][$beli[$i]]; ?> 
                                <?php else :
                                    continue; ?>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </td>
                    </tr>
                    <?php  ?>
                <?php endfor; ?>
            <?php endif; ?>
            <tr>
                <td class="brg" align="center"><strong>TOTAL</strong></td>
                <td class="hrg"><?= rp($total) ?></td>
            </tr>
        </table>
    </div>

</body>
</html>