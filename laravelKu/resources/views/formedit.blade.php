<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <title>Tambah Barang</title>
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
      </div>
      <div class="col-8">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/tampilbarang">Data Barang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Barang</li>
          </ol>
        </nav>
        <h5>Edit Barang</h5>
        <!-- Form -->
        <form method="post" action="/proses_edit">
          {{ csrf_field() }}
          @foreach($hasil as $h)
          <input type="hidden" name="id" value="{{ $h->id }}">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
            <input type="text" name="kode" class="form-control" id="exampleInputEmail1" value="{{ $h->kode }}"
              aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="{{ $h->nama }}"
              aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
            <input type="number" name="harga" class="form-control" id="exampleInputEmail1" value="{{ $h->harga }}"
              aria-describedby="emailHelp">
          </div>
          @endforeach
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        <!-- End of Form -->
      </div>
      <div class="col">
      </div>
    </div>
  </div>
  <!-- End of Grid -->

</body>

</html>