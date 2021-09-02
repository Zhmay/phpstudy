<?php
  $string = file_get_contents('database.txt');
  $array = explode('\n', $string);
  array_pop($array);
  $array = array_reverse($array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action='func.php' method="post">
    <p>
      <input type="text" name="name" placeholder="Enter your name" required>
    </p>
    <p>
      <textarea name="text" placeholder="Message" required></textarea>
    </p>
    <button type="submit">Send</button>
  </form>

  <div>
    <?php 
      function guestBook($array) {
        if(!empty($array)) {
          echo "<ul>";
          foreach($array as $item) {
            $val = explode('|', $item);
            $str = '<li style="margin-bottom: 10px">'; 
            foreach($val as $elem) {
              $str .= '<div>' . htmlspecialchars($elem) . '</div>';
            } 
            $str .='</li>';
            echo $str;
          }
          echo "</ul>";
        }
      }
      if(isset($array)){
        guestBook($array);
      }
    ?>
  </div>
</body>
</html>