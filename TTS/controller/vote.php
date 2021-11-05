<?php 
include "../class/Driver.php";

$driver = new Driver();
$check = $driver->editData($_GET['id'], $_GET['vote'], $_GET['star']);

if ($check) {
  echo "
    <script>
    alert('Vote Berhasil!')
    document.location.href = '../view/index.php';
    </script>
    ";
} else {
  echo "
    <script>
    alert('Vote Gagal!')
    document.location.href = '../view/index.php';
    </script>
  ";
}
?>