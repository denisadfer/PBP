<?php 
//unboxing
session_start();
$nama = $_SESSION["sun"];
$pasw = $_SESSION["spw"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transkrip</title>
</head>

<body>
  <h1>Selamat datang, <?= $nama; ?> di halaman Transkrip</h1>
</body>

</html>