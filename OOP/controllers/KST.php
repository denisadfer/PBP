<?php 

class KST {
  //atribut
  public $subjects = [
    [
      "kode" => "001",
      "hari" => "Senin",
      "jam" => "09.00 - 11.00",
      "matkul" => "Kewarganegaraan",
      "dosen" => "Wartoyo"
    ],
    [
      "kode" => "002",
      "hari" => "Selasa",
      "jam" => "07.00 - 10.00",
      "matkul" => "Pemodelan",
      "dosen" => "Yulianto"
    ],
    [
      "kode" => "003",
      "hari" => "Rabu",
      "jam" => "16.00 - 18.00",
      "matkul" => "Matematika",
      "dosen" => "Suprihadi"
    ],
    [
      "kode" => "004",
      "hari" => "Kamis",
      "jam" => "09.00 - 11.00",
      "matkul" => "Basis Data",
      "dosen" => "Adi Nugroho"
    ]
  ];

  public function getAll_KST()
  {
    return $this->subjects;
  }

  public function getDetail($kode)
  {
    $matkul = "";
    $hari = "";
    $jam = "";
    $dosen = "";
    

    foreach ($this->subjects as $subject) {
      if ($subject["kode"] === $kode) {
        $matkul = $subject["matkul"];
        $hari = $subject["hari"];
        $jam = $subject["jam"];
        $dosen = $subject["dosen"];
      }
    }

    $subjects2 = [
      [
        "hari" => $hari,
        "jam" => $jam,
        "matkul" => $matkul,
        "dosen" => $dosen
      ]
    ];
    return $subjects2;
  }
}