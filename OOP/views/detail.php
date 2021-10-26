<?php 

include "../controllers/KST.php";
session_start();
if (isset($_SESSION["akun"])) {
  $akun = $_SESSION["akun"];
}
$kst = new KST();
$kode = $_GET["kode"];
$detail = $kst->getDetail($kode);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KST Detail</title>
  <style>
  td {
    font-size: 18px;
  }
  </style>
</head>

<body>
  <h2>Kartu Studi Tetap</h2>
  <h3><?= $akun[0]["nim"]; ?> | <?= $akun[0]["nama"]; ?></h3>
  <table cellpadding=5 cellspacing=0>
    <tr>
      <td>- Mata Kuliah</td>
      <td>:</td>
      <td><?= $detail[0]["matkul"]; ?></td>
    </tr>
    <tr>
      <td>- Hari</td>
      <td>:</td>
      <td><?= $detail[0]["hari"]; ?></td>
    </tr>
    <tr>
      <td>- Jam</td>
      <td>:</td>
      <td><?= $detail[0]["jam"]; ?></td>
    </tr>
    <tr>
      <td>- Dosen</td>
      <td>:</td>
      <td><?= $detail[0]["dosen"]; ?></td>
    </tr>
  </table>
  <br>
  <a href="KST-hal.php">
    << Back</a>
</body>

</html>