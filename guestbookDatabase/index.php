<?php
  require_once 'connect.php';
  require_once 'func.php';

  if(!empty($_POST)) {
    save_mess();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
  }

  $messages = get_mess();
  // print_arr($messages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action='index.php' method="post">
    <p>
      <input type="text" name="name" placeholder="Enter your name" required>
    </p>
    <p>
      <textarea name="text" placeholder="Message" required></textarea>
    </p>
    <button type="submit">Send</button>
  </form>

  <div>
    <?php if(!empty($messages)): ?>
      <?php foreach ($messages as $message): ?> 
        <div class="message">
          <p>Автор: <?=$message['name']?> | Дата: <?=$message['date']?></p>
          <div><?=nl2br(htmlspecialchars($message['text']))?></div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</body>
</html>