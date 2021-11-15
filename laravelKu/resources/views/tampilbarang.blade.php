<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Barang</title>
</head>

<body>
  <table border=1 cellpadding=10 cellspacing=0>
    <tr>
      <th>Kode</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Action</th>
    </tr>
    @foreach($barang as $b)
    <tr>
      <td>{{ $b->kode }}</td>
      <td>{{ $b->nama }}</td>
      <td>{{ $b->harga }}</td>
      <td>
        <a href="/editbarang/{{ $b->id }}">Edit</a> |
        <a href="/proses_delete/{{ $b->id }}" onclick="return confirm('Yakin ingin dihapus?');">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>

</html>