<?php 
include "../class/Driver.php";

$driver = new Driver();
$datas = $driver->getAllDriver();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nGO-Jek</title>
  <style>
  a:link {
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }

  a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: none;
  }

  a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
  }

  a {
    font-size: 20px;
    position: inherit;
    float: left;
    margin-top: 8px;
    margin-left: 3px;
  }
  </style>
</head>

<body>
  <h3>nGO-Jek</h3>
  <form action="" method="post">
    <table border=1 cellpadding=10 cellspacing=0>
      <?php foreach ($datas as $data) : ?>
      <tr>
        <td><?= $data['nama']; ?></td>
        <td>
          <a name="rate" href="../controller/rate.php?id=<?= $data["id"]; ?>&vote=<?= $data["vote"]; ?>&star=1"
            style="text-decoration:none">*</a>
          <a name="rate" href="../controller/rate.php?id=<?= $data["id"]; ?>&vote=<?= $data["vote"]; ?>&star=2"
            style="text-decoration:none">*</a>
          <a name="rate" href="../controller/rate.php?id=<?= $data["id"]; ?>&vote=<?= $data["vote"]; ?>&star=3"
            style="text-decoration:none">*</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <h3>Rekapitulasi Bintang</h3>
    <table border=1 cellpadding=10 cellspacing=0>
      <tr>
        <th>Driver</th>
        <th>Jumlah Bintang</th>
      </tr>
      <?php $total = 0; ?>
      <?php foreach ($datas as $data) : ?>
      <tr>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['vote']; ?></td>
        <?php 
      $total += $data['vote'];
      ?>
      </tr>
      <?php endforeach; ?>
    </table>
  </form>
  <h3>Total Bintang: <?= $total; ?></h3>

</body>

</html>