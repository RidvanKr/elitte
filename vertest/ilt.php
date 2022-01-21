<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL);
$to = "ridvankirkit2@gmail.com";
$from = "return@kod-can.com";
$subject = "PHP Mail";
$message = "PHP Mail test maili.";
$headers = "From:" . $from;
mail($to, $subject, $message, $headers);
echo "Mail gönderildi";

?>