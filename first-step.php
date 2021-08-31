<?php 
$message = 'text';

$str = <<<HERE
description $message
HERE;

// constants
const NEWCONST = 'New CONST style';
define('OLDCONST', 'Old CONST style');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test php</title>
</head>
<body>
  
  <p><?php echo $message; ?></p>
  <p><?php echo OLDCONST ?></p>
  <p><?php echo NEWCONST ?></p>
  <p><?php echo $str ?></p>
  
  <h2 style="text-align: center">цикл - While</h2>
  <table border="1">
    <tbody>
      <?php
        $i = 1;
        while($i <= 10) {
          $td = 1;
          echo "\t<tr>\n";
            while($td <= 4) {
              echo "\t\t<td>Row $i | Col - $td</td>\n";
              $td++;
            }
          echo "\t</tr>\n";
          $i++;
        } 
      ?>
    </tbody>
  </table>
  <hr>
  <?php
    $y = 1900;
    echo '<select>';
        while($y <= 2021) {
          echo "<option value=\"$y\">$y</option>";
          $y++;
        }
    echo '</select>';
  ?>
  <h2 style="text-align: center">Таблица Умножения</h2>
  <table border="1">
    <tbody>
      <?php
        $i = 1;
        while($i <= 10) {
          $li = 1;
          echo "\t<tr>\n";
            while($li <= 10) {
              $sum = $i * $li;
              echo "\t\t<td>$li * $i = $sum</td>\n";
              $li++;
            }
          echo "\t</tr>\n";
          $i++;
        } 
      ?>
      </tbody>
  </table>
  <h2 style="text-align: center">Array with Goods</h2>
  <?php

    $goods = [
      [
        'title' => 'Nokia',
        'price' => 200,
        'description' => 'description Nokia'
      ],
      [
        'title' => 'iPhone',
        'price' => 1000,
        'description' => 'description iPhone'
      ]
    ];

    $i = 0;
    while($i < count($goods)) {
      $block = "<div style='margin-bottom: 15px;'>
                  <div>".$goods[$i]['title']."</div>
                  <div>".$goods[$i]['price']."</div>
                  <div>".$goods[$i]['description']."</div>
                </div>";
      echo $block;
      $i++;
    }
  ?>
  <h2 style="text-align: center">цикл - For</h2>
  <?php
    $arr = ['Dima', 'Kolya', 'Andrew', 'Kirill'];
    for($i = 0; $i < count($arr); $i++) {
      echo $arr[$i] . '<br>';
    }
  ?>

  <select>
    <?php
      for($i = 1930; $i <= 2021; $i++) {
        echo "<option value=\"$i\">$i year</option>";
      }
    ?>
  </select>
  <table border="1">
    <tbody>
      <?php
        for($i = 1; $i <= 9; $i++) {
          echo "\t<tr>\n";
          for($td = 1; $td <= 9; $td++) {
            $sum = $i * $td;
            echo "\t\t<td>$td * $i = $sum</td>\n";
          }
          echo "\t</tr>\n";
        }
      ?>
      </tbody>
  </table>
  <h2 style="text-align: center">цикл - Foreach</h2>
  <?php
    $arr = [
      'green',
       'yellow',
       'red',
      'blue',
      'yellow',
       'brown',
       'orange',
    ];
    echo "<ul>";
    foreach($arr as $key => $item){
      echo "<li>$key - color $item</li>";
      if ($key == 'tomato') break; 
    }
    echo "</ul>";
  ?>
  <h2 style="text-align: center">Functions</h2>
  <?php

    function arr_count($arr) {      
      if(!empty($arr) && is_array($arr)) {
        $sum = 0;
        foreach($arr as $key => $item) {
          echo $key . '=>' . $item;
          echo '<br>';
          $sum++;
        }       
        return $sum; 
      } else if(empty($arr)) {
        return 'array is empty:(';
      } else if(!is_array($arr)) {
        return 'functions work with array only!';
      }
    }

    echo arr_count($arr)
  ?>

  <h2 style="text-align: center">Работа со строками</h2>
  <!-- Разбивает строку с помощью разделителя на элементы массива  -->
  <?php
    $str = 'Жмай Богдан Вячеславович';
    $data = explode(' ', $str);
    print_r($data);
    echo'<br>';
  ?>

  <!-- Объединяет элементы массива в строку добавляя разделитель  -->
  <?php
    $data = ['Жмай', 'Богдан', 'Вячеславович'];
    $str = implode('/', $data);
    echo $str .'<br><br>';
  ?>

  <!-- Эта функция возвращает строку или массив, в котором все вхождения search в subject заменены на replace. -->
  <?php
    $str = 'Эта функция <i>возвращает строку</i> или массив, в котором все вхождения <h2>search</h2> в <h2>subject</h2> заменены на replace.';
    $search = ['<i>', '</i>', '<h2>', '</h2>'];
    $replace = ['<b>', '</b>', '<b>', '</b>'];
    $str = str_replace($search, $replace, $str);
    echo $str .'<br>';
  ?>

  <!-- Количество символов в строке -->

  <?php
    $str = 'leng';
    $str = 'лень';
    echo mb_strlen($str) .'<br>';
  ?>

  <!-- Преобразует специальные символы в HTML-сущности -->

  <?php
    $str = 'Метод защиты от ХSS атак через input <script>alert(\'XSS\')</script>';
    echo htmlspecialchars($str);
  ?>

  <h2 style="text-align: center">Функции даты и времени</h2>

  <?php
    echo date_default_timezone_get();
    echo '<br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo '<br>';
    date_default_timezone_set('America/Chicago');
    echo date_default_timezone_get();
    echo '<br>';
    echo date('Y-m-d H:i:s');
    echo '<br>';
    echo '&copy; 2019 - ' . date('Y');
    echo '<br>';
    
    // echo phpinfo();
  ?>

  <!-- Проверка на время исполения скрипта -->
  <?php
    $start = microtime(true);
    // some script to check
    usleep(100000);
    $end = microtime(true); 
    echo $end - $start;
  ?>
</body>
</html>