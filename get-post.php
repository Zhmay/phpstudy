<?php

  if(!empty($_POST)) {
    echo 'POST';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }

  if(!empty($_GET)) {
    echo 'GET'; 
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
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
  <form method="post">
    <div>
      <input type="text" name="name">  
    </div>
    <div>
      <textarea name="message"></textarea>
    </div>
    <label>
      <input type="checkbox" name="remember">
      <span>Запонить меня</span>
    </label>
    <div>
      <select name="lang">
        <option value="eng">English</option>
        <option value="ru">Russian</option>
        <option value="ua">Ukrain</option>
      </select>
    </div>
    <div>
      <button type="submit">Send</button>
    </div>
  </form>
  <hr>
  <p>Имя: <?php if(isset($_POST['name'])) echo $_POST['name']; else echo 'пусто'?></p>
  <p>Сообщение: <?php echo isset($_POST['message']) ? $_POST['message'] : 'пусто' ?></p>
  <p><?php if(isset($_POST['remember'])) echo 'Делаем какую-то магию!!!' ?></p>
</body>
</html>