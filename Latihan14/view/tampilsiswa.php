<?php 
include "../model/db.php";

$dtku = new Mydb();
$datasiswa = $dtku->tampilkan_tabel();
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa</title>
</head>

<body>
  <br>
  <a href="tambah_siswa.php">Tambah Data</a><br><br>
  <table border=1 cellpadding=10 cellspacing=0>
    <tr>
      <th>No</th>
      <th>NIS</th>
      <th>Nama Siswa</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($datasiswa as $d) : ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $d['nis']; ?></td>
      <td><?= $d['nama']; ?></td>
      <td>
        <a href="edit_siswa.php?no=<?= $d['no']; ?>">Edit</a> |
        <a href="../controller/hapus.php?no=<?= $d['no']; ?>"
          onclick="return confirm('Yakin ingin dihapus?');">Delete</a>
      </td>
    </tr>
    <?php $no++; endforeach; ?>
  </table>
</body>

</html>