<?php 
session_start();

$un = "Denis";
$pw = "123";

if(isset($_POST["login"])) {
  $username = $_POST["username"];
  $pass = $_POST["pass"];
  
  if ($username == $un && $pass == $pw) {
    $_SESSION["username"] = $username;
    header("Location: rmk.php");
  } else {
    header("Location: login.php");
  }
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
  <form action="login.php" method="post">
    <table cellpadding=5 cellspacing=0>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="pass"></td>
      </tr>
      <tr>
        <td colspan=3><button type="submit" name="login">Login</button></td>
      </tr>
    </table>
  </form>
</body>

</html>