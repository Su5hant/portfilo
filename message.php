//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST['Name']);
  $email = htmlspecialchars($_POST['Email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

      $receiver = "sushantsigdel123@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\n
      Email: $email\n
      Subject: $subject\n
      \nMessage:\n$message
      \n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Your message has been sent";
      }
  else{
    echo "Email and message field is required!";
  }
?>