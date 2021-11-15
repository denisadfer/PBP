<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
</head>

<body>
  <form method="post" action="/proses_insert">
    {{ csrf_field() }}
    <table cellpadding=3>
      <tr>
        <td>Kode Barang</td>
        <td>:</td>
        <td><input type="text" name="kode"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Harga Barang</td>
        <td>:</td>
        <td><input type="number" name="harga"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td align=right><button>Tambah</button></td>
      </tr>
    </table>
  </form>
</body>

</html>