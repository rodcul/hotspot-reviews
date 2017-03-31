<?php
echo "<h2>Testing Postfix...</h2>";
$to = 'rodney@overstand.co.th';
$subject = 'This is the subject!';
$body = 'This is the email body.';
$from = 'From: From Address <rodney@overstand.co.th>' . "\r\n";
// $option = "-ffrom.address@gmail.com";
mail($to, $subject, $body, $from);
?>
