<?php
include 'index.html';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  if (isset($name) && empty($name) && isset($email) && empty($email)) {
    echo '<script>alert("Name and email mandatory");</script>';
  } else {
    $to = "sharjeel.rao089@gmail.com"; // Replace with your own email address
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

    $headers = "From: " . $email;

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 2;
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->CharSet = "utf-8"; // set charset to utf8
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPDebug = 2;

    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    // $mail->SMTPAutoTLS = false;
    $mail->Port = 587; // TCP port to connect to
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );
    $mail->isHTML(true); // Set email format to HTML

    $mail->Username = 'kumaillatif60@gmail.com'; // SMTP username
    $mail->Password = 'xgxaqnzyzfjgaxfe'; // SMTP password

    $mail->setFrom($email, $name); //Your application NAME and EMAIL
    $mail->Subject = 'Sigma Soft user connection request'; //Message subject
    $mail->MsgHTML($body); // Message body
    $mail->addAddress('kumaillatif60@gmail.com', 'Sigma Soft AI'); // Target email




    // Add attachments if needed
//$mail->addAttachment('path/to/file.pdf');

    try {
      $mail->send();
      echo '<script>alert("Message sent successfully");</script>';
    } catch (Exception $e) {
      echo $mail->ErrorInfo;
      echo '<script>alert("Error sending request");</script>';
      // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
}
?>