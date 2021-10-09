<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoping Ulala</title>

  <style>
  .brg,
  .hrg {
    width: 100px;
  }

  .no {
    width: 20px;
  }

  .noEndBorder tr:last-child th {
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
            "harga" => 80000
        ],
        [
            "barang" => "Mouse",
            "harga" => 100000
        ],
        [
            "barang" => "Monitor",
            "harga" => 600000
        ],
        [
            "barang" => "Printer",
            "harga" => 1000000
        ],
        [
            "barang" => "Speaker",
            "harga" => 300000
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

  <form action="" method="POST">
    <div>
      <table class="noEndBorder" border="1" align="center">
        <th class="no">NO</th>
        <th class="brg">Nama Barang</th>
        <th class="hrg">Harga</th>
        <th class="buy">Beli</th>
        <?php foreach ($data as $d) : ?>
        <tr>
          <td align=center><?= $i ?></td>
          <td><?= $d["barang"] ?></td>
          <td><?= rp($d["harga"]) ?></td>
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
    <?php if (isset($_POST['beli'])) : ?>
    <table border="1" align="center">
      <th colspan=2>Keranjang Belanja</th>
      <?php $beli = $_POST['beli']; ?>
      <?php for ($i = 0; $i < count($beli); $i++) : ?>
      <tr>
        <td><?= $beli[$i] ?></td>
        <td>
          <?php foreach ($data as $d) : ?>
          <?php if ($beli[$i] == $d["barang"]) :
                    echo rp($d["harga"]);
                    $total = $total + $d["harga"]; ?>
          <?php else :
                    continue; ?>
          <?php endif; ?>
          <?php endforeach; ?>
        </td>
      </tr>
      <?php endfor; ?>
      <tr>
        <td class="brg" align="center"><strong>TOTAL</strong></td>
        <td class="hrg"><?= rp($total) ?></td>
      </tr>
    </table>
    <?php endif; ?>
  </div>

</body>

</html>