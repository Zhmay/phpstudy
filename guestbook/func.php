<?php
  if(!empty($_POST['name'] && !empty($_POST['text']))) {
    file_put_contents('database.txt', 'Name: '.$_POST['name'].'|'.'Message: '.$_POST['text']. '|' . 'Date: ' .date('Y-m-d') . '|' . 'Time: ' .date('H:i:s'). '\n', FILE_APPEND | LOCK_EX);    
  }
  header('Location: index.php');
?>