<?php 
//unboxing
session_start();

if(!isset($_SESSION["sun"])) {
  header("Location: index.php");
  exit;
}

$nama = $_SESSION["sun"];
$pasw = $_SESSION["spw"];
$books = $_SESSION["books"];

var_dump($books);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RMK</title>
</head>

<body>
  <a href="logout.php" style="float: right;">Logout</a>
  <h1>Selamat datang, <?= $nama; ?> di halaman RMK</h1><br>
  <a href="transkrip.php">Transkrip >></a>

  <?php foreach ($books as $book) : ?>
  <ul>
    <li><?= $book["judul"]; ?></li>
    <li><?= $book["penulis"]; ?></li>
    <li><?= $book["harga"]; ?></li>
  </ul>
  <?php endforeach; ?>

</body>

</html>