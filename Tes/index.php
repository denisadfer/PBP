<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    Nama : <input type="text" name="nama" autocomplete="off">
    <button name="submit">Submit</button>
  </form>

  <h1>Selamat Datang
    <?php 
    if (isset($_POST["submit"])){
      $nama = $_POST["nama"];
      echo $nama;
    } else {
      echo ":)";
    }
    ?>

  </h1>

  <?php if (isset($_POST['nama'])) : ?>
  <table border=1 cellpadding=10 cellspacing=0>
    <tr>
      <th colspan=2>Hasil Manipulasi String</th>
    </tr>
    <tr>
      <td>Kalimat</td>
      <td><?= $_POST['nama']; ?></td>
    </tr>
  </table>
  <?php endif; ?>
</body>

</html>