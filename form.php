<?php
include('config.php');
// $feedback = $_POST['feedback'];

$rating = isset($_POST['rating']) ? $_POST['rating'] : '';
$feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';
$uid = isset($_COOKIE['wifi']['uid']) ? $_COOKIE['wifi']['uid'] : '';

$email_subject = "WIFI: $rating $feedback";
$email_body = "Put something here";
$email_from = isset($_COOKIE['wifi']['email']) ? $_COOKIE['wifi']['email'] : 'rodney@overstand.co.th';
$create_time = date("Y-m-d H:i:s");

$sql = 'INSERT INTO ratings '.
   '(create_time,uid,rating,email) '.
   "VALUES ('$create_time', '$uid', '$rating', '$email_from' )";


$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_from \r\n";
mail($email_to, $email_subject, $email_body, $headers);

if (empty($feedback)) {
    if ($rating >= 4) {
        header('Location: review.php');
        include('template/mysql.php');
        exit();
    } else {
        header('Location: feedback.php');
        include('template/mysql.php');
        exit();
    }
} else {
    header('Location: thanks.php');
    exit();
}
