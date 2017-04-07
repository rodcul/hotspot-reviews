<?php
  include 'config.php';
  $uid = isset($_COOKIE['wifi']['uid']) ? $_COOKIE['wifi']['uid'] : '';
  $url = $urls[$_GET['url']];
  $create_time = date("Y-m-d H:i:s");

  header( "Location:" . $urls[$_GET['url']] );
  $sql = 'INSERT INTO clicks '.'(create_time, uid,url) '. "VALUES ( '$create_time', '$uid', '{$_GET['url']}' )";
  include('template/mysql.php');
  exit();
?>
