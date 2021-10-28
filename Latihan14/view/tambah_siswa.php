<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Siswa</title>
</head>

<body>
  <a href="tampilsiswa.php">
    << Back</a><br><br>
      <form action="../controller/insert.php" method="post">
        <table>
          <tr>
            <td>NIS</td>
            <td>:</td>
            <td>
              <input type="text" name="nis"><br>
            </td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
              <input type="text" name="nama"><br>
            </td>
          </tr>
          <tr>
            <td colspan=3 align="right">
              <button type="submit">Tambah</button>
            </td>
          </tr>
        </table>
      </form>
</body>

</html>