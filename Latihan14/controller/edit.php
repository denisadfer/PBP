<?php 
include "../model/db.php";

$dtku = new Mydb();
$masuk = $dtku->edit_data($_POST['no'], $_POST['nis'], $_POST['nama']);

if ($masuk) {
  echo "
    <script>
    alert('Data berhasil di update!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
    ";
} else {
  echo "
    <script>
    alert('Data gagal di update!')
    document.location.href = '../view/tampilsiswa.php';
    </script>
  ";
}
?>