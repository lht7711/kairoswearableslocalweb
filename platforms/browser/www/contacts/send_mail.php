<?php
$mail_to = "info@kairoswearables.com";
$mail_from = $email;


$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));
$subject = strip_tags(trim($_POST['subject']));
if($subject!='') $mail_subject = '[Kairos Wearables] ' . $subject;
else $mail_subject = '[Kairos Werables] Contact form of website (Not fill the subject)';
$text = strip_tags(trim($_POST['message']));

$message = "<h3>CONTACT FORM WAS SUBMITTED</h3>"."<br>";
$message .= "<b><strong>Name</strong> :</b> ".$name."<br>";
$message .= "<b><strong>Email</strong> :</b> ".$email."<br>";
$message .= "<b><strong>Message</strong> :</b> ".$text."<br>";

$headers = "From: " . $name . "<".$email.">" . "\r\n";
$headers .= "Reply-To:".$email."\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers


mail($email,$mail_subject,$message,$headers);
?>