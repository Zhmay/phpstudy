<?php
  // setcookie('testName', 'My value', time()+3600, '/');
  // echo $_COOKIE['testName'];

  
  isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/') : setcookie('counter', 1, time()+3600, '/');
  echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;
  // счетчик посещений страницы
?>