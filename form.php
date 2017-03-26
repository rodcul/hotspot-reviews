<?php
include('config.php');



// $feedback = $_POST['feedback'];

$rating = isset($_POST['rating']) ? $_POST['rating'] : '';
$feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';


$email_subject = "WIFI: $rating $feedback";
$email_body = "Put something here";


// $headers = "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
mail($email_to, $email_subject, $email_body);

if (empty($feedback)) {
    if ($rating >= 4) {
        header('Location: review.php');
        exit();
    } else {
        header('Location: feedback.php');
        exit();
    }
} else {
    header('Location: thanks.php');
    exit();
}
