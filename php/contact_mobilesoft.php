<?php
$senderName = isset($_POST['senderName']) ? $_POST['senderName'] : '';  
$senderEmail = isset($_POST['senderEmail']) ? $_POST['senderEmail'] : '';
$senderPhone = isset($_POST['senderPhone']) ? $_POST['senderPhone'] : '';
$senderMessage = isset($_POST['senderMessage']) ? $_POST['senderMessage'] : '';


$text = 'Sender name: '.$senderName."\n";
$text .= 'Sender email: '.$senderEmail."\n";
$text .= 'Sender phone: '.$senderPhone."\n\n";
$text .= "Sender message: \n".$senderMessage."\n";

$mail = mail('info@mobilesoft365.com', 'Contact Form (mobilesoft365.com)', $text);

if($mail)
{
	$message = 'ok';
} else
{
	$message = "Some problems with server...";
}
$answer = array('result' => $mail, 'msg' => $text);
print json_encode($answer);
?>