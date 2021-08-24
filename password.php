<?php 

$text = "admin123456";
$password = password_hash($text, PASSWORD_DEFAULT);

echo $password;

?>