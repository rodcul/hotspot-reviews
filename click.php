<?php
  include 'config.php';
  $uid = isset($_COOKIE['wifi']['uid']) ? $_COOKIE['wifi']['uid'] : '';
  $url = $urls[$_GET['url']];


  header( "Location:" . $urls[$_GET['url']] );
  $sql = 'INSERT INTO clicks '.'(uid,url) '. "VALUES ( '$uid', '{$_GET['url']}' )";
  include('template/mysql.php');
  exit();
?>
