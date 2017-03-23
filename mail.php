<?php
	$to      = 'rkdoshi@princeton.edu';
	$subject = $_POST['name'] + ': ' + $_POST['subject'];
	$message = $_POST['message'];
	$headers = 'From: ' + $_POST['email'];
	mail($to, $subject, $message, $headers);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>