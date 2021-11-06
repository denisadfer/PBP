<?php 
include "../class/Driver.php";

$driver = new Driver();
$check = $driver->setRate($_GET['id'], $_GET['vote'], $_GET['star']);

if ($check) {
  echo "
    <script>
    alert('Rate Berhasil!')
    document.location.href = '../view/index.php';
    </script>
    ";
} else {
  echo "
    <script>
    alert('Rate Gagal!')
    document.location.href = '../view/index.php';
    </script>
  ";
}
?>