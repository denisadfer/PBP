<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
</head>

<body>
  <form method="post" action="/proses_edit">
    {{ csrf_field() }}
    <table cellpadding=3>
      @foreach($hasil as $h)
      <input type="hidden" name="id" value="{{ $h->id }}">
      <tr>
        <td>Kode Barang</td>
        <td>:</td>
        <td><input type="text" name="kode" value="{{ $h->kode }}"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama" value="{{ $h->nama }}"></td>
      </tr>
      <tr>
        <td>Harga Barang</td>
        <td>:</td>
        <td><input type="number" name="harga" value="{{ $h->harga }}"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td align=right><button>Edit</button></td>
      </tr>
      @endforeach
    </table>
  </form>
</body>

</html>