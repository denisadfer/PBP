<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

if (isset($_SESSION["pilih"])) {
  $pilih = $_SESSION["pilih"];
}

$username = $_SESSION["username"];
$subjects = $_SESSION["subjects"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KST</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  Nama : <?= $username; ?><br>
  Daftar Mata Kuliah :<br>

  <?php if (!isset($_POST["next"])) : ?>
  <a href="clear.php">Clear and << back</a>
      <table border=1 cellpadding=10 cellspacing=0>
        <tr>
          <th>Kode</th>
          <th>Mata Kuliah</th>
        </tr>
        <?php for ($i=0;$i<count($pilih);$i++) : ?>
        <?php foreach ($subjects as $subject) : ?>
        <?php if ($pilih[$i] === $subject["kode"]) : ?>
        <tr>
          <td><?= $subject["kode"]; ?></td>
          <td><?= $subject["matkul"]; ?></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endfor; ?>
      </table>
      <br>
      <form action="" method="post">
        <button type="submit" name="next">Next</button>
      </form>
      <?php endif; ?>


      <?php if (isset($_POST["next"])) : ?>
      <table border=1 cellpadding=10 cellspacing=0>
        <tr>
          <th>Kode</th>
          <th>Mata Kuliah</th>
        </tr>
        <?php for ($i=0;$i<count($pilih);$i++) : ?>
        <?php foreach ($subjects as $subject) : ?>
        <?php if ($pilih[$i] === $subject["kode"]) : ?>
        <tr>
          <td><?= $subject["kode"]; ?></td>
          <td><?= $subject["matkul"]; ?></td>
        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endfor; ?>
      </table>
      <br>
      <a href="logout.php">Done</a>
      <?php endif; ?>
</body>

</html>