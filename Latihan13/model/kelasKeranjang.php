<?php 

class keranjang {

  //atribut
  public $belanja = [
    [
      "nama" => "Baygon",
      "harga" => 45000
    ],
    [
      "nama" => "Nutri Sari",
      "harga" => 5000
    ]
  ];

  public $total;

  //method
  public function tampilkan_barang()
  {
    return $this->belanja;
  }

  public function tampilkan_detail($nama)
  {
    $nmbr = "";
    $hrg = "";
    foreach ($this->belanja as $blj) {
      if ($blj["nama"] === $nama) {
        $nmbr = $blj["nama"];
        $hrg = $blj["harga"];
      }
    }
    $belanja2 = [
      [
        "nama" => $nmbr,
        "harga" => $hrg
      ]
      ];

    return $belanja2;
  }

  public function total()
  {
    foreach ($this->belanja as $b) {
      $this->total = $this->total + $b["harga"];
    }
    return $this->total;
  }
}

?>