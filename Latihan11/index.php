<?php 
// echo "<form action='login.php' method='post'>";
// echo "Username : <input type='text' name='username'><br>";
// echo "Password : <input type='password' name='pass'><br>";
// echo "<button>Login</button>";
// echo "</form>";
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
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="pass"><br>
    <button type="submit" name="login">Login</button>
  </form>
</body>

</html>