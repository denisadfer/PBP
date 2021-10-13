<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

$username = $_SESSION["username"];

$subjects = [
  [
    "kode" => "A001",
    "matkul" => "Pemrogaman Web"
  ],
  [
    "kode" => "A002",
    "matkul" => "Pemrogaman Service"
  ],
  [
    "kode" => "A003",
    "matkul" => "Desain Interface"
  ],
  [
    "kode" => "A004",
    "matkul" => "Manajemen Database"
  ]
];

$_SESSION["subjects"] = $subjects;

if (isset($_POST["pilih"])) {
  foreach ($_POST["pilih"] as $p) {
    $_SESSION["pilih"] = $_POST["pilih"];
    header("Location: kst.php");
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RMK</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h2 style="display: inline;">Selamat datang <?= $username ?> | </h2>
  <a href="logout.php">Logout</a>

  <p>Silahkan Pilih Mata Kuliah:</p>
  <form action="" method="post">
    <table border=1 cellpadding=10 cellspacing=0>
      <tr>
        <th>Kode</th>
        <th>Mata Kuliah</th>
        <th>Pilih</th>
      </tr>
      <?php foreach ($subjects as $subject) : ?>
      <tr>
        <td><?= $subject["kode"] ?></td>
        <td><?= $subject["matkul"] ?></td>
        <td>
          <input type="checkbox" name="pilih[]" value=<?= $subject["kode"] ?>>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <button type="submit" name="next">Next</button>
  </form>

</body>

</html>