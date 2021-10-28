<?php 
include "../model/db.php";

$dtku = new Mydb();
$masuk = $dtku->insert_data($_POST['nis'], $_POST['nama']);

if ($masuk) {
  echo "
    <script>
    alert('Data berhasil ditambahkan!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
    ";
    // <a href = '../view/tambah_siswa.php'>Input Lagi</a>
} else {
  echo "
    <script>
    alert('Data gagal ditambahkan!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
  ";
}
?>