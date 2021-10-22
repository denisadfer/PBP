<?php 

class Users {

  //atribut
  public $accounts = [
    [
      "nama" => "Denis Aditya",
      "nim" => "672019245",
      "password" => "123"
    ],
    [
      "nama" => "Joni Sutanto",
      "nim" => "682017043",
      "password" => "456"
    ],
    [
      "nama" => "Dudung Sucipto",
      "nim" => "702015174",
      "password" => "789"
    ]
  ];

  //method
  public function cekLogin($nim, $pass)
  {
    foreach ($this->accounts as $acc) {
      if ($acc["nim"] === $nim) {
        if ($acc["password"] === $pass) {
          header ("Location: http://localhost/PBP/OOP/views/KST-hal.php");
          exit;
        } 
      }
      header ("Location: http://localhost/PBP/OOP/views/login.php");
    }
  }

  public function getNama_nim($nim)
  {
    $nama = "";
    $nimm = "";
    
    foreach ($this->accounts as $acc) {
      if ($acc["nim"] == $nim) {
        $nama= $acc["nama"];
        $nimm = $acc["nim"];
      }
    }
    
    $akun = [
      [
        "nama" => $nama,
        "nim" => $nim
      ]
    ];
    
    return $akun;
  }
}