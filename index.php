<?php
//Where to send the email
$to = "er.nehlers@gmail.com";

$subject = 'Inquiry from Website';

//Collect the data from the form
$name = $_POST['myname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];



if( !empty($name) and !empty($email) and !empty($message) ){
  $msg = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

  //Don't change this
  $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
  
  if( mail($to, $subject, $msg, $headers) ){
    header('Location: success.html');
    exit();
  }
  
}


header('Location: error.html');