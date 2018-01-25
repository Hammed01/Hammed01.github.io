<?php

$ToEmail = 'shotolahammed01@gmail.com';
$EmailSubject = 'Enquiry';
$mailHeader = "From: " .$_POST["email"]."\r\n";
$mailHeader = "Content-type: text/html; charset=iso-8859-1\r\n";
$name ="Name: ".$_POST["name"]."";
$MESSAGE_BODY="Comment: ".nl2br($_POST["comment"])."";
mail($ToEmail, $EmailSubject,$mailHeader, $MESSAGE_BODY);
echo "Email Was sent Succesfully. Thank You $name";
?>
