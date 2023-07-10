<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "sharjeel.rao089@gmail.com"; // Replace with your own email address
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;
  
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Error sending message.";
  }
}
?>
