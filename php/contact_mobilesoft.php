<?php

$text = 'sdfsdfsd';

$mail = mail('dj.slyusar@rambler.ru', 'My Subject', $text);

if($mail)
{
	$message = 'ok';
} else
{
	$message = "Some problems with server...";
}
$answer = array('result' => $mail, 'msg' => $message);
print json_encode($answer);
?>