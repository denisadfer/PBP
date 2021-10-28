<?php 
include "../model/db.php";

$dtku = new Mydb();
$masuk = $dtku->hapus_data($_GET['no']);

if ($masuk) {
  echo "
    <script>
    alert('Data berhasil di hapus!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
    ";
} else {
  echo "
    <script>
    alert('Data gagal di hapus!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
  ";
}
?>