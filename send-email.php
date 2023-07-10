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
    $to = "kumaillatif60@gmail.com"; // Replace with your own email address sharjeel.rao089@gmail.com
    $toPass = "kumaillatif1122";
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

    $headers = "From: " . $email;

    $mail = new PHPMailer(true);


    try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
      $mail->isSMTP(); //Send using SMTP
      $mail->Host = 'smtp.example.com'; //Set the SMTP server to send through
      $mail->SMTPAuth = true; //Enable SMTP authentication
      $mail->Username = $to; //SMTP username
      $mail->Password = $toPass; //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
      $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom($email, $name);
      $mail->addAddress($to, 'Sigma Soft AI'); //Add a recipient
      // $mail->addAddress('ellen@example.com');
      $mail->addReplyTo('info@sigmasoftai.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

      //Content
      $mail->isHTML(true); //Set email format to HTML
      $mail->Subject = 'User connection Request';
      $mail->Body = $body;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      echo '<script>alert("Message sent successfully");</script>';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }




    // Add attachments if needed
//$mail->addAttachment('path/to/file.pdf');

    // try {
    //   $mail->send();
    //   echo '<script>alert("Message sent successfully");</script>';
    // } catch (Exception $e) {
    //   echo $mail->ErrorInfo;
    //   echo '<script>alert("Error sending request");</script>';
    // }
  }
}
?>