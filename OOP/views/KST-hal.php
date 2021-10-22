<?php 
include "../controllers/Users.php";
include "../controllers/KST.php";
session_start();
if (isset($_SESSION["akun"])) {
  $akun = $_SESSION["akun"];
}
$kst = new KST();
$matkul = $kst->getAll_KST();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KST</title>
  <style>
  table {
    border-collapse: collapse;
    width: 700px;
  }

  table td,
  table th {
    border: 1px solid #ddd;
    padding: 8px;
  }

  table tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  table tr:hover {
    background-color: #ddd;
  }

  table th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #523fff;
    color: white;
  }
  </style>
</head>

<body>
  <h2>Kartu Studi Tetap</h2>
  <h3><?= $akun[0]["nim"]; ?> | <?= $akun[0]["nama"]; ?></h3>

  <table>
    <tr>
      <th>Kode</th>
      <th>Hari</th>
      <th>Jam</th>
      <th>Mata Kuliah</th>
      <th>Dosen</th>
      <th>Detail</th>
    </tr>
    <?php foreach ($matkul as $m) : ?>
    <tr>
      <td><?= $m["kode"]; ?></td>
      <td><?= $m["hari"]; ?></td>
      <td><?= $m["jam"]; ?></td>
      <td><?= $m["matkul"]; ?></td>
      <td><?= $m["dosen"]; ?></td>
      <td><a href="detail.php?kode=<?= $m["kode"]; ?>">Detail</a></td>
    </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>