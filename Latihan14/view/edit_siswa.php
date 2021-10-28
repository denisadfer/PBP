<?php 
include "../model/db.php";

$dtku = new Mydb();
$datasiswa = $dtku->tampilkan_detail($_GET['no']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Siswa</title>
</head>

<body>
  <a href="tampilsiswa.php">
    << Back</a><br><br>
      <form action="../controller/edit.php" method="post">
        <table>
          <input type="hidden" name="no" value=<?= $datasiswa[0]['no']; ?>>
          <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
              <input type="text" name="nis" value=<?= $datasiswa[0]['nis']; ?>><br>
            </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
              <input type="text" name="nama" value=<?= $datasiswa[0]['nama']; ?>><br>
            </td>
          </tr>
          <tr>
            <td colspan=3 align="right">
              <button type="submit">Edit</button>
            </td>
          </tr>
        </table>
      </form>
</body>

</html>