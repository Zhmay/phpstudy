<?php
  session_start();
  define('ADMIN', 'admin');

  if(!empty($_POST['login'])) {
    if($_POST['login'] === ADMIN) {
      $_SESSION['admin'] = ADMIN;
      header('Location: secret.php');
    } else {
      $_SESSION['responce'] = 'Неверный логин!';
      header('Location: login.php');
    }    
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li><a href="login.php">login</a></li>
    <li><a href="secret.php">secret</a></li>
  </ul>
  <hr>
  <?php
    if(isset($_SESSION['responce'])) {
      echo $_SESSION['responce'];
      unset($_SESSION['responce']);
    }
  ?>
  <form action="" method="post">
    <input type="text" name="login">
    <button>Login</button>
  </form>
</body>
</html>