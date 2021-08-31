<?php

  if(!empty($_POST)) {
    echo 'POST';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }

  if(!empty($_FILES)) {
    echo 'FILES';
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
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
  <form method="post" enctype="multipart/form-data">
    <p>
      <input type="text" name="name">  
    </p>
    <p>
      <textarea name="message"></textarea>
    </p>
    <p>
      <input type="file" name="file">  
    </p>
    <p>
      <button type="submit">Send</button>
    </p>
  </form>
</body>
</html>