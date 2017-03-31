<?php
// $cookie_name = "user";
// $cookie_value = json_encode($_GET);
// // $cookie_value = 'hey';
// setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); // 86400 = 1 day
// Start the session
// session_start();

// $_SESSION["uid"] = $_GET['uid'];
// $_SESSION["mac"] = $_GET['mac'];
// $_SESSION["email"] = $_GET['email'];
isset($_GET['uid']) ? setcookie('wifi[uid]', $_GET['uid'] , time()+3600*90) : '';
isset($_GET['email']) ? setcookie('wifi[email]', $_GET['email'] , time()+3600*90) : '';
?>
