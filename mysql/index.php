<?php

  function print_arr($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
  }

  // подключение к базе данных, где (localhost - имя сервера, root1 - имя пользователя, root2 - пароль, db_guestbook - название базы данных)
  $db = mysqli_connect('localhost', 'root', 'root', 'db_guestbook');
  // var_dump($db);

  // логи ошибок подключения
  echo mysqli_connect_error();

  // установка кодировки с сервера
  mysqli_set_charset($db, 'utf8') or die();

  // Выполняет запрос query к базе данных (добавление)
  // $insert = "INSERT INTO guestbook (name, text) VALUES ('Оля', 'Yep!')";
  // $res_insert = mysqli_query($db, $insert);

  // лог ошибок в запросе
  // echo mysqli_error($db);

  // Выполняет запрос query к базе данных (изменение)
  // $update = "UPDATE guestbook SET text = CONCAT(text, '***') WHERE id > 2";
  // $res_update = mysqli_query($db, $update) or die(mysqli_error($db));


  // Выполняет запрос query к базе данных (удаление)
  // $delete = "DELETE FROM guestbook WHERE id = 6";
  // $res_delete = mysqli_query($db, $delete);

  // Возвращает число строк, затронутых последним запросом INSERT, UPDATE, REPLACE или DELETE.
  // echo mysqli_affected_rows($db);

  // получение данных из массива
  $res = mysqli_query($db, "SELECT name, text FROM guestbook");
  $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
  print_arr($data);
?>