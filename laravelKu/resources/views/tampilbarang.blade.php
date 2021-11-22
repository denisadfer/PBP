<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <title>Tampil Barang</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TokoMart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/tampilbarang">Data Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tambahbarang">Tambah Barang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->

  <!-- Grid -->
  <div class="container">
    <div class="row">
      <div class="col">
        Column 1
      </div>
      <div class="col-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
          </ol>
        </nav>
        <h5>Data Barang</h5>
        <!-- Table -->
        <table class="table table-striped">
          <tr class="table-dark">
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
              <a class="btn btn-warning" href="/editbarang/{{ $b->id }}">Edit</a> |
              <a class="btn btn-danger" href="/proses_delete/{{ $b->id }}"
                onclick="return confirm('Yakin ingin dihapus?');">Delete</a>
            </td>
          </tr>
          @endforeach
        </table>
        <!-- End of Table -->
      </div>
      <div class="col">
        Column 3
      </div>
    </div>
  </div>
  <!-- End of Grid -->





</body>

</html>