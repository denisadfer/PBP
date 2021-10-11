<?php 
  $books = [
    [
      "judul" => "Pemrogaman PHP",
      "penulis" => "Joni",
      "harga" => 20000
    ],
    [
      "judul" => "Pemrogaman HTML",
      "penulis" => "Asep",
      "harga" => 30000
    ],
    [
      "judul" => "Pemrogaman Java",
      "penulis" => "Dudung",
      "harga" => 50000
    ]
  ];

  //echo $books[0]["judul"];
  
  foreach ($books as $book) {
    echo $book["judul"]."<br>";
    echo $book["penulis"]."<br>";
    echo $book["harga"]."<br><br>";
  }
?>