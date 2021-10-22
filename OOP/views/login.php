<?php 
include "../controllers/Users.php";
session_start();

if (isset($_POST["login"])) {
  $nim = $_POST["nim"];
  $pass = $_POST["pass"];
  
  $user = new Users();
  $akun = $user->getNama_nim($nim);
  $_SESSION["akun"] = $akun;
  $user->cekLogin($nim,$pass);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="" method="post">
    <table cellpadding=5 cellspacing=0>
      <tr>
        <td>NIM</td>
        <td>:</td>
        <td>
          <input type="text" name="nim">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td>
          <input type="password" name="pass">
        </td>
      </tr>
      <tr>
        <td colspan=3 align="right">
          <button type="submit" name="login">Login</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>