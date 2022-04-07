<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once './include/Exception.php';
require_once './include/PHPMailer.php';
require_once './include/SMTP.php';

// include './include/email.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



try {
$mail = new PHPMailer(true);
// $email->ajax = true;
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
// $mail->SMTPSecure = "ssl";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
// $mail->SMTPSecure = "tls";
$mail->Port = 465;
$mail->Password = "27052020Geca";
$mail->Username = "akuntsaya01@gmail.com";

// content 
$mail->isHTML(true);  
$mail->Subject = "Test send mail";
$mail->setFrom("akuntsaya01@gmail.com");
$mail->addAddress("yepiaprianus@gmail.com");

// include html
$filename = "./include/email.html";
$file_contents = file_get_contents($filename);
$file_contents = str_replace("no_telp", "", $file_contents);

// $test = $file_contents->getElementsByTagId();

$mail->Body = $file_contents;
// $mail->Body = "ini body";

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */
// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'abitegar69@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['phone'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['budget'].' - '.$_POST['location'];

// // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
// /*

// $contact->smtp = array(
//   'host' => 'smtp.gmail.com',
//   'username' => 'akuntsaya01@gmail.com',
//   'password' => '',
//   'port' => '465'
// );
// */

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();
  if ($mail->send()) {
    echo "OK";
  }else{
    echo "failed<br>";
    //  echo $mail->ErrorInfo;
    
  }
} catch (Exception $e) {  
  echo $e;
}

$mail->smtpClose();

  
