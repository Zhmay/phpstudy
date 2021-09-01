<?php
  session_start();

  if(isset($_GET['do']) && $_GET['do'] == 'exit') {
    unset($_SESSION['admin']);
    header('Location: login.php');
    die();
  }

  if(!isset($_SESSION['admin'])) {
    echo 'Вы не авторизованны! ' . '<a href="secret.php?do=exit">Back</a>';
    die();
  }
  
  echo "Добро пожаловать, {$_SESSION['admin']}! ";
?>
<a href="secret.php?do=exit">Logout</a>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Here is secret page, only for authorized users!</h1>
</body>
</html>