<?php 
$username = $_POST["username"];
$pass = $_POST["pass"];

//database
$dbu = "fti uksw";
$dbp = "1234";
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

if ($username == $dbu && $pass == $dbp) {
  //echo "Sukses";
  session_start();
  $_SESSION["sun"] = $username;
  $_SESSION["spw"] = $pass;
  $_SESSION["books"] = $books;

  header("Location: rmk.php");
} else {
  //echo "Gagal";
  header("Location: index.php");
}
?>